document.addEventListener('DOMContentLoaded', () => {

     const section1 = document.querySelector('.section1'),
          section2 = document.querySelector('.section2'),
          section3 = document.querySelector('.section3');
     //addOquvchi btn bosilganda section2 oynasini ochish uchun
     $('.addOquvchi').on('click', () => {
          section1.classList.remove('active');
          section2.classList.add('active');
     });
     // exitoquvchi btn bosilganda section 1 ni ochadi
     $('.exitoquvchi').on('click', () => {
          section2.classList.remove('active');
          section1.classList.add('active');
     });
     // img ni yachekaga joylash;
     let $img = '';
     $(function () {
          $('.lableImg').change(function (event) {
               let img = URL.createObjectURL(event.target.files[0]);
               $('#imgUrl').attr('src', img);
               $img = event.target.files[0].name;
               $size = event.target.files[0].size;
               $png = 'png';
               $jpg = 'jpg';
               $arraytype = $img.split('.');
               $typeArray = $arraytype.length - 1;
               $fileFarmat = $arraytype[$typeArray];
               if ($fileFarmat !== $jpg && $fileFarmat !== $png) {
                    $('#notFile').css('display', 'flex');
                    $('.saveoquvchilar').attr('name', ' ');
               }
               else if ($size > 4608000) {
                    $('#kattaFile').css('display', 'flex');
                    $('.saveoquvchilar').attr('name', ' ');
               }
               else if ($fileFarmat !== $jpg && $fileFarmat !== $png && $size > 4608000) {
                    $('#notFile').css('display', 'flex');
                    $('#kattaFile').css('display', 'flex');
                    $('.saveoquvchilar').attr('name', ' ');
               }
               else {
                    $('#notFile').css('display', 'none');
                    $('#kattaFile').css('display', 'none');
                    $('.saveoquvchilar').attr('name', 'saveoquvchilar');
               }
          })
     });

     //saveoquvchilar bosilganda inputlarni tekshiradi 
     global: t = '';
     const inputUserName = document.querySelectorAll('.input-UserName');
     function check() {
          inputUserName.forEach((element, index) => {
               if (($(element).val() == '' || $(element).val() == ' ')) {
                    $(element).css('border', '1px solid red');
               } else {
                    $(element).css('border', '1px solid lime');
                    t = 'true';
               }
          });
     }
     inputUserName.forEach(element => {
          element.addEventListener('input', () => {
               if (element.value != '') {
                    element.style.border = '1px solid lime';
               }
          });
     });

     //select
     $('.saveoquvchilar').on('click', () => {
          check();
          if (t == 'true') {
               localStorage.setItem('madaka', 'active');
          }
     });
     //update
     $('.editOquvchi').on('click', (e) => {
          section1.classList.remove('active');
          section3.classList.add('active');
          localStorage.setItem('section3', 'active');
     });
     if (localStorage.getItem('section3') == 'active') {
          section1.classList.remove('active');
          section3.classList.add('active');
          localStorage.setItem('section3', 'noactive');
     }
     $('.updateBtn').on('click', () => {
          section1.classList.add('active');
          localStorage.setItem('section3', 'noactive');
          localStorage.setItem('madaka', 'active');
     });


     const userNmaedelete = document.querySelectorAll('.btnmadalShow');
     const userNameHodim = document.querySelectorAll('.hodimUserName');
     const madal_text = document.querySelector('.madal_text');
     const idHodimCl = document.querySelectorAll('.idHodimCl');
     const idHodim = document.querySelector('.idHodim');
     let plus = "nomli o'quvchini o'chirmoqchimisiz?"

     userNmaedelete.forEach((element, index) => {
          element.addEventListener('click', () => {
               userNameHodim.forEach((e, i) => {
                    if (index == i) {
                         madal_text.textContent = e.textContent + " " + plus;
                    }
               });
               idHodimCl.forEach((xe, i) => {
                    if (index == i) {
                         idHodim.value = xe.value;
                    }
               });
          });
     });

     $('.deleteHodim').on('click',()=>{
          localStorage.setItem('madaka', 'active');
       });

})

