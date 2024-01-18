document.addEventListener('DOMContentLoaded', function () {
   'use strict';
   // img add yashiqchaga imgni qo'shyapti
   let $img = '';
   let $size = '';
   $(function () {
      $('.lableImg').change(function (event) {
         let img = URL.createObjectURL(event.target.files[0]);
         $('#imgUrl').attr('src', img);
         $img = event.target.files[0].name
         $size = event.target.files[0].size

         let $png = 'png';
         let $jpg = 'jpg';
         let $arraytype = $img.split('.');
         let $typeArray = $arraytype.length - 1;
         let $fileFarmat = $arraytype[$typeArray];
         if ($fileFarmat !== 'jpg' && $fileFarmat !== 'png') {
            $('#notFile1').css('display', 'flex');
            $('.malumotSaqlashprofil').addClass('tr');
         }
         else if ($size > 4608000) {
            $('#kattaFile1').css('display', 'flex');
            $('.malumotSaqlashprofil').addClass('tr');

         }
         else if ($fileFarmat !== $jpg && $fileFarmat !== $png && $size > 4608000) {
            $('#notFile1').css('display', 'flex');
            $('#kattaFile1').css('display', 'flex');
            $('.malumotSaqlashprofil').addClass('tr');
         }
         else {
            $('#notFile1').css('display', 'none');
            $('#kattaFile1').css('display', 'none');
         }
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
            $('.input-UserNameEys').attr('type', 'text');

         }
         else if ($('.userEye').hasClass('fa-eye')) {
            //icon o'zgaryapti
            $('.userEye').addClass('fa-eye-slash');
            $('.userEye').removeClass('fa-eye');
            //inputni type o'zgaryapti
            $('.input-UserNameEys').attr('type', 'password');

         }
      });
   });


   $('.malumotSaqlashprofil').on('click',()=>{
      if($('.malumotSaqlashprofil').hasClass('tr')){
         alert('faylda xatolik');
      }
      else{
         localStorage.setItem('madaka', 'active');
      }
   });



});