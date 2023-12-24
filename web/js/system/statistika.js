document.addEventListener('DOMContentLoaded', () => {
   'use strict';
   // select 2
   $(".js-example-tags").select2();
   const userGreet = document.querySelectorAll('.userGreet');

   userGreet.forEach((element)=>{
      if(element.value == ''){
         element.style.backgroundColor = '#a51010'
         element.parentNode.style.backgroundColor = '#a51010'
      }
      else{
         element.style.backgroundColor = 'green'
         element.parentNode.style.backgroundColor = 'green'
      }
      element.addEventListener('dblclick',()=>{
         if(element.value  != ''){
            element.removeAttribute('readonly')
         }
      })
   });


      // search qidirish oynasi
      const search = document.querySelector('#search');
      const list = document.querySelector('.table-wrapper table').querySelectorAll('th .sNmae')
      const list_pre = document.querySelector('.table-wrapper table').querySelectorAll('.item')
      
      function filter_list(itemInput, itemList, itemListPre) {
         itemList.forEach((element, index) => {
            itemListPre.forEach((e, i) => {
               if(index == i){
                  let re = new RegExp(itemInput.value, 'i');
                  if (re.test(element.textContent)) {
                     element.innerHTML = element.textContent.replace(re,'<b>$&</b>');
                     e.style.display = 'table-row';
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