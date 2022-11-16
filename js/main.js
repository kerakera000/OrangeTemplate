//$の部分は全部jQueryに変更

//読み込み時着火
jQuery(function () {
    jQuery(document).ready(function () {
        jQuery('.load-text').addClass('load-text-active'); 
        jQuery('.load').delay(4000).queue(function(){
            jQuery('.load').addClass('load-active'); 
        })
    });
  });


    var thisOffset;
    jQuery(window).on('load', function () {
        thisOffset = jQuery('#introduction').offset().top + jQuery('#introduction').outerHeight();
    });
    jQuery(window).scroll(function () {
        if (jQuery(window).scrollTop() + jQuery(window).height() > thisOffset) {
        // 特定の要素を超えた 
        jQuery('#introduction').addClass('introduction-action'); 
        } else {
        // 特定の要素を超えていない
        }
    });