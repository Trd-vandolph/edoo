
/**
 * Flatten height same as the highest element for each row.
 *
 * Copyright (c) 2011 Hayato Takenaka
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 * @author: Hayato Takenaka (http://urin.take-uma.net)
 * @version: 0.0.2
**/
;(function($) {
	$.fn.tile = function(columns) {
		var tiles, max, c, h, last = this.length - 1, s;
		if(!columns) columns = this.length;
		this.each(function() {
			s = this.style;
			if(s.removeProperty) s.removeProperty("height");
			if(s.removeAttribute) s.removeAttribute("height");
		});
		return this.each(function(i) {
			c = i % columns;
			if(c == 0) tiles = [];
			tiles[c] = $(this);
			h = tiles[c].height();
			if(c == 0 || h > max) max = h;
			if(i == last || c == columns - 1)
				$.each(tiles, function() { this.height(max); });
		});
	};
})(jQuery);



/**
 *windowopen
**/

$(document).ready( function () {
    $('.blank').click(function(){
        window.open(this.href, '_blank');
        return false;
    });
});

$(function(){

	/* changing background when for smaller devices*/
	var $res = $('#responsive .olivecode');
	if($(window).width() < 480) {
		$res.addClass('sp_bg');
	} else {
		$res.removeClass('sp_bg');
	}

	/*  responsive menu */
	$("#toggle").click(function(){
		$("header nav").slideToggle();
		return false;
	});
	$(window).resize(function(){
		var win = $(window).width();
		if(win > 480){
			$("#menu").show();
			$res.removeClass('sp_bg');
		} else {
			$("#menu").hide();
			$res.addClass('sp_bg');
		}
	});

	//flickering banner
	setInterval(function() {
		$( ".b-on" ).fadeOut();
	}, 3000);
	setInterval(function() {
		$( ".b-off" ).fadeIn();
	}, 500);

	var bannerEn = $('#banner .wrap .en');
	var bannerJa = $('#banner .wrap .ja');
	bannerEn.on('click', function(){
		window.open(
			'http://www.edoo.co.jp/responsive?lang=en',
			'_blank'
		);
	});
	bannerJa.on('click', function(){
		window.open(
			'http://www.edoo.co.jp/responsive?lang=ja',
			'_blank'
		);
	});
});
