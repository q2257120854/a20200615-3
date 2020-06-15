var onez=onez||{};
onez.alert=function(message,callback){
  if(typeof callback=='undefined'){
    bootbox.alert(message);
  }else{
    bootbox.alert(message,callback);
  }
};
onez.confirm=function(message,callback){
  if(typeof callback=='undefined'){
    bootbox.alert(message);
  }else{
    bootbox.confirm(message,function(r){
      if(r){
        callback();
      }
    });
  }
};
onez.reload=function(form){
  window.location.reload();
};
onez.reload2=function(form){
  parent.location.reload();
};
onez.closeWin=function(form){
  if(parent==self){
    window.close();
  }else{
    if(typeof parent.closeWin=='function'){
      parent.closeWin();
    }
  }
};
onez.doit=function(data){
  if(typeof data.error=='string'){
    onez.alert(data.error);
  }
  if(typeof data.status=='string' && data.status=='success'){
    if(typeof data.goto=='string'){
      if(typeof data.message=='string'){
        onez.alert(data.message,function(){
          if(data.goto=='reload'){
            window.location.reload();
          }else if(data.goto=='reload2'){
            parent.location.reload();
          }else if(data.goto=='close'){
            if(parent==self){
              window.close();
            }else{
              if(typeof parent.closeWin=='function'){
                parent.closeWin();
              }
            }
          }else{
            window.location.href=data.goto;
          }
        });
      }else{
        if(data.goto=='reload'){
          window.location.reload();
        }else if(data.goto=='reload2'){
          parent.location.reload();
        }else if(data.goto=='close'){
          if(parent==self){
            window.close();
          }else{
            if(typeof parent.closeWin=='function'){
              parent.closeWin();
            }
          }
        }else{
          window.location.href=data.goto;
        }
      }
    }else if(typeof data.message=='string'){
      onez.alert(data.message);
    }
  }
};
onez.formpost=function(form){
  $.post(window.location.href,$(form).serialize()+'&ajax=1',function(data){
    onez.doit(data);
  },'json');
};
onez.del=function(id){
  onez.confirm('您确定要删除这条记录吗？',function(){
    $.post(window.location.href,{action:'delete',id:id,ajax:1},function(data){
      onez.doit(data);
    },'json');
  });
};
onez.formcheck=function(form,option){
  var o={
    errorElement: 'span', //default input error message container
    errorClass: 'help-block help-block-error', // default input error message class
    focusInvalid: false, // do not focus the last invalid input
    ignore: "",  // validate all fields including form hidden input
    highlight: function (element) { // hightlight error inputs
        $(element)
            .closest('.form-group').addClass('has-error'); // set error class to the control group
    },
    unhighlight: function (element) { // revert the change done by hightlight
        $(element)
            .closest('.form-group').removeClass('has-error'); // set error class to the control group
    },
    success: function (label) {
        label
            .closest('.form-group').removeClass('has-error'); // set success class to the control group
    },
    submitHandler: function (form) {
        onez.formpost(form);
    }
  };
  if(typeof option=='object'){
    for(var k in option){
      o[k]=option[k];
    }
  }
  form.validate(o);
};
//在光标插入文字

jQuery.extend({     
    /**    
     * 清除当前选择内容    
     */    
    unselectContents: function(){     
        if(window.getSelection)     
            window.getSelection().removeAllRanges();     
        else if(document.selection)     
            document.selection.empty();     
    }     
});     
jQuery.fn.extend({     
    /**    
     * 选中内容    
     */    
    selectContents: function(){     
        $(this).each(function(i){     
            var node = this;     
            var selection, range, doc, win;     
            if ((doc = node.ownerDocument) &&     
                (win = doc.defaultView) &&     
                typeof win.getSelection != 'undefined' &&     
                typeof doc.createRange != 'undefined' &&     
                (selection = window.getSelection()) &&     
                typeof selection.removeAllRanges != 'undefined')     
            {     
                range = doc.createRange();     
                range.selectNode(node);     
                if(i == 0){     
                    selection.removeAllRanges();     
                }     
                selection.addRange(range);     
            }     
            else if (document.body &&     
                     typeof document.body.createTextRange != 'undefined' &&     
                     (range = document.body.createTextRange()))     
            {     
                range.moveToElementText(node);     
                range.select();     
            }     
        });     
    },     
    /**    
     * 初始化对象以支持光标处插入内容    
     */    
    setCaret: function(){     
        if(!$.browser.msie) return;     
        var initSetCaret = function(){     
            var textObj = $(this).get(0);     
            textObj.caretPos = document.selection.createRange().duplicate();     
        };     
        $(this)     
        .click(initSetCaret)     
        .select(initSetCaret)     
        .keyup(initSetCaret);     
    },     
    /**    
     * 在当前对象光标处插入指定的内容    
     */    
    insertAtCaret: function(textFeildValue){     
       var textObj = $(this).get(0);     
       if(document.all && textObj.createTextRange && textObj.caretPos){     
           var caretPos=textObj.caretPos;     
           caretPos.text = caretPos.text.charAt(caretPos.text.length-1) == '' ?     
                               textFeildValue+'' : textFeildValue;     
       }     
       else if(textObj.setSelectionRange){     
           var rangeStart=textObj.selectionStart;     
           var rangeEnd=textObj.selectionEnd;     
           var tempStr1=textObj.value.substring(0,rangeStart);     
           var tempStr2=textObj.value.substring(rangeEnd);     
           textObj.value=tempStr1+textFeildValue+tempStr2;     
           textObj.focus();     
           var len=textFeildValue.length;     
           textObj.setSelectionRange(rangeStart+len,rangeStart+len);     
           textObj.blur();     
       }     
       else {     
           textObj.value+=textFeildValue;     
       }     
    }     
}); 