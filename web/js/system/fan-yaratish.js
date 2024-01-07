$(document).ready(function() {
   let id = '';
   fetchData();
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


   // madalka
   function madalkaJs(text) {
      $('.NToastJSAJAX').addClass('showAni');
      $('.NToastJSAJAX').removeClass('hideAni');
      $('#successMsg').text(text);
      setTimeout(() => {
         $('.NToastJSAJAX').addClass('hideAni');
         $('.NToastJSAJAX').removeClass('showAni');
         $('#successMsg').text('');
      }, 7000);
   }

   // fetchData
   function fetchData() {
      $.ajax({
         url: "http://localhost/bekent/school/ajax/server.php?action=fetchData",
         type: "GET",
         dataType: "json",
         success: function (response) {
            let data = response.data;
            $('.body_year_show').empty();
            // console.log(data);
            $.each(data, function (index, value) {
               $('.body_year_show').append(`
                  <div class="year_items">
                     <p class="year_items_text">${value.title}</p>
                     <div>
                        <button id="openerEdit" value = "${value.id}" class="delet-edit-icon"><i class="fa-solid fa-pencil" style="color: #005eff;"></i></button>
                        <button id="openerdelet" value = "${value.id}" class="delet-edit-icon"><i class="fa-solid fa-trash" style="color: #ff0000;"></i></button>
                     </div>
                  </div>               
               `)
            });

         }
      })
   };

   $('#opener').on('click', () => {
      jQuery.madalOpen('.dialog_c_m');
      $('#nameAddSubject').val('');
      $('#editBtnAddSubject').css('display', 'none');
      $('#insertBtnAddSubject').css('display', 'block');
   });



   let name = '';
   $('#nameAddSubject').on('input',()=>{
      name = $('#nameAddSubject').val();
   });


   // qoshish
   $('#insertBtnAddSubject').on('click', (e) => {
      e.preventDefault();
      $.ajax({
         data: {
            name: name
         },
         url: "http://localhost/bekent/school/ajax/server.php?action=insertSubject",
         type: "GET",
         success: function (data) {
            let data1 = JSON.parse(data);
            if (data1.status == 200) {
               fetchData();
               madalkaJs(data1.message);
            }
            else if (data1.status == 400) {
               madalkaJs(data1.message);
            }
            else if (data1.status == 500) {
               madalkaJs(data1.message);
            }
         }
      });
   });

   //yangilash uchun yozish
   $('.body_year_show').on('click', "#openerEdit", (e) => {
      jQuery.madalOpen('.dialog_c_m');
      $('#editBtnAddSubject').css('display', 'block');
      $('#insertBtnAddSubject').css('display', 'none');
      id = e.currentTarget.attributes.value.value;
      $.ajax({
         url: "http://localhost/bekent/school/ajax/server.php?action=editdata",
         type: "Get",
         dataType: "json",
         data: {
            id:id
         },
         success:function(response) {
            let data1 = response.data;
            $('.editInput').val(data1.title)
         }
      })
   });
   $('#editBtnAddSubject').on('click', (e) => {
      e.preventDefault();
      $.ajax({
         url: "http://localhost/bekent/school/ajax/server.php?action=editSubject",
         type: "GET",
         data: {
            id:id,
            name: name
         },
         success: function (data) {
            let data1 = JSON.parse(data);
            console.log(data1);
            if (data1.status == 200) {
               fetchData();
               madalkaJs(data1.message);
            }
            else if (data1.status == 400) {
               madalkaJs(data1.message);
            }
            else if (data1.status == 500) {
               madalkaJs(data1.message);
            }
         }
      });
   });

   //delete
   $('.body_year_show').on('click', "#openerdelet", (e) => {
      if(confirm("Ma'lumotni o'chirishni xoxlaysizmi🫣?")){
         id = e.currentTarget.attributes.value.value;
         $.ajax({
            url: "http://localhost/bekent/school/ajax/server.php?action=deletdata",
            type: "Get",
            dataType: "json",
            data: {
               id:id
            },
            success:function(response) {
               if(response.status == 200) {
                  fetchData();
                  madalkaJs(response.message);
               } 
               else if(response.status == 500) {
                  madalkaJs(response.message);
               }              
            }
         })
      }
      
   });
   
});