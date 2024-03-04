$(document).ready(function () {
     fetchData()
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
     // diyaloq oyna ochish
     $('#opener').on('click', () => {
          jQuery.madalOpen('.dialog_c_m');
          $('#editInput1').val('');
          $('#editBtnAddSubject').css('display', 'none');
          $('#yearAdd').css('display', 'block');
     });
     // malumotlarni server php ga yuborish
     let name = '';
     $('#yearNmae').on('input', () => {
          name = $('#yearNmae').val();
     });
     // malumotlarni qoshish
     $('#yearAdd').on('click', (e) => {
          e.preventDefault();
          $.ajax({
               data: {
                    name: name
               },
               url: "http://localhost/bekent/school/ajax/server.php?action=insertYearName",
               type: "GET",
               success: function (data) {
                    let data2 = JSON.parse(data);
                    if (data2.status == 200) {
                         fetchData()
                         madalkaJs(data2.message);
                    }
                    else if (data2.status == 400) {
                         madalkaJs(data2.message);
                    }
                    else if (data2.status == 500) {
                         madalkaJs(data2.message);
                    }
               }
          });
     });

     // oqib olish uchun
     // fetchData
     function fetchData() {
          $.ajax({
               url: "http://localhost/bekent/school/ajax/server.php?action=fetchDataYear",
               type: "GET",
               dataType: "json",
               success: function (response) {
                    let data = response.data;
                    $('.body_year_show').empty();
                    $.each(data, function (index, value) {
                         $('.body_year_show').append(`
                         <div class="year_items">
                              <p>${value.name}</p>
                              <div class="controlBox">
                                   <button id='openeredit1'  value="${value.id}"><i class="fa-solid fa-pencil" style="color: #00e1ff;"></i></button>
                                   <button id='openerdelet1' value="${value.id}"><i class="fa-solid fa-trash" style="color: #ff0000;"></i></button>
                              </div>
                         </div>               
                        `)
                    });

               }
          })
     };

     //delete
     $('.body_year_show').on('click', "#openerdelet1", (e) => {
          if (alert("Ma'lumotni o'chirishni xoxlaysizmi🫣?") == undefined) {
               id = e.currentTarget.attributes.value.value;
               $.ajax({
                    url: "http://localhost/bekent/school/ajax/server.php?action=YearDdelete",
                    type: "Get",
                    dataType: "json",
                    data: {
                         id: id
                    },
                    success: function (response) {
                         if (response.status == 200) {
                              fetchData();
                              madalkaJs(response.message);
                         }
                         else if (response.status == 500) {
                              madalkaJs(response.message);
                         }
                    }
               })
          }

     });

     // yangilash
     $('.body_year_show').on('click', "#openeredit1", (e) => {
          jQuery.madalOpen('.dialog_c_m');
          $('#editBtnAddSubject').css('display', 'block');
          $('#yearAdd').css('display', 'none');
          id = e.currentTarget.attributes.value.value;
          $.ajax({
               url: "http://localhost/bekent/school/ajax/server.php?action=editdata2",
               type: "Get",
               dataType: "json",
               data: {
                    id: id
               },
               success: function (response) {
                    let data1 = response.data;
                    $('.editInput1').val(data1.name)
               }
          })
     });

     $('#editBtnAddSubject').on('click', (e) => {
          e.preventDefault();
          $.ajax({
               url: "http://localhost/bekent/school/ajax/server.php?action=edityear2",
               type: "GET",
               data: {
                    id: id,
                    name: name
               },
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

})