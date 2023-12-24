document.addEventListener('DOMContentLoaded', () => {
   const section1 = document.querySelector('.section1'),
      section2 = document.querySelector('.section2');

   $('.addHodim').on('click', () => {
      section1.classList.remove('active');
      section2.classList.add('active');
   })
   $('.exitHodim').on('click', () => {
      section2.classList.remove('active');
      section1.classList.add('active');
   });

   const saveUserName = document.querySelector('.saveUserName'),
      inputUserName = document.querySelectorAll('.input-UserName');
   saveUserName.addEventListener('click', () => {
      inputUserName.forEach((element, index) => {
         if (element.value == '') {
            element.style.border = '1px solid red'
         }
         else {
            section2.classList.remove('active');
            section1.classList.add('active');
         }
      })
   });

   // img add yashiqchaga imgni qo'shyapti
   $(function () {
      $('.lableImg').change(function (event) {
         let img = URL.createObjectURL(event.target.files[0]);
         $('#imgUrl').attr('src', img);
      })
   });

   // eye
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


   // search qidirish oynasi
   const search = document.querySelector('#search');
   const list = document.querySelector('.hodim_item ul').querySelectorAll('li .userName1')
   const list_pre = document.querySelector('.hodim_item ul').querySelectorAll('li')

   function filter_list(itemInput, itemList, itemListPre) {
      itemList.forEach((element, index) => {
         itemListPre.forEach((e, i) => {
            if(index == i){
               let re = new RegExp(itemInput.value, 'i');
               if (re.test(element.textContent)) {
                  element.innerHTML = element.textContent.replace(re,'<b>$&</b>');
                  e.style.display = 'flex';
               }
               else {
                  e.style.display = 'none';
               }
            }
         })
      })
   }
   search.addEventListener('input', ()=>{filter_list(search, list, list_pre)})



});