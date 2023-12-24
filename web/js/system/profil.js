document.addEventListener('DOMContentLoaded', function () {
   'use strict';
   // img add yashiqchaga imgni qo'shyapti
   $(function () {
      $('.lableImg').change(function (event) {
         let img = URL.createObjectURL(event.target.files[0]);
         $('#imgUrl').attr('src', img);
      })
   });

   //eye
   $(function () {
      $('.userEye').on('click', () => {
         if ($('.userEye').hasClass('fa-eye-slash')) {
            //iconka ozgaryapti
            $('.userEye').removeClass('fa-eye-slash');
            $('.userEye').addClass('fa-eye');
            //inputni type o'zgaryapti
            $('.input-UserName').attr('type', 'text');

         }
         else if ($('.userEye').hasClass('fa-eye')) {
            //icon o'zgaryapti
            $('.userEye').addClass('fa-eye-slash');
            $('.userEye').removeClass('fa-eye');
            //inputni type o'zgaryapti
            $('.input-UserName').attr('type', 'password');

         }
      });
   })

   //yangi parol qoyish uchun chekboxni activlashtrish
   const yamgi_parol = document.querySelectorAll('.yamgi_parol');
   const btn_true = document.querySelector('#btn_true');
   yamgi_parol.forEach(element => {
      element.style.backgroundColor = '#eee'
      btn_true.addEventListener('click', () => {
         if (btn_true.checked == true) {
            element.removeAttribute('readonly')
            element.style.backgroundColor = '#FFFFFF'
         }
         else if(btn_true.checked == false){
            element.setAttribute('readonly', '')
            element.style.backgroundColor = '#eee'
         }
      })
   })


});