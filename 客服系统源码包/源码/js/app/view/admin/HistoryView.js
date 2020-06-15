//==============================================================================
//
//  History view
//
//==============================================================================

(function(app, $, _, config)
{
    var HistoryView = app.HistoryView = Backbone.View.extend({

        events : {

            'click #customer-chat-history-search' : 'search',
            'click #customer-chat-history-clear'  : 'clear',
            'keydown input'                       : 'searchOnEnter',
            'click .customer-chat-history-item'   : 'showConversation',
            'click .btn-mail-transcript'          : 'mailTalkTranscript',
            'click #history-list-display-more'    : 'displayMoreResults'
        },

        templateHelpers : {

            displayDate : function()
            {
                var date        = new Date(this.datetime.replace(/-/g,"/")),
                    dayString   = date.getDate() < 10 ? '0' + date.getDate() : date.getDate(),
                    monthString = (date.getMonth() + 1 < 10) ? '0' + (date.getMonth() + 1) : (date.getMonth() + 1),
                    dateString  = isNaN(date.getDay()) ? '' : dayString + '.' + monthString + '.' + date.getFullYear();

                return dateString;
            }
        },

        searching : false,

        lastSearch : { items : [], displayed : 0, query : {} },

        participantViews : null,

        initialize : function()
        {
            // Initialize models

            this.model = app.model.chat;

            // Initialize the content

            this.$el.html(app.template.history());

            // Cache view elements

            this.$results              = this.$('#customer-chat-history-search-results');
            this.$inputs               = this.$('*[name]');
            this.$search               = this.$('#customer-chat-history-search');
            this.$clear                = this.$('#customer-chat-history-clear');
            this.$loading              = this.$('.customer-chat-content-loading-icon').hide();
            this.$resultItems          = this.$('#customer-chat-history-search-results .customer-chat-content-messages-wrapper');
            this.$displayMore          = $(app.template.historyListDisplayMore());
            this.$historyTalk          = this.$('.customer-chat-history-chat');
            this.$participantsScroller = this.$('.participants-scroller');
            this.$participants         = this.$('.customer-chat-talk-header-users .participants-content');
            this.$headerDate           = this.$('#customer-chat-talk-header .date-info');

            this.participantViews = [];

            // Initialize elements

            this.$('.date-input').datepicker();
            this.$results.mCustomScrollbar();
            this.$participantsScroller.mCustomScrollbar();

            // Personalize based on the user's roles

            var user = this.user = app.model.user;

            if(!user.hasRole('ADMIN'))
            {
                this.$clear.hide();
            }

            // Create sub views

            this.chatBoxView = new app.ChatBoxView({ el : this.$('#history-results-chat'), model : new app.ChatViewModel(), fullDate : true });

            // Handle rendering

            this.model.on('change',  this.render,  this);
            this.model.on('request', this.disable, this);
            this.model.on('sync',    this.enable,  this);

            // Handle global events

            this.listenTo(app, 'history.search', this.autoSearch);

            this.render();
        },

        search : function()
        {
            if(!this.searching)
            {
                this.searching = true;
                this.clearSearchResults();

                // Generate query object

                var query = {

                    offset : this.lastSearch.displayed,
                    limit  : HistoryView.RESULTS_DISPLAY_COUNT + 1

                };

                this.$inputs.each(function()
                {
                    var $el = $(this);

                    if($el.val())
                    {
                        if($el.attr('type') == 'checkbox')
                        {
                            query[$el.attr('name')] = $el.is(':checked') ? 'true' : 'false';
                        }
                        else
                        {
                            query[$el.attr('name')] = $el.val();
                        }
                    }
                });

                this.lastSearch.query = query;

                this.model.queryHistory(query, $.proxy(this.onQueryResults, this), $.proxy(this.onQueryError, this));
            }
        },

        searchOnEnter : function(e)
        {
            if(e.which === 13) // ENTER
            {
                this.search();
            }
        },

        clear : function()
        {
            // Ask for confirmation

            var _this = this, options = {};

            options[app.service.i18n.trans('clear.messages')] = function()
            {
                _this._clear();

                $(this).dialog('close');
            };

            app.view.dialogs.confirm(app.service.i18n.trans('clear.history'), app.service.i18n.trans('clear.history.q'), options);
        },

        _clear : function()
        {
            // Clear the chat box & conversations list

            this.chatBoxView.clear();
            this.$historyTalk.hide();
            this.clearSearchResults();

            this.model.clearHistory($.proxy(this.onClear, this), $.proxy(this.onClearError));
        },

        autoSearch : function(data)
        {
            // Fill search inputs with data

            this.$inputs.each(function()
            {
                var $el  = $(this);
                var name = $el.attr('name');

                if(typeof data[name] !== undefined)
                {
                    $el.val(data[name]);
                }
            });

            // Perform searching

            this.search();
        },

        onQueryError : function()
        {
            this.searching = false;
        },

        onQueryResults : function(results)
        {
            this.searching = false;

            this.prepareResults(results);

            // Store the search results

            this.lastSearch.items = this.lastSearch.items.concat(results);

            // Show the results

            this.displayResults();
        },

        onClearError : function()
        {
            app.view.dialogs.message(app.service.i18n.trans('clear.history'), app.service.i18n.trans('clear.history.err'));
        },

        onClear : function()
        {
            app.view.dialogs.message(app.service.i18n.trans('clear.history'), app.service.i18n.trans('history.cleared'));
        },

        displayResults : function()
        {
            // Check if there's more to be displayed

            var results   = this.lastSearch.items;
            var displayed = this.lastSearch.displayed;

            if(displayed < results.length)
            {
                var endIndex = Math.max(0, Math.min(results.length, displayed + HistoryView.RESULTS_DISPLAY_COUNT));

                this.addSearchResults(results.slice(displayed, endIndex), $.proxy(function()
                {
                    // Show the "display more" link, if necessary

                    if(results.length > endIndex)
                    {
                        this.$resultItems.append(this.$displayMore.show());
                    }
                    else
                    {
                        this.$displayMore.remove();
                    }

                    // Update the scroller

                    this.$results.mCustomScrollbar('update');

                    // Update results info

                    this.lastSearch.displayed = endIndex;

                }, this));
            }
        },

        displayMoreResults : function()
        {
            // Request next entries

            this.lastSearch.query.offset = this.lastSearch.displayed;

            this.model.queryHistory(this.lastSearch.query, $.proxy(this.onQueryResults, this), $.proxy(this.onQueryError, this));
        },

        render : function()
        {
            return this;
        },

        setSearchResults : function(dataArray)
        {
            this.clearSearchResults();
            this.addSearchResults(dataArray);
        },

        addSearchResults : function(dataArray, callback)
        {
            // Collect all user IDs

            var ids = [];

            for(var i = 0; i < dataArray.length; i++)
            {
                for(var j = 0; j < dataArray[i].length; j++)
                {
                    if(ids.indexOf(dataArray[i][j].from_id) === -1) ids.push(dataArray[i][j].from_id);
                    if(ids.indexOf(dataArray[i][j].to_id)   === -1) ids.push(dataArray[i][j].to_id);
                }
            }

            // Request user details

            var _this = this;

            app.UserModel.getUsers(ids, function()
            {
                // Add search results

                for(var i = 0; i < dataArray.length; i++)
                {
                    _this.addSearchResult(dataArray[i]);
                }

                callback();
            });
        },

        clearSearchResults : function()
        {
            this.$resultItems.html('');

            // Update the scroller

            this.$results.mCustomScrollbar('update');

            // Reset last search data

            this.lastSearch.items     = [];
            this.lastSearch.displayed = 0;
            this.lastSearch.query     = {};
        },

        addSearchResult : function(talkData)
        {
            // Fill results with authors' details

            this.model.addUserInfoToMessages(talkData, $.proxy(function()
            {
                var data  = talkData[0];
                var $item = $(app.template.historyListItem(data, {

                    helpers : this.templateHelpers
                }));

                // Set entry label

                this.model.getTalkParticipants(talkData, function(users)
                {
                    var userNames = _.map(users, function(user)
                    {
                        return user.getReadableName();
                    });

                    if(userNames.length > 0)
                    {
                        $item.find('.customer-chat-history-item-username').html(userNames.join(', '));
                    }
                });

                // Store item's data in itself

                var info = _.clone(new app.MessageModel(data).attributes);

                info.author = info.author + ' (' + info.authorMail + ')';

                $item.data('info', talkData);

                // Add item to search results

                this.$resultItems.append($item);

                // Update the scroller

                this.$results.mCustomScrollbar('update');

            }, this));
        },

        showConversation : function(evt)
        {
            // Clear the chat box

            this.chatBoxView.clear();

            // Get talk's data

            var $item    = $(evt.currentTarget);
            var talkData = $item.data('info');

            this.talkId = talkData[0].talk_id;

            // Sort messages

            talkData.sort(function(a, b)
            {
                return a.datetime > b.datetime ? 1 : -1;
            });

            var firstMsg = new app.MessageModel(talkData[0]),
                lastMsg  = new app.MessageModel(talkData[talkData.length - 1]);

            // Get talk participants

            this.model.getTalkParticipants(talkData, $.proxy(function(participants)
            {
                // Remove previous views

                for(var i = this.participantViews.length; i--;)
                {
                    this.participantViews[i].remove();
                }

                this.participantViews = [];

                // Render participants

                for(var i = 0; i < participants.length; i++)
                {
                    var user = participants[i],
                        view = new app.ParticipantView({ model : user });

                    this.$participants.append(view.el);

                    // Remember views for later removal

                    this.participantViews.push(view);
                }

                // Show talk's header

                this.$headerDate.html(firstMsg.get('datetime') + ' — ' + lastMsg.get('datetime'));
                this.$historyTalk.show();
                this.$participantsScroller.mCustomScrollbar('update');

            }, this));

            // Add messages to the chat box

            for(var i = 0; i < talkData.length; i++)
            {
                var entry = talkData[i], hideMessage = false;
                entry.info = entry.from_user_info.info;

                var extra = entry.extra;

                if(extra)
                {
                    switch(extra.type)
                    {
                        case app.MessageModel.EXTRA_TALK_START:
                            hideMessage = true;
                        break;
                    }
                }

                if(!hideMessage) this.chatBoxView.addMessage(new app.MessageModel(entry), false, true);
            }
        },

        mailTalkTranscript : function()
        {
            app.controller.actions.run('mailTalkTranscript', [ this.talkId ]);
        },

        prepareResults : function(results)
        {
            for(var i = 0; i < results.length; i++)
            {
                var item = results[i];

                // Remove random ID from the guest's name

                if(item.roles && item.roles.toLowerCase().indexOf('guest') !== -1)
                {
                    item.name = item.name.lastIndexOf('-') !== -1 ? item.name.slice(0, item.name.lastIndexOf('-')) : item.name;
                }
            }
        }
    },
    {
        RESULTS_DISPLAY_COUNT : 20 // size of a single fragment of paginated content
    });

})(window.Application, jQuery, _, window.chatConfig);
