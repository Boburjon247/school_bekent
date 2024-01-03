document.addEventListener('DOMContentLoaded', () => {
   'use strict';

   const left_chataLI = document.querySelectorAll('.left_chata ul li a')
   const madal_show_chat = document.querySelector('.madal_show_chat')
   const window_onlin = document.querySelector('.window_onlin');
   const mess_exit = document.querySelector('.mess_exit');
   const messageInput = document.querySelector('#messageInput');
   left_chataLI.forEach((element, index) => {
      element.addEventListener('click', () => {
         if (madal_show_chat.classList.contains('active')) {
            element.classList.remove('active');
            // madal_show_chat oynani yopish
            madal_show_chat.classList.remove('active');
            // window_onlin ochish
            window_onlin.classList.add('active');
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
   }
   mess_exit.addEventListener('click', () => {
      if (window_onlin.classList.contains('active')) {
         madal_show_chat.classList.add('active');
         window_onlin.classList.remove('active');
         messageInput.value = '';
         localStorage.clear();
      }
   });

})