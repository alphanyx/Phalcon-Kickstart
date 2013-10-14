/*-----------------------------------------------------------------------------------
/* Styles Switcher
-----------------------------------------------------------------------------------*/

window.console = window.console || (function(){
	var c = {}; c.log = c.warn = c.debug = c.info = c.error = c.time = c.dir = c.profile = c.clear = c.exception = c.trace = c.assert = function(){};
	return c;
})();


jQuery(document).ready(function(jQuery) {
	
        // Style Switcher	
		jQuery('#style-switcher').animate({
			right: '-300px'
		});
		
		jQuery('#style-switcher h2 a').click(function(e){
			e.preventDefault();
			var div = jQuery('#style-switcher');
			console.log(div.css('right'));
			if (div.css('right') === '-300px') {
				jQuery('#style-switcher').animate({
					right: '0px'
				}); 
			} else {
				jQuery('#style-switcher').animate({
					right: '-300px'
				});
			}
		})
                
		// Color Changer
		

		
		jQuery(".cyborg" ).click(function(){
			jQuery("#colors" ).attr("href", "http://netdna.bootstrapcdn.com/bootswatch/2.3.2/cyborg/bootstrap.min.css" );
			return false;
		});
		
		jQuery(".readable" ).click(function(){
			jQuery("#colors" ).attr("href", "http://netdna.bootstrapcdn.com/bootswatch/2.3.2/readable/bootstrap.min.css" );
			return false;
		});
		
		jQuery(".united" ).click(function(){
			jQuery("#colors" ).attr("href", "http://netdna.bootstrapcdn.com/bootswatch/2.3.2/united/bootstrap.min.css" );
			return false;
		});
		jQuery(".journal" ).click(function(){
			jQuery("#colors" ).attr("href", "http://netdna.bootstrapcdn.com/bootswatch/2.3.2/journal/bootstrap.min.css" );
			return false;
		});
		
		jQuery(".spruce" ).click(function(){
			jQuery("#colors" ).attr("href", "http://netdna.bootstrapcdn.com/bootswatch/2.3.2/spruce/bootstrap.min.css" );
			return false;
		});
		jQuery(".spacelab" ).click(function(){
			jQuery("#colors" ).attr("href", "http://netdna.bootstrapcdn.com/bootswatch/2.3.2/spacelab/bootstrap.min.css" );
			return false;
		});
		
		jQuery(".simplex" ).click(function(){
			jQuery("#colors" ).attr("href", "http://netdna.bootstrapcdn.com/bootswatch/2.3.2/simplex/bootstrap.min.css" );
			return false;
		});
		
		jQuery(".slate" ).click(function(){
			jQuery("#colors" ).attr("href", "http://netdna.bootstrapcdn.com/bootswatch/2.3.2/slate/bootstrap.min.css" );
			return false;
		});
		
		jQuery(".superhero" ).click(function(){
			jQuery("#colors" ).attr("href", "http://netdna.bootstrapcdn.com/bootswatch/2.3.2/superhero/bootstrap.min.css" );
			return false;
		});
		
		jQuery(".flatly" ).click(function(){
			jQuery("#colors" ).attr("href", "http://netdna.bootstrapcdn.com/bootswatch/2.3.2/flatly/bootstrap.min.css" );
			return false;
		});
				
		jQuery(".twittstrap" ).click(function(){
			jQuery("#colors" ).attr("href", "http://twittstrap.com/twittstrap/assets/css/bootstrap.css" );
			return false;
		});
					
		jQuery(".todcstrap" ).click(function(){
			jQuery("#colors2" ).attr("href", "http://todc.github.io/todc-bootstrap/assets/css/todc-bootstrap.css" );
			return false;
		});
		
		jQuery(".sharpspark" ).click(function(){
			jQuery("#colors2" ).attr("href", "http://www.bootstrapremix.com/free/sharpspark/assets/css/bootstrap.css" );
			return false;
		});
		
		
	
		
		
		// Layout Switcher
		jQuery(".boxed" ).click(function(){
			jQuery("#layout" ).attr("href", "css/wide.css" );
			return false;
		});

		jQuery("#layout-switcher").on('change', function() {
			jQuery('#layout').attr('href', jQuery(this).val() + '.css');
		});;

		
		
		
		jQuery('.colors li a').click(function(e){
			e.preventDefault();
			jQuery(this).parent().parent().find('a').removeClass('active');
			jQuery(this).addClass('active');
		})
		
	
		jQuery('.bg li a').click(function(e){
			e.preventDefault();
			jQuery(this).parent().parent().find('a').removeClass('active');
			jQuery(this).addClass('active');
			var bg = jQuery(this).css('backgroundImage');
			jQuery('body').css('backgroundImage',bg)
		})
                
		
		jQuery('.bgsolid li a').click(function(e){
			e.preventDefault();
			jQuery(this).parent().parent().find('a').removeClass('active');
			jQuery(this).addClass('active');
			var bg = jQuery(this).css('backgroundColor');
			jQuery('body').css('backgroundColor',bg).css('backgroundImage','none')
		})
                
		jQuery('.navcolor li a').click(function(e){
			e.preventDefault();
			jQuery(this).parent().parent().find('a').removeClass('active');
			jQuery(this).addClass('active');
			var bg = jQuery(this).css('backgroundColor');
			jQuery('#navigation').css('backgroundColor',bg).css('backgroundImage','none');
			jQuery('#navigation ul ul').css('backgroundColor',bg).css('backgroundImage','none');
                        
		})
		
		
		jQuery('#reset a').click(function(e){
			var bg = jQuery(this).css('backgroundImage');
			jQuery('body').css('backgroundImage','url(./images/bg/noise.png)');
                        jQuery('#navigation').css('backgroundColor','#333');
			jQuery('#navigation ul ul').css('backgroundColor','#333');
                        jQuery("#colors" ).attr("href", "assets/css/bootstrap.css" );
						jQuery("#colors2" ).attr("href", "assets/css/styleempty.css" );
		})
			

	});