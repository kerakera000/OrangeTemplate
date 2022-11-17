//$の部分は全部jQueryに変更

//読み込み時着火
jQuery(function () {
    jQuery(document).ready(function () {
        jQuery('.load-text').addClass('load-text-active'); 
        jQuery('.load').delay(4000).queue(function(){
            jQuery('.load').addClass('load-active'); 
            jQuery('.body').addClass('body-active');
        })
    });
  });


    var thisOffset;
    jQuery(window).on('load', function () {
        thisOffset = jQuery('#mainstorycontent').offset().top + jQuery('#mainstorycontent').outerHeight();
    });
    jQuery(window).scroll(function () {
        if (jQuery(window).scrollTop() + jQuery(window).height() > thisOffset) {
        // 特定の要素を超えた 
        } else {
        // 特定の要素を超えていない
        }
    });

//     var nav_pos = $("#global_nav").offset().top;
// var nav_height = $("#global_nav").outerHeight();
// $(window).scroll(function () {
//     if ($(this).scrollTop() > nav_pos) {
//         $("body").css("padding-top", nav_height);
//         $("#global_nav").addClass("fixed");
//     } else {
//         $("body").css("padding-top", 0);
//         $("#global_nav").removeClass("fixed");
//     }
// });