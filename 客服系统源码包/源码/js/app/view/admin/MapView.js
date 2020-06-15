//==============================================================================
//
//  Users map view
//
//==============================================================================

(function(app, config, _, google)
{
    var gm = google && google.maps;

    Math.log2 = Math.log2 || function(x)
    {
      return Math.log(x) / Math.LN2;
    };

    var MapView = app.MapView = Backbone.View.extend({

        initialize : function()
        {
            // Display another content if API key isn't available

            this.apiKey = app.model.uiSettings.get('gMapsKey').get('value');

            if(!this.apiKey)
            {
                this.$('.no-key-info').show();
                this.$('.map-wrapper').hide();

                return;
            }

            // Cancel if google namespace is empty

            if(!gm) return;

            // Initialize models

            this.model   = app.model.chat;
            this.users   = [];
            this.markers = {};

            this.listenTo(this.model, 'users:online', this.render);

            // Cache view components

            this.$mapWrapper = this.$('.map-wrapper');

            // Handle events

            this.$el.one('show', _.debounce(_.bind(this.createMap, this), 200));

            this.listenTo(app, 'show:map', _.bind(this.showUser, this));
        },

        createMap : function()
        {
            // Create the map

            var styledMap1 = new gm.StyledMapType(MapView.STYLES_ULTRA_LIGHT,    { name: 'Ultra Light'    }),
                styledMap2 = new gm.StyledMapType(MapView.STYLES_SHADES_OF_GREY, { name: 'Shades of Grey' });
                styledMap3 = new gm.StyledMapType(MapView.STYLES_JUST_PLACES,    { name: 'Just Places'    }),
                styledMap4 = new gm.StyledMapType(MapView.STYLES_COBALT,         { name: 'Cobalt'         }),

            this.map = new gm.Map(this.$mapWrapper[0], {

                mapTypeId : gm.MapTypeId.ROADMAP,

                disableDefaultUI : true,
                zoomControl      : true,
                mapTypeControl   : true,
                scaleControl     : true,

                center : new gm.LatLng(0, 0),

                zoom : Math.ceil(Math.log2(this.$el.width())) - 9,

                mapTypeControlOptions : {

                    mapTypeIds: [

                        'style1',
                        'style2',
                        'style3',
                        'style4',
                        gm.MapTypeId.ROADMAP,
                        gm.MapTypeId.SATELLITE,
                        gm.MapTypeId.HYBRID,
                        gm.MapTypeId.TERRAIN
                    ]
                }
            });

            this.map.setTilt(0);
            this.map.mapTypes.set('style1', styledMap1);
            this.map.mapTypes.set('style2', styledMap2);
            this.map.mapTypes.set('style3', styledMap3);
            this.map.mapTypes.set('style4', styledMap4);
            this.map.setMapTypeId('style1');

            // Refresh the view

            this.render();
        },

        // Rendering

        render : function()
        {
            if(!this.map) return false;

            // Render users

            this.renderUsers();

            // Position on given user, if any

            if(this.showUserAfterRender)
            {
                this.showUser(this.showUserAfterRender);

                delete this.showUserAfterRender;
            }

            return this;
        },

        renderUsers : function()
        {
            var users = this.model.onlineUsers; // users currently online

            // Remove obsolete markers

            for(var userId in this.markers)
            {
                if(!_.find(users, function(u)
                {
                    return u.get('id') == userId;
                }))
                {
                    this.removeMarker(userId);
                }
            }

            // Add new markers

            for(var i = users.length - 1; i >= 0; i--)
            {
                var user = users[i];

                if(!this.hasMarker(user.get('id')))
                {
                    this.addMarker(user);
                }
            }
        },

        showUser : function(userId)
        {
            if(!userId) return;

            if(!this.map)
            {
                this.showUserAfterRender = userId;

                return;
            }

            var markerEntry = this.getMarker(userId);

            if(markerEntry)
            {
                this.map.setCenter(markerEntry.markers[0].getPosition());
                this.map.setZoom(4);
            }
        },

        // Markers management

        addMarker : function(user)
        {
            var info = user.get('info');

            if(info)
            {
                var geoloc = info.geoloc;

                if(geoloc && geoloc.latitude && geoloc.longitude)
                {
                    var markerEntry = this.markers[user.get('id')] = {

                        userId : user.get('id'),

                        originalPos : {

                            lat : geoloc.latitude,
                            lng : geoloc.longitude
                        },

                        markers : this.createMarkers(geoloc.latitude, geoloc.longitude, user.get('image'))
                    }

                    _.each(markerEntry.markers, function(marker)
                    {
                        marker.addListener('click', _.bind(this.onMarkerClick, this, markerEntry));

                    }, this);
                }
            }
        },

        createMarkers : function(lat, lng, imagePath)
        {
            var pos = new gm.LatLng(lat, lng), bgMarker;

            var marker = new gm.Marker({

                map       : this.map,
                position  : pos,

                zIndex : 2
            });

            if(imagePath)
            {
                marker.setIcon({

                    url    : imagePath,
                    anchor : new gm.Point(20, 63)
                });

                bgMarker = new gm.Marker({

                    map       : this.map,
                    position  : pos,

                    icon : {

                        url : config.mapMarkerPath
                    },

                    zIndex : 1
                });

                return [ bgMarker, marker ];
            }

            return [ marker ];
        },

        removeMarker : function(userId)
        {
            var markerEntry = this.markers[userId];

            if(markerEntry)
            {
                var markers = markerEntry.markers;

                _.each(markerEntry.markers, function(marker)
                {
                    // Remove from map

                    marker.setMap(null);

                    // Free the listeners

                    gm.event.clearInstanceListeners(marker);

                }, this);

                // Remove from the list

                delete this.markers[userId];
            }
        },

        hasMarker : function(userId)
        {
            return !!this.markers[userId];
        },

        getMarker : function(userId)
        {
            return this.markers[userId];
        },

        // Event handlers

        onMarkerClick : function(markerEntry)
        {
            // Open appropriate chat tab

            app.view.window.chatTabView.showTalk(null, markerEntry.userId);
            app.view.window.menuView.showChat();
        }
    },
    {
        STYLES_JUST_PLACES : [

            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#fffffa"
                    }
                ]
            },
            {
                "featureType": "water",
                "stylers": [
                    {
                        "lightness": 50
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "labels",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "transit",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry",
                "stylers": [
                    {
                        "lightness": 40
                    }
                ]
            }
        ],

        STYLES_COBALT : [

            {
                "featureType": "all",
                "elementType": "all",
                "stylers": [
                    {
                        "invert_lightness": true
                    },
                    {
                        "saturation": 10
                    },
                    {
                        "lightness": 30
                    },
                    {
                        "gamma": 0.5
                    },
                    {
                        "hue": "#435158"
                    }
                ]
            }
        ],

        STYLES_ULTRA_LIGHT : [

            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e9e9e9"
                    },
                    {
                        "lightness": 17
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 17
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 29
                    },
                    {
                        "weight": 0.2
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 18
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 16
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    },
                    {
                        "lightness": 21
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dedede"
                    },
                    {
                        "lightness": 21
                    }
                ]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 16
                    }
                ]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "saturation": 36
                    },
                    {
                        "color": "#333333"
                    },
                    {
                        "lightness": 40
                    }
                ]
            },
            {
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f2f2f2"
                    },
                    {
                        "lightness": 19
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#fefefe"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#fefefe"
                    },
                    {
                        "lightness": 17
                    },
                    {
                        "weight": 1.2
                    }
                ]
            }
        ],

        STYLES_SHADES_OF_GREY : [

            {
                "featureType": "all",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "saturation": 36
                    },
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 40
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 16
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 17
                    },
                    {
                        "weight": 1.2
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 21
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 17
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 29
                    },
                    {
                        "weight": 0.2
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 18
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 16
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 19
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 17
                    }
                ]
            }
        ]
    });

})(window.Application, window.chatConfig, window._, window.google);
