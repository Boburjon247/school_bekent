document.addEventListener('DOMContentLoaded', function () {
   // teacher check
   const teachCheck0 = document.querySelector('#teachCheck0');
   const teachCheck1 = document.querySelector('#teachCheck1');
   const teachCheck2 = document.querySelector('#teachCheck2');
   const teachCheck3 = document.querySelector('#teachCheck3');

   function chacksInputDisabled(item1, item2) {
      item1.addEventListener('click', () => {
         if (item1.value > 0) {
            item2.removeAttribute('disabled');
            $(item1).css('border', '2px solid #051B57');
         }
      });
   }

   chacksInputDisabled(teachCheck0, teachCheck1);
   chacksInputDisabled(teachCheck1, teachCheck2);
   chacksInputDisabled(teachCheck2, teachCheck3);

   const chorak_1 = document.querySelectorAll('#chorak_1');
   const chorak_2 = document.querySelectorAll('#chorak_2');
   const chorak_3 = document.querySelectorAll('#chorak_3');
   const chorak_4 = document.querySelectorAll('#chorak_4');
   const yillik = document.querySelectorAll('#yillik');
   const imtihon = document.querySelectorAll('#Imtihon');

   (function($){
      $.hide = function(item){
         $(item).css('display', 'none');
      }
      $.show = function(item){
         $(item).css('display', 'table-cell');   
      }
   })(jQuery);

   (function($){
      $.tableHide = function(item){
         $itemValue = $(selectCheck_B).val()
         switch ($itemValue) {
            case "1" :
               jQuery.show($(chorak_1));
               jQuery.hide($(chorak_2));
               jQuery.hide($(chorak_3));
               jQuery.hide($(chorak_4));
               jQuery.hide($(yillik));
               jQuery.hide($(imtihon));
            break;
            case "2" :
               jQuery.hide($(chorak_1));
               jQuery.show($(chorak_2));
               jQuery.hide($(chorak_3));
               jQuery.hide($(chorak_4));
               jQuery.hide($(yillik));
               jQuery.hide($(imtihon));
            break;
            case "3" :
               jQuery.hide($(chorak_1));
               jQuery.hide($(chorak_2));
               jQuery.show($(chorak_3));
               jQuery.hide($(chorak_4));
               jQuery.hide($(yillik));
               jQuery.hide($(imtihon));
            break;
            case "4" :
               jQuery.hide($(chorak_1));
               jQuery.hide($(chorak_2));
               jQuery.hide($(chorak_3));
               jQuery.show($(chorak_4));
               jQuery.hide($(yillik));
               jQuery.hide($(imtihon));
            break;
            case "5" :
               jQuery.hide($(chorak_1));
               jQuery.hide($(chorak_2));
               jQuery.hide($(chorak_3));
               jQuery.hide($(chorak_4));
               jQuery.show($(yillik));
               jQuery.hide($(imtihon));
            break;
            case "6" :
               jQuery.hide($(chorak_1));
               jQuery.hide($(chorak_2));
               jQuery.hide($(chorak_3));
               jQuery.hide($(chorak_4));
               jQuery.hide($(yillik));
               jQuery.show($(imtihon));
            break;
            case "7" :
               jQuery.show($(chorak_1));
               jQuery.show($(chorak_2));
               jQuery.show($(chorak_3));
               jQuery.show($(chorak_4));
               jQuery.show($(yillik));
               jQuery.show($(imtihon));
            break;
         }   
      } 
   })(jQuery);
   const selectCheck_A = document.querySelectorAll('.selectCheck_A')
   const selectCheck_B = document.querySelector('.selectCheck_b')
   
   $('.malumot_btn').on('click', () => {
      jQuery.tableHide();
      selectCheck_A.forEach((element,index)=>{
         if(element.value == 0){
            element.style.border = '2px solid red';
         }
         if(element.value > 0 && selectCheck_B.value == 0){
            $('.one_window').removeClass('active1');
            $('.natija_title table').addClass('active');
         }
         else if(element.value > 0 && selectCheck_B.value > 0){
            $('.one_window').removeClass('active1');
            $('.natija_title table').addClass('active');
         }
      });      
   });


   


});