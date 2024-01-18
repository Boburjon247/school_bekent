document.addEventListener('DOMContentLoaded', () => {
   const section1 = document.querySelector('.section1'),
      section2 = document.querySelector('.section2'),
      section3 = document.querySelector('.section3');

   //addhodim btn bosilganda 2 oyna ochilishi uchun
   $('.addHodim').on('click', () => {
      section1.classList.remove('active');
      section2.classList.add('active');
      localStorage.setItem('section2', 'active');
   })
   //exitHodim btn bosilganda 1 oynaga qaytishi uchun.
   $('.exitHodim').on('click', () => {
      section2.classList.remove('active');
      section3.classList.remove('active');
      section1.classList.add('active');
      localStorage.setItem('section3', 'noactive');
      localStorage.setItem('section2', 'noactive');
   });
   if(localStorage.getItem('section2') == 'active'){
      section1.classList.remove('active');
      section2.classList.add('active');
   }
   $('.editHodim').on('click',(e)=>{
      section1.classList.remove ('active');
      section3.classList.add ('active');
      localStorage.setItem('section3', 'active');
   });
   if(localStorage.getItem('section3') == 'active'){
      section1.classList.remove ('active');
      section3.classList.add ('active');
      localStorage.setItem('section3','noactive');
   }
   $('.updateBtn').on('click',()=>{
      section1.classList.add('active');
      localStorage.setItem('section3', 'noactive');
      localStorage.setItem('madaka', 'active');
   });
   global:t = '';
   const inputUserName = document.querySelectorAll('.input-UserName');
   function check() {
      inputUserName.forEach((element, index) => {
         if (($(element).val() == '' || $(element).val() == ' ')) {
            $(element).css('border', '1px solid red');
            t = 'false';
         } else {
            $(element).css('border', '1px solid lime');
            t = 'true';
            localStorage.setItem('section2', 'active');
         }  
      });
   }
   


   //input true false
   inputUserName.forEach(element => {
      element.addEventListener('input', () => {
         if (element.value != '') {
            element.style.border = '1px solid lime';
         }
      });
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
      $('.userEyeH').on('click', () => {
         if ($('.userEyeH').hasClass('fa-eye-slash')) {
            //iconka ozgaryapti
            $('.userEyeH').removeClass('fa-eye-slash');
            $('.userEyeH').addClass('fa-eye');
            //inputni type o'zgaryapti
            $('.input-UserNameH').attr('type', 'text');

         }
         else if ($('.userEyeH').hasClass('fa-eye')) {
            //icon o'zgaryapti
            $('.userEyeH').addClass('fa-eye-slash');
            $('.userEyeH').removeClass('fa-eye');
            //inputni type o'zgaryapti
            $('.input-UserNameH').attr('type', 'password');
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
            if (index == i) {
               let re = new RegExp(itemInput.value, 'i');
               if (re.test(element.textContent)) {
                  element.innerHTML = element.textContent.replace(re, '<b>$&</b>');
                  e.style.display = 'flex';
               }
               else {
                  e.style.display = 'none';
               }
            }
         })
      })
   }


   search.addEventListener('input', () => { filter_list(search, list, list_pre) })


   $('.saveUserName').on('click', (e) => {
      // chertilganda malumotlarni tekshirish funksiyasi
      check();
      if(t=='true') {
         localStorage.setItem('madaka', 'active');
      }
   });
   //delet hodim

   const userNmaedelete = document.querySelectorAll('.btnmadalShow');
   const userNameHodim = document.querySelectorAll('.hodimUserName');
   const madal_text = document.querySelector('.madal_text');
   const idHodimCl = document.querySelectorAll('.idHodimCl');
   const idHodim = document.querySelector('.idHodim');
   let plus = "nomli hodimni o'chirmoqchimisiz"
   
   
   userNmaedelete.forEach((element,index)=>{
      element.addEventListener('click',()=>{
         userNameHodim.forEach((e,i)=>{
            if(index == i){
               madal_text.textContent = e.textContent + " " + plus;
            }
         });
         idHodimCl.forEach((xe,i)=>{
            if(index == i){
               idHodim.value = xe.value;
            }
         });
      });
   });

   $('.deleteHodim').on('click',()=>{
      localStorage.setItem('madaka', 'active');
   });


   



});