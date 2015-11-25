var bridge = function (presenterPath) {
	window.rhubarb.viewBridgeClasses.JqueryHtmlViewBridge.apply(this, arguments);
};

bridge.prototype = new window.rhubarb.viewBridgeClasses.JqueryHtmlViewBridge();
bridge.prototype.constructor = bridge;

bridge.prototype.attachEvents = function () {

	var self = this;

	var title = $( '.js-title--main' );
	var text = $( '.js-text--main' );
	var register = $( '.js-button--register' );

	var name_input = $( '#IndexPresenter_Name' );

	register.click( function()
	{
		title.removeClass( 'fadeInUp' );
		title.addClass( 'slideUp' );

		text.removeClass( 'fadeInUp' );
		text.addClass( 'fadeUpOut' );
		text.addClass( 'd-2' );

		register.removeClass( 'fadeInUp' );
		register.addClass( 'fadeUpOut' );
		register.addClass( 'd-3' );

		setTimeout( function()
		{
			$( '.js-input-overlay' ).addClass( 'visible' );
			setTimeout( function()
			{
				$( '.js-input-overlay' ).css( 'opacity', '1' );
			}, 100 );
		}, 1500 )
	});

	name_input.keyup( function()
	{
		inputCheck( 'Name', name_input.val(), function( val )
		{
			handleElementUpdate( name_input, parseInt( val ) );
		});
	});

	function inputCheck( elementName, value, callback )
	{
		self.raiseServerEvent( 'InputCheck', elementName, value, callback );
	}

	function handleElementUpdate( element, mode )
	{
		clearMessages( element );
		switch( mode )
		{
			case 0:
				element.addClass( 'alert-success' );
				break;
			case 1:
				element.addClass( 'alert-info' );
				break;
			case 2:
				element.addClass( 'alert-help' );
				break;
			case 3:
				element.addClass( 'alert-error' );
				break;
		}
	}

	function clearMessages( element )
	{
		element.removeClass( 'alert-help' );
		element.removeClass( 'alert-info' );
		element.removeClass( 'alert-error' );
		element.removeClass( 'alert-success' );
	}
};

window.rhubarb.viewBridgeClasses.IndexViewBridge = bridge;