   // search qidirish oynasi
   const search = document.querySelector('#search_f');
   const list = document.querySelector('.body_year_show').querySelectorAll('.year_items p')
   const list_pre = document.querySelectorAll('.year_items')

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
   search.addEventListener('input', () => { 
      filter_list(search, list, list_pre) 
   })