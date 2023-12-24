document.addEventListener('DOMContentLoaded', function () {
   // qatiy rejim
   'use strict';

   // madal
   const modal = document.querySelector('.madal'); // madal window
   const modalText = document.querySelector('.madal p'); // madal text
   //madal function

   function madalWindowOpen(item, text) {
      if (item == 'true') {
         modalText.textContent = '';
         modalText.textContent = text;
         modal.classList.remove("aniExit");
         modal.classList.add("aniOpen");
         setTimeout(() => {
            modal.classList.remove("aniOpen");
            modal.classList.add("aniExit");
         }, 4000);
         return true;
      }
   }
   // select 2
   $(".js-example-tags").select2();

   const jsExampleTagsSelect1 = document.querySelector(".js-example-tags1"); //select 1
   const jsExampleTagsSelect2 = document.querySelector(".js-example-tags2"); //select 2
   const showWindowsClassItem = document.querySelectorAll('.show_windows_class li') //calss item
   const checkbox1 = document.querySelector('#checkbox1'); //input checkbox
   // itemlar bosilganda active class qoshish
   showWindowsClassItem.forEach((element, index) => {
      element.addEventListener('dblclick', () => {
         if (element.classList.contains('active')) {
            element.classList.remove('active');
         }
         else {
            element.classList.add('active');
         }
      })
   });
   // checkbox click bosilganda
   checkbox1.addEventListener('click', () => {
      if (checkbox1.checked == true) {
         showWindowsClassItem.forEach(element => {
            element.classList.add('active');
         })
      }
      else {
         showWindowsClassItem.forEach(element => {
            element.classList.remove('active');
         })
      }
   });


   // check
   function checkItem(item) {
      if (item.value == 0) {
         return 'false';
      }
      else {
         return 'true';
      }
   }
   // btn click function
   function yildan_yilga_btn_kochirisCilck(element) {
      if (checkItem(jsExampleTagsSelect1) == 'true' || checkItem(jsExampleTagsSelect2) == 'true') {
         if (checkbox1.checked == true) {
            showWindowsClassItem.forEach((element, index) => {
               madalWindowOpen('true', `${index + 1} ta sinif yildan yilga ko'chirildi :)`);
               return 'true';
            })
         }
         else {
            madalWindowOpen('true', "Siz o'quv yillari va siniflarni tanlamagansiz !");
            return 'false';

         }
      }
      else if (checkItem(jsExampleTagsSelect1) == 'false' || checkItem(jsExampleTagsSelect2) == 'false') {
         madalWindowOpen('true', "Siz o'quv yillari va siniflarni tanlamagansiz !");
         return 'false';
      }
   }

   // btn click
   $('.yildan_yilga_kochirish').on('click', yildan_yilga_btn_kochirisCilck)

});