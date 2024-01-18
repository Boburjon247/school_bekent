// $(function () {
//      $('.registration-btn').on('click', (e) => {
//           e.preventDefault();
//           let text = '';
//           $.ajax({
//                data:{
//                     login: $('#loginInput').val(),
//                     password: $('#passwordInput').val(),
//                },
//                url: 'http://localhost/bekent/school/ajax/isAuth.php',
//                type: 'GET',
//                success: function (data) {
//                     let data1 = JSON.parse(data);
//                     if(data1.status == 200){
//                          window.location = 'http://localhost/bekent/school/system/';
//                     }
//                     else if(data1.status == 201){
//                          window.location = 'http://localhost/bekent/school/Admin/';
//                     }
//                     else if(data1.status == 202){
//                          window.location = 'http://localhost/bekent/school/teacher/';
//                     }
//                     else if(data1.status == 400){
//                          text = "Login yoki parolda xatolik 😣";
                         
//                     }
//                     $('.loginxatolik').html(text);
//                },
//                beforeSend: function () {
//                     $('.aloqaLOAD').addClass('active');
//                     setTimeout(() => {
//                          $('.aloqaLOAD').removeClass('active');
//                     }, 2000);
//                },
//           });
//      });
// })