</div>
<footer>
		<p class="copyright">© 2014 Edoo Inc. All Rights Reserved.</p>
</footer>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/base.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/waypoints.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.scrollFade.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.page-scroller-308.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/html5shiv.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script type="text/javascript">

//googlemap
google.maps.event.addDomListener(window, 'load', init);
function init() {
    var mapOptions = {
        zoom: 15,
        center: new google.maps.LatLng(33.591435, 130.401275),
        scrollwheel: false,
        draggable: false,
        styles: [{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#b5cbe4"}]},{"featureType":"landscape","stylers":[{"color":"#efefef"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#83a5b0"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#bdcdd3"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e3eed3"}]},{"featureType":"administrative","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"road"},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{},{"featureType":"road","stylers":[{"lightness":20}]}]
    };
    var mapElement = document.getElementById('map');
    var map = new google.maps.Map(mapElement, mapOptions);

    // Use pin
    var myLatlng = new google.maps.LatLng(33.591435, 130.401275);
    var marker = new google.maps.Marker({
       position: myLatlng,
       map: map,
       title:""
    });
}

//parallax

if(!navigator.userAgent.match(/(iPhone|iPad|Android)/)){
jQuery(function($){
    var $window = $(window);
    $('#mainvisual').each(function(index) {
        var $self = $(this);
        var offsetPositions = $self.offset();
        $(window).scroll(function() {
            // この領域がブラウザに表示されている場合
            if (($window.scrollTop() + $window.height()) > offsetPositions.top && ((offsetPositions.top + $self.height()) > $window.scrollTop())) {
            var offsetY = -(($window.scrollTop() - offsetPositions.top)/ 17);
            //var offsetY = -($window.scrollTop()/ 17);
            var positions = '50%' + offsetY + 'px';
            $self.css('backgroundPosition', positions);
            }
        });
    });
});
}



//header action
$(function() {
    $('#about').waypoint(function(direction) {
        $("header").toggleClass("fixed");
    });
    $('#about p').waypoint(function(direction) {
        $("header").toggleClass("scrolled");
    });
});

//　header navigation current
$(function(){
    var set = -800;
    var boxTop = new Array;
    var current = -1;
    //各要素の位置
    $('section').each(function(i) {
        boxTop[i] = $(this).offset().top;
    });
    //最初の要素にclass="on"をつける
    changeBox(0);
    //スクロールした時の処理
    $(window).scroll(function(){
        scrollPosition = $(window).scrollTop();
        for (var i = boxTop.length - 1 ; i >= 0; i--) {
            if ($(window).scrollTop() > boxTop[i] - set) {
                changeBox(i);
                break;
            }
        };
    });
    //ナビの処理
    function changeBox(secNum) {
        if (secNum != current) {
            current = secNum;
            secNum2 = secNum + 1;//HTML順序用
            $('nav li').removeClass('on');
            $('nav li:nth-child(' + secNum2 +')').addClass('on');
        }
    };
});

// read page with fade in
$(function () {
    $("body").css("opacity", 0);
    $("body").animate({opacity: "1"}, 1000);
  });
jQuery( function( $ ) {
    $( 'section' ).scrollFade({
    	duration:500
    });
} );

// team toggle class
 $(function () {
    if(navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)){
    $("#team ul li img").click(function () {
        $("#team ul li div").removeClass();
        $(this).parent().children().addClass("open");
    });
   }else{
    $("#team ul li img").hover(function () {
        $("#team ul li div").removeClass();
        $(this).parent().children().addClass("open");
    });
    }
});



//height fix to window size
$(window).on('load resize', function(){
    var wH = $(window).height();
    var divH = $('#mainvisual').innerHeight();
    if(wH > divH){
        $('#mainvisual').css('min-height',wH+'px');
    }
});
</script>
<!--[if lte IE 6]>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/DD_belatedPNG_0.0.8a.js"></script>
<script type="text/javascript">
    var oldFixPng = DD_belatedPNG.fixPng;
    DD_belatedPNG.fixPng = function (el) {
        oldFixPng(el);
        if (el.vml && el.vml.image.fill.getAttribute("src").match(/_off\./)) {
            el.vml.image.shape.attachEvent('onmouseenter', function() {
                var image = el.vml.image.fill;
                image.setAttribute("src", image.getAttribute("src").replace("_off.", "_on."));
            });
            el.vml.image.shape.attachEvent('onmouseleave', function() {
                var image = el.vml.image.fill;
                image.setAttribute("src", image.getAttribute("src").replace("_on.", "_off."));
            });
        }
    };
    DD_belatedPNG.fix('*');
</script>
<![endif]-->

<?php wp_footer(); ?>
</body>
</html>
