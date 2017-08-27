(function () {

    var laroute = (function () {

        var routes = {

            absolute: false,
            rootUrl: 'http://care.local/',
            routes : [{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/open","name":"debugbar.openhandler","action":"Barryvdh\Debugbar\Controllers\OpenHandlerController@handle"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/clockwork\/{id}","name":"debugbar.clockwork","action":"Barryvdh\Debugbar\Controllers\OpenHandlerController@clockwork"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/assets\/stylesheets","name":"debugbar.assets.css","action":"Barryvdh\Debugbar\Controllers\AssetController@css"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/assets\/javascript","name":"debugbar.assets.js","action":"Barryvdh\Debugbar\Controllers\AssetController@js"},{"host":null,"methods":["GET","HEAD"],"uri":"\/","name":null,"action":"Closure"},{"host":null,"methods":["GET","HEAD"],"uri":"get-driver","name":"get-driver","action":"App\Http\Controllers\DriverController@index"},{"host":null,"methods":["POST"],"uri":"get-driver","name":null,"action":"App\Http\Controllers\DriverController@saveDriverRequest"},{"host":null,"methods":["GET","HEAD"],"uri":"change-password","name":"change.password","action":"App\Http\Controllers\Auth\ResetPasswordController@getPasswordChangeForm"},{"host":null,"methods":["POST"],"uri":"change-password","name":null,"action":"App\Http\Controllers\Auth\ResetPasswordController@changePassword"},{"host":null,"methods":["GET","HEAD"],"uri":"admin","name":"admin","action":"App\Http\Controllers\AdminController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/dashboard","name":"dashboard","action":"App\Http\Controllers\AdminController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/driver-summary.json","name":"driver-summary","action":"App\Http\Controllers\AdminController@requestGraph"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/all-driver-requests.json","name":"driverRequest.json","action":"App\Http\Controllers\api\DriverRequestController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/profile","name":"profile","action":"App\Http\Controllers\ProfileController@index"},{"host":null,"methods":["POST"],"uri":"admin\/profile","name":"profile","action":"App\Http\Controllers\ProfileController@update"},{"host":null,"methods":["POST"],"uri":"admin\/profile\/passowrd-change","name":"profile.password","action":"App\Http\Controllers\ProfileController@changePassword"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/users","name":"users.index","action":"App\Http\Controllers\UserController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/users\/create","name":"users.create","action":"App\Http\Controllers\UserController@create"},{"host":null,"methods":["POST"],"uri":"admin\/users","name":"users.store","action":"App\Http\Controllers\UserController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/users\/{user}","name":"users.show","action":"App\Http\Controllers\UserController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/users\/{user}\/edit","name":"users.edit","action":"App\Http\Controllers\UserController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"admin\/users\/{user}","name":"users.update","action":"App\Http\Controllers\UserController@update"},{"host":null,"methods":["DELETE"],"uri":"admin\/users\/{user}","name":"users.destroy","action":"App\Http\Controllers\UserController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/driver-requests","name":"driver-requests.index","action":"App\Http\Controllers\DriverRequestsController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/driver-requests\/create","name":"driver-requests.create","action":"App\Http\Controllers\DriverRequestsController@create"},{"host":null,"methods":["POST"],"uri":"admin\/driver-requests","name":"driver-requests.store","action":"App\Http\Controllers\DriverRequestsController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/driver-requests\/{driver_request}","name":"driver-requests.show","action":"App\Http\Controllers\DriverRequestsController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/driver-requests\/{driver_request}\/edit","name":"driver-requests.edit","action":"App\Http\Controllers\DriverRequestsController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"admin\/driver-requests\/{driver_request}","name":"driver-requests.update","action":"App\Http\Controllers\DriverRequestsController@update"},{"host":null,"methods":["DELETE"],"uri":"admin\/driver-requests\/{driver_request}","name":"driver-requests.destroy","action":"App\Http\Controllers\DriverRequestsController@destroy"},{"host":null,"methods":["POST"],"uri":"admin\/driver-requests\/{driver_request}\/messages","name":"driver-requests.store.message","action":"App\Http\Controllers\DriverRequestsController@storeMessage"},{"host":null,"methods":["POST"],"uri":"admin\/driver-requests\/{driver_request}\/comments","name":"driver-requests.store.comment","action":"App\Http\Controllers\DriverRequestsController@storeComment"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/drivers","name":"drivers.index","action":"App\Http\Controllers\DriversController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/drivers\/create","name":"drivers.create","action":"App\Http\Controllers\DriversController@create"},{"host":null,"methods":["POST"],"uri":"admin\/drivers","name":"drivers.store","action":"App\Http\Controllers\DriversController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/drivers\/{driver}","name":"drivers.show","action":"App\Http\Controllers\DriversController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/drivers\/{driver}\/edit","name":"drivers.edit","action":"App\Http\Controllers\DriversController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"admin\/drivers\/{driver}","name":"drivers.update","action":"App\Http\Controllers\DriversController@update"},{"host":null,"methods":["DELETE"],"uri":"admin\/drivers\/{driver}","name":"drivers.destroy","action":"App\Http\Controllers\DriversController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/clients","name":"clients.index","action":"App\Http\Controllers\ClientsController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/clients\/create","name":"clients.create","action":"App\Http\Controllers\ClientsController@create"},{"host":null,"methods":["POST"],"uri":"admin\/clients","name":"clients.store","action":"App\Http\Controllers\ClientsController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/clients\/{client}","name":"clients.show","action":"App\Http\Controllers\ClientsController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/clients\/{client}\/edit","name":"clients.edit","action":"App\Http\Controllers\ClientsController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"admin\/clients\/{client}","name":"clients.update","action":"App\Http\Controllers\ClientsController@update"},{"host":null,"methods":["DELETE"],"uri":"admin\/clients\/{client}","name":"clients.destroy","action":"App\Http\Controllers\ClientsController@destroy"},{"host":null,"methods":["POST"],"uri":"admin\/clients\/new\/request\/{dr}","name":"clients.createFromRequest","action":"App\Http\Controllers\ClientsController@createFromRequest"},{"host":null,"methods":["POST"],"uri":"admin\/clients\/attach-request\/{user}\/{dr}","name":"clients.attachRequest","action":"App\Http\Controllers\ClientsController@attachRequestToUser"},{"host":null,"methods":["GET","HEAD"],"uri":"login","name":"login","action":"App\Http\Controllers\Auth\LoginController@showLoginForm"},{"host":null,"methods":["POST"],"uri":"login","name":null,"action":"App\Http\Controllers\Auth\LoginController@login"},{"host":null,"methods":["POST"],"uri":"logout","name":"logout","action":"App\Http\Controllers\Auth\LoginController@logout"},{"host":null,"methods":["GET","HEAD"],"uri":"register","name":"register","action":"App\Http\Controllers\Auth\RegisterController@showRegistrationForm"},{"host":null,"methods":["POST"],"uri":"register","name":null,"action":"App\Http\Controllers\Auth\RegisterController@register"},{"host":null,"methods":["GET","HEAD"],"uri":"password\/reset","name":"password.request","action":"App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm"},{"host":null,"methods":["POST"],"uri":"password\/email","name":"password.email","action":"App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail"},{"host":null,"methods":["GET","HEAD"],"uri":"password\/reset\/{token}","name":"password.reset","action":"App\Http\Controllers\Auth\ResetPasswordController@showResetForm"},{"host":null,"methods":["POST"],"uri":"password\/reset","name":null,"action":"App\Http\Controllers\Auth\ResetPasswordController@reset"},{"host":null,"methods":["GET","HEAD"],"uri":"home","name":"home","action":"App\Http\Controllers\HomeController@index"}],
            prefix: '',

            route : function (name, parameters, route) {
                route = route || this.getByName(name);

                if ( ! route ) {
                    return undefined;
                }

                return this.toRoute(route, parameters);
            },

            url: function (url, parameters) {
                parameters = parameters || [];

                var uri = url + '/' + parameters.join('/');

                return this.getCorrectUrl(uri);
            },

            toRoute : function (route, parameters) {
                var uri = this.replaceNamedParameters(route.uri, parameters);
                var qs  = this.getRouteQueryString(parameters);

                if (this.absolute && this.isOtherHost(route)){
                    return "//" + route.host + "/" + uri + qs;
                }

                return this.getCorrectUrl(uri + qs);
            },

            isOtherHost: function (route){
                return route.host && route.host != window.location.hostname;
            },

            replaceNamedParameters : function (uri, parameters) {
                uri = uri.replace(/\{(.*?)\??\}/g, function(match, key) {
                    if (parameters.hasOwnProperty(key)) {
                        var value = parameters[key];
                        delete parameters[key];
                        return value;
                    } else {
                        return match;
                    }
                });

                // Strip out any optional parameters that were not given
                uri = uri.replace(/\/\{.*?\?\}/g, '');

                return uri;
            },

            getRouteQueryString : function (parameters) {
                var qs = [];
                for (var key in parameters) {
                    if (parameters.hasOwnProperty(key)) {
                        qs.push(key + '=' + parameters[key]);
                    }
                }

                if (qs.length < 1) {
                    return '';
                }

                return '?' + qs.join('&');
            },

            getByName : function (name) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].name === name) {
                        return this.routes[key];
                    }
                }
            },

            getByAction : function(action) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].action === action) {
                        return this.routes[key];
                    }
                }
            },

            getCorrectUrl: function (uri) {
                var url = this.prefix + '/' + uri.replace(/^\/?/, '');

                if ( ! this.absolute) {
                    return url;
                }

                return this.rootUrl.replace('/\/?$/', '') + url;
            }
        };

        var getLinkAttributes = function(attributes) {
            if ( ! attributes) {
                return '';
            }

            var attrs = [];
            for (var key in attributes) {
                if (attributes.hasOwnProperty(key)) {
                    attrs.push(key + '="' + attributes[key] + '"');
                }
            }

            return attrs.join(' ');
        };

        var getHtmlLink = function (url, title, attributes) {
            title      = title || url;
            attributes = getLinkAttributes(attributes);

            return '<a href="' + url + '" ' + attributes + '>' + title + '</a>';
        };

        return {
            // Generate a url for a given controller action.
            // laroute.action('HomeController@getIndex', [params = {}])
            action : function (name, parameters) {
                parameters = parameters || {};

                return routes.route(name, parameters, routes.getByAction(name));
            },

            // Generate a url for a given named route.
            // laroute.route('routeName', [params = {}])
            route : function (route, parameters) {
                parameters = parameters || {};

                return routes.route(route, parameters);
            },

            // Generate a fully qualified URL to the given path.
            // laroute.route('url', [params = {}])
            url : function (route, parameters) {
                parameters = parameters || {};

                return routes.url(route, parameters);
            },

            // Generate a html link to the given url.
            // laroute.link_to('foo/bar', [title = url], [attributes = {}])
            link_to : function (url, title, attributes) {
                url = this.url(url);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given route.
            // laroute.link_to_route('route.name', [title=url], [parameters = {}], [attributes = {}])
            link_to_route : function (route, title, parameters, attributes) {
                var url = this.route(route, parameters);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given controller action.
            // laroute.link_to_action('HomeController@getIndex', [title=url], [parameters = {}], [attributes = {}])
            link_to_action : function(action, title, parameters, attributes) {
                var url = this.action(action, parameters);

                return getHtmlLink(url, title, attributes);
            }

        };

    }).call(this);

    /**
     * Expose the class either via AMD, CommonJS or the global object
     */
    if (typeof define === 'function' && define.amd) {
        define(function () {
            return laroute;
        });
    }
    else if (typeof module === 'object' && module.exports){
        module.exports = laroute;
    }
    else {
        window.laroute = laroute;
    }

}).call(this);

