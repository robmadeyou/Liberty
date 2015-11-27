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
	var email_input = $( '#IndexPresenter_Email' );
	var website_input = $( '#IndexPresenter_Website' );
	var company_input = $( '#IndexPresenter_CompanyName' );

	register.click( function( event )
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
		}, 1500 );

		event.preventDefault();
		return false;
	});

	$( '.js-fade-out-index' ).click( function( event )
	{
		$( '.js-slideUp' ).fadeOut();
		event.delay( 200 );
	});

	name_input.keyup( function()
	{
		inputCheck( 'Name', name_input.val(), function( val )
		{
			handleElementUpdate( name_input, parseInt( val ) );
		}, name_input );
	});

	email_input.keyup( function()
	{
		inputCheck( 'Email', email_input.val(), function( val )
		{
			handleElementUpdate( email_input, parseInt( val ) );
		}, email_input );
	});

	website_input.keyup( function()
	{
		inputCheck( 'Website', website_input.val(), function( val )
		{
			handleElementUpdate( website_input, parseInt( val ) )
		}, website_input );
	});

	company_input.keyup( function()
	{
		inputCheck( 'Company', company_input.val(), function( val )
		{
			handleElementUpdate( company_input, parseInt( val ) )
		}, company_input );
	});

	function inputCheck( elementName, value, callback, element )
	{
		if( value == "" )
		{
			clearMessages( element );
		}
		else
		{
			self.raiseServerEvent( 'InputCheck', elementName, value, callback );
		}
	}

	function handleElementUpdate( element, mode )
	{
		clearMessages( element );
		switch( mode )
		{
			case 0:
				element.addClass( 'success' );
				break;
			case 1:
				element.addClass( 'info' );
				break;
			case 2:
				element.addClass( 'help' );
				break;
			case 3:
				element.addClass( 'error' );
				break;
		}
	}

	function clearMessages( element )
	{
		element.removeClass( 'help' );
		element.removeClass( 'info' );
		element.removeClass( 'error' );
		element.removeClass( 'success' );
	}
};

window.rhubarb.viewBridgeClasses.IndexViewBridge = bridge;