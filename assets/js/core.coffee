# Require JS config.
requirejs.config
	paths:
		# CDN powered
		angular: ['//ajax.googleapis.com/ajax/libs/angularjs/1.2.3/angular.min']
		jquery: ['//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min']
		hammer: ['//cdnjs.cloudflare.com/ajax/libs/hammer.js/1.0.5/jquery.hammer.min']

		# Local
		controllers: ['/wp/wp-content/themes/NWS-WP/assets/js/controllers']
		services: ['/wp/wp-content/themes/NWS-WP/assets/js/services']
		directives: ['/wp/wp-content/themes/NWS-WP/assets/js/directives']
		filters: ['/wp/wp-content/themes/NWS-WP/assets/js/filters']
		hoverintent: ['/wp/wp-content/themes/NWS-WP/assets/js/library/hoverIntent']

	shim: 
		angular: exports: 'angular'
		controllers: ['angular']
		services: ['angular']
		directives: ['angular']
		filters: ['angular']
		hoverintent: ['jquery']

	priority: ['angular']

require ['jquery', 'angular', 'controllers', 'directives'], ($, ajs) ->
	ajs.module 'app', [
		'app.controllers',
		'app.directives'
	]