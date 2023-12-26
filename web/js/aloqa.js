document.addEventListener('DOMContentLoaded', () => {
   // canvas
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
   for (let index = 0; index <=5; index++) {
      canvasitem += jQuery.rand(canvas);
   }
   text = canvasitem;
   ctx.fillText(text, 60, canvasid.height - 50);

   // aloqa murojat input check
   const inputbox = document.querySelectorAll("#inputA");
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
   })(jQuery)
   $('#murojatAdd').on('click', (e) => {
      jQuery.check(e);
   });








})