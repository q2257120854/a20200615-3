//==============================================================================
//
//  AjaxUploader - asynchronous upload library
//
//==============================================================================

;(function(ns)
{
    function AjaxUploader(options)
    {
        this.listeners = {};

        this.input      = options.input;
        this.files      = options.files;
        this.filesField = options.filesField;
        this.url        = options.url;
        this.data       = options.data;

        if(options.onError)    this.on('error',     options.onError);
        if(options.onAbort)    this.on('abort',     options.onAbort);
        if(options.onLoad)     this.on('load',      options.onLoad);
        if(options.onProgress) this.on('progress',  options.onProgress);
    }

    if(hasModernAPI())
    {
        AjaxUploader.prototype.upload      = modernUpload;
        AjaxUploader.prototype.abort       = modernAbort;
        AjaxUploader.prototype._onError    = modernOnError;
        AjaxUploader.prototype._onAbort    = modernOnAbort;
        AjaxUploader.prototype._onLoad     = modernOnLoad;
        AjaxUploader.prototype._onProgress = onProgress;
    }
    else
    {
        AjaxUploader.prototype.upload        = oldUpload;
        AjaxUploader.prototype.abort         = oldAbort;
        AjaxUploader.prototype._onError      = oldOnError;
        AjaxUploader.prototype._onAbort      = oldOnAbort;
        AjaxUploader.prototype._onLoad       = oldOnLoad;
        AjaxUploader.prototype._createIFrame = createIFrame;
        AjaxUploader.prototype._createForm   = createForm;
        AjaxUploader.prototype._removeForm   = removeForm;
        AjaxUploader.prototype._removeIFrame = removeIFrame;
    }

    AjaxUploader.prototype.getFiles = function()
    {
        return this.files || this.input.files;
    };

    AjaxUploader.prototype.on      = on;
    AjaxUploader.prototype.off     = off;
    AjaxUploader.prototype.trigger = trigger;

    // Modern API //////////////////////////////////////////////////////////////

    function modernUpload()
    {
        // Prevent from calling function twice

        if(this.xhr) throw new Error('AjaxUploader instance should be used only once');

        this.uploading = true;

        // Create request and data

        var xhr      = this.xhr = new XMLHttpRequest(),
            formData = new FormData();

        if(this.data)
        {
            for(var k in this.data)
            {
                formData.append(k, this.data[k]);
            }
        }

        var files = this.files;

        if(this.input)
        {
            files = this.input.files;
        }

        if(files)
        {
            for(var i = 0; i < files.length; i++)
            {
                var file = files[i];

                formData.append(this.filesField, file, file.name);
            }
        }

        // Handle events

        xhr.upload.onprogress = this._onProgress.bind(this);
        xhr.onload            = this._onLoad.bind(this);
        xhr.onerror           = this._onError.bind(this);
        xhr.onabort           = this._onAbort.bind(this);

        // Send request

        xhr.open('POST', this.url, true);
        xhr.send(formData);
    }

    function modernAbort()
    {
        this.xhr.abort();
    }

    function modernOnError()
    {
        this.trigger('error');
    }

    function modernOnAbort()
    {
        this.trigger('abort');
    }

    function modernOnLoad()
    {
        this.trigger('load', this.xhr.responseText);
    }

    function onProgress(e)
    {
        if(e.lengthComputable)
        {
            this.trigger('progress', e.loaded / e.total);
        }
    }

    // Old API /////////////////////////////////////////////////////////////////

    function oldUpload()
    {
        // Prevent from calling function twice

        if(this.iframe) throw new Error('AjaxUploader instance should be used only once');

        if(!this.input)
        {
            this.onError();

            return;
        }

        this.uploading = true;

        this._createIFrame();
        this._createForm();

        // Handle events

        this.iframe.onload  = this._onLoad.bind(this);
        this.iframe.onerror = this._onError.bind(this);

        // Send request

        this.form.submit();
    }

    function oldAbort()
    {
        // Stop loading

        if(this.iframe.stop) this.iframe.stop();

        // Clean up

        this._removeForm();
        this._removeIFrame();

        // Notify

        this.onAbort();
    }

    function createIFrame()
    {
        this.iframeId = 'ajax-uploader-' + Math.floor(Math.random() * Date.now());
        this.iframe   = document.createElement('iframe');

        this.iframe.width         = 0;
        this.iframe.height        = 0;
        this.iframe.style.display = 'none';
        this.iframe.id            = this.iframeId;
        this.iframe.name          = this.iframeId;

        document.body.appendChild(this.iframe);
    }

    function createForm()
    {
        this.form = document.createElement('form');

        this.form.action  = this.url;
        this.form.target  = this.iframeId;
        this.form.method  = 'post';
        this.form.enctype = 'multipart/form-data';

        if(this.data)
        {
            var hiddenInputs = document.createDocumentFragment();

            for(var k in this.data)
            {
                var input = document.createElement('input');

                input.type  = 'hidden';
                input.name  = k;
                input.value = this.data[k];

                hiddenInputs.appendChild(input);
            }

            this.form.appendChild(hiddenInputs);
        }

        this.inputParent = this.input.parentNode;
        this.inputNext   = this.input.nextSibling;

        this.inputParent.appendChild(this.form);
        this.form.appendChild(this.input);
    }

    function oldOnError()
    {
        // Clean up

        this._removeForm();
        this._removeIFrame();

        this.trigger('error');
    }

    function oldOnAbort()
    {
        // Clean up

        this._removeForm();
        this._removeIFrame();

        this.trigger('abort');
    }

    function oldOnLoad()
    {
        // Get response

        var body     = this.iframe.contentWindow.document.body,
            response = body.innerText || body.textContent || body.innerHTML;

        // Clean up

        this._removeForm();
        this._removeIFrame();

        // Notify

        this.trigger('load', response);
    }

    function removeForm()
    {
        if(this.inputNext)
        {
            this.inputParent.insertBefore(this.input, this.inputNext);
        }
        else
        {
            this.inputParent.appendChild(this.input);
        }

        this.inputParent.removeChild(this.form);
        this.form = null;
    }

    function removeIFrame()
    {
        document.body.removeChild(this.iframe);
        this.iframe = null;
    }

    // Other ///////////////////////////////////////////////////////////////////

    function on(eventName, fn)
    {
        if(!this.listeners[eventName])
        {
            this.listeners[eventName] = [];
        }

        this.listeners[eventName].push(fn);
    }

    function off(eventName, fn)
    {
        var listeners = this.listeners[eventName];

        if(listeners)
        {
            var i = listeners.indexOf(fn);

            if(i !== -1)
            {
                listeners.splice(i, 1);
            }
        }
    }

    function trigger(eventName)
    {
        var listeners = this.listeners[eventName];

        if(listeners)
        {
            var args = Array.prototype.slice.call(arguments, 1);

            for(var i = 0; i < listeners.length; i++)
            {
                listeners[i].apply(this, args);
            }
        }
    }

    function hasModernAPI()
    {
        return window.File && window.FileList && window.FormData && window.XMLHttpRequest && new XMLHttpRequest().upload;
    }

    ns.AjaxUploader = AjaxUploader;

})(window);
