$(function(){

	$.fn.aplicarCor = function(options){
		
        var settings = $.extend({
            color: '#069',
            backgroundColor: '#096'
        }, options);

        return this.css({
            color: settings.color,
            backgroundColor: settings.backgroundColor
        })
	}
	
});