document.addEventListener('DOMContentLoaded', function () {
   // select 2
   $(".js-example-tags").select2();

   // search qidirish oynasi
   const search = document.querySelector('#search');
   const list = document.querySelector('.body_year_show').querySelectorAll('.year_items .sinf_name')
   const list_pre = document.querySelector('.body_year_show').querySelectorAll('.year_items')

   const search1 = document.querySelector('#search1');
   const list1 = document.querySelector('.oquvchibriktrish ul').querySelectorAll('li p')
   const list_pre1 = document.querySelector('.oquvchibriktrish ul').querySelectorAll('li')



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
   search1.addEventListener('input', () => { filter_list(search1, list1, list_pre1) })

   const delete_madal = document.querySelector('.delete_madal');

   const deletButtOk = document.querySelector('.deletButtOk');
   function deletItemOk(params) {
      deletButtOk.addEventListener('click',()=>{
         delete_madal.classList.remove('active');
         body(0)
         return true;
      })
   }

   function body(item) {
      if(item == 1){
         $('body').css('overflow', 'hidden');
      }
      else if(item == 0){
         $('body').css('overflow', 'auto');
      }
   }

   list_pre1.forEach((element, index) => {
      element.addEventListener('dblclick', () => {
         if (element.classList.contains('green')) {
            element.classList.remove('green');
         }
         else {
            element.classList.add('green');
         }
         if (element.classList.contains('orang')) {
            delete_madal.classList.add('active')
            element.classList.remove('orang');
            element.classList.remove('green');
            deletItemOk();
            body(1);
         }
      })
   });

   const close_delete_madal1 = document.querySelectorAll('.close_delete_madal')
   function close_delete_madal(item){
      item.classList.remove('active');
   }
   close_delete_madal1.forEach(element=>{
      element.addEventListener('click',()=>{
         close_delete_madal(delete_madal);
         body(0)
      });
   })





});