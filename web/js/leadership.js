document.addEventListener('DOMContentLoaded', function () {
   'use strict';

   // btn bosilganda massiv elementlarini oqib console ga prin qil
   const dialogModalBtn = document.querySelectorAll('#dialogModalBtn'),
      dialogModal = document.querySelector('.modalDialog-container');
      
   dialogModalBtn.forEach((element, i) => {
      element.addEventListener('click', () => {
         dialogModal.innerHTML = ' ';
         dialogModal.insertAdjacentHTML('afterbegin',
            `
            <div class="title">
               <span>${element.parentNode.childNodes[1].textContent}</span>
            </div>
            <div class="textWrapper">
               <p>${element.parentNode.childNodes[15].textContent}</p>
            </div>
         `
         )
      });
   });


   const madalDialogBth = document.querySelectorAll('#dialogModalBtn'),
      madalWindow = document.querySelector('.modalDialog')

   // addclass or removeclass
   function toggleClass_F(item) {
      item.classList.toggle('active');
   }
   // on click btn show
   function onClickBtnMadals_F(item) {
      item.forEach(element => {
         element.addEventListener('click', () => {
            toggleClass_F(madalWindow)
         })
      })
   }
   onClickBtnMadals_F(madalDialogBth);

   madalWindow.addEventListener('click', (e) => {
      if (e.target == madalWindow)
         toggleClass_F(madalWindow);
   })
   document.addEventListener('keydown', (e) => {
      if (e.code === 'Escape')
         toggleClass_F(madalWindow);
   })

});