document.addEventListener('DOMContentLoaded', () => {
   'use strict';
   
   const window_onlin_Ul_Li = document.querySelectorAll('.window_onlin ul li');

   //add class left,right
   function leftRightAdd() {
      window_onlin_Ul_Li.forEach((element, index) => {
         if (index % 2 == 0) {
            element.classList.add('left');
         }
         if (index % 2 == 1) {
            element.classList.add('right');
         }
      })
   }
   //remove class right,left
   function leftRightRemove() {
      window_onlin_Ul_Li.forEach((element, index) => {
         element.classList.remove('left');
         element.classList.remove('right');
      })
   }


   
   
   const left_chataLI = document.querySelectorAll('.left_chata ul li')
   const madal_show_chat = document.querySelector('.madal_show_chat')
   const window_onlin = document.querySelector('.window_onlin');
   const mess_exit = document.querySelector('.mess_exit');
   const messageInput = document.querySelector('#messageInput');
   left_chataLI.forEach((element, index) => {
      element.addEventListener('click', () => {
         if (madal_show_chat.classList.contains('active')) {
            // madal_show_chat oynani yopish
            madal_show_chat.classList.remove('active');
            // window_onlin ochish
            window_onlin.classList.add('active');
            leftRightAdd();
            //inputni activ no activ qilish
            messageInput.removeAttribute('readonly')
            //add localStorage
            localStorage.setItem(`index`, 'active');
         }
      });
   });
   if (localStorage.getItem(`index`)) {
      madal_show_chat.classList.remove('active');
      // window_onlin ochish
      window_onlin.classList.add('active');
      // leftRightRemove()
      leftRightAdd();
   }
   mess_exit.addEventListener('click', () => {
      if (window_onlin.classList.contains('active')) {
         madal_show_chat.classList.add('active');
         window_onlin.classList.remove('active');
         messageInput.value = '';
         messageInput.setAttribute('readonly', '')
         leftRightRemove()
         localStorage.clear();
      }
   })
})