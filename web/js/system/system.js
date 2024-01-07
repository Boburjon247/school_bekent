document.addEventListener("DOMContentLoaded", function () {
    // accordion bar
    $(function () {
        $(".nav_content li #accordion").accordion({
            collapsible: true,
            active: false
        });
    });
    // dialog
    $(function () {
        $("#dialog").dialog({
            autoOpen: false,
            show: {
                effect: "blind",
                duration: 1000
            },
            hide: {
                effect: "explode",
                duration: 1000
            }
        });
    });
    // open madal window function
    (function ($) {
        // open
        $.madalOpen = function (window, ani) {
            $(window).toggle("fold", 800);
        }
        // exit
        $.madalExit = function (window, ani) {
            $(window).toggle("fold", 800);
        }
    })(jQuery);

    // $('#opener').on('click', () => {
    //     jQuery.madalOpen('.dialog_c_m');    
    // });

    $('.exit_btn').on('click', () => {
        jQuery.madalExit('.dialog_c_m');
        // Jquery.madal_animation_exit('.dialog_c_m');
    });

    $('.add_yil').on('click', () => {
        if ($('.input_y').val() != '') {
            jQuery.madalExit('.dialog_c_m');
            $('.input_y').val('');
            $('.error_text').text('');
        }
        else {
            $('.error_text').text('Yangi file yaratng... ');
            setTimeout(() => {
                $('.error_text').text('');
            }, 5000);
        }
    });






});