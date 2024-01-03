document.addEventListener('DOMContentLoaded', (e) => {
   // import { ntoastJS_F} from "<?= $config['base']['url'] . 'web / '?>js/NToastJS.js";
   // canvas
   'use strict';
   let canvas = [
      'q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'z', 'x', 'c', 'v', 'b', 'n', 'm',
      '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'
   ];
   (function ($) {
      $.rand = function (arg) {
         if ($.isArray(arg)) {
            return arg[$.rand(arg.length)];
         } else if (typeof arg === "number") {
            return Math.floor(Math.random() * arg);
         } else {
            return 50;  // chosen by fair dice roll
         }
      };
   })(jQuery);
   let canvasitem = '';
   let canvasid = document.getElementById("canvas");
   let ctx = canvasid.getContext("2d");
   let text = '';
   ctx.fillStyle = "blue";
   ctx.font = "60px verdana";

   for (let index = 0; index <= 5; index++) {
      canvasitem += jQuery.rand(canvas);
   }


   text = canvasitem;
   ctx.fillText(text, 60, canvasid.height - 50);

   // aloqa murojat input check
   const inputbox = document.querySelectorAll("#inputA");
   const btnCanva = document.querySelector('#murojatAdd');
   const canvasItemCheck = document.querySelector('.canvasItemCheck');
   (function ($) {
      $.check = function (e) {
         inputbox.forEach((element, index) => {
            if ($(element).val() == '' || $(element).val() == ' ') {
               $(element).css('border', '1px solid red');
            }
            else {
               $(element).css('border', '1px solid #E9E9EA');
               if ($('.canvasItemCheck').val() === text) {
                  $('.canvasItemCheck').css('border', '1px solid #E9E9EA');
               }
               else {
                  $('.canvasItemCheck').css('border', '1px solid red');
               }
            }
         });
      }
   })(jQuery);

   canvasItemCheck.addEventListener('input', () => {
      if ($('.canvasItemCheck').val() === text) {
         btnCanva.setAttribute('type', 'submit');
         $('.canvasItemCheck').css('border', '1px solid lime');
      }
   })

   $('#murojatAdd').on('click', (e) => {
      e.preventDefault();
      if ($('.canvasItemCheck').val() === text) {
         $.ajax({
            data: {
               fishAJX: $('.input_fish').val(),
               emailAJX: $('.input_email').val(),
               telAJX: $('.input_tel').val(),
               manzilAJX: $('.input_manzil').val(),
               sarlavhaAJX: $('.input_sarlavha').val(),
               titleAJX: $('.input_title').val(),
            },
            url: 'http://localhost/bekent/school/ajax/ajax.php',
            type: 'GET',
            success: function (data) {
               inputbox.forEach(element => {
                  $(element).val('');
               });
               let data1 = JSON.parse(data);
               if (data1.status == 200) {
                  $('.NToastJS').removeClass('hideAni');
                  $('.NToastJS').addClass('showAni');
                  $('.successToast').addClass('active');
                  $('#successMsg').html(data1.message);
               }
               else if (data1.status == 500) {
                  $('.NToastJS').removeClass('hideAni');
                  $('.NToastJS').addClass('showAni');
                  $('.errorToast').addClass('active');
                  $('#errorMsg').html(data1.message);
               }
               else if (data1.status == 400) {
                  $('.NToastJS').removeClass('hideAni');
                  $('.NToastJS').addClass('showAni');
                  $('.errorToast').addClass('active');
                  $('#errorMsg').html(data1.message);
               }

            },
            beforeSend: function () {
               $('.aloqaLOAD').addClass('active');
               setTimeout(() => {
                  $('.aloqaLOAD').removeClass('active');
               }, 2000);
            },
         });

      }
      jQuery.check(e);

      setTimeout(() => {
         $('.NToastJS').removeClass('showAni');
         $('.NToastJS').addClass('hideAni');
         $('.successToast').removeClass('active');
         $('.errorToast').removeClass('active');
      }, 5000);
   });
})