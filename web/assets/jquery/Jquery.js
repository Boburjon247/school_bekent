$(function () {
  $("#tabs").tabs();
});
$(function () {
  $("#tabsx").tabs();
});
$(function () {
  $("#tabsxm").tabs();
});
$(function () {
  $("#tabsxm1").tabs();
});
$(function () {
  $("#tabsxm2").tabs();
});
$(function () {
  $("#tabsxml").tabs();
});
$(function () {
  $("#tabsxs").tabs();
});
$(function () {
  $("#tabsxl").tabs();
});
$(function () {
  $("#tabsxl1").tabs();
});
$(function () {
  $("#tabsq").tabs();
});
$(function () {
  $("#tabsx120").tabs();
});
// body ga img qoshish
$(function () {
  $('.lableImg').change(function (event) {
    let img = URL.createObjectURL(event.target.files[0]);
    $('#imgUrl').attr('src', img);
  })
});

// faxrili oquvchilar qoshishi
$(function () {
  $('.lableImg1').change(function (event) {
    let img = URL.createObjectURL(event.target.files[0]);
    $('#imgUrl1').attr('src', img);
    
  })
});
// video qoshish
$(function () {
  $('.lableImg2').change(function (event) {
    let video = URL.createObjectURL(event.target.files[0]);
    $('#imgvideo').attr('src', video);
  })
});
// faxrili oquvchilar qoshishi
$(function () {
  $('.lableImg3').change(function (event) {
    let img = URL.createObjectURL(event.target.files[0]);
    $('#imgUrl3').attr('src', img);
    
  })
});
$(function () {
  $('.lableImg4').change(function (event) {
    let img = URL.createObjectURL(event.target.files[0]);
    $('#imgUrl4').attr('src', img);
    
  })
});

$(function () {
  $('.lableImg5').change(function (event) {
    let img = URL.createObjectURL(event.target.files[0]);
    $('#imgUrl5').attr('src', img);
    
  })
});

$(function () {
  $('.lableImg6').change(function (event) {
    let img = URL.createObjectURL(event.target.files[0]);
    $('#imgUrl6').attr('src', img);
    
  })
});
$(function () {
  $('.lableImg7').change(function (event) {
    let img = URL.createObjectURL(event.target.files[0]);
    $('#imgUrl7').attr('src', img);
    
  })
});
$(function () {
  $('.lableImg8').change(function (event) {
    let img = URL.createObjectURL(event.target.files[0]);
    $('#imgUrl8').attr('src', img);
    
  })
});

$(function () {
  $('.lableImg9').change(function (event) {
    let img = URL.createObjectURL(event.target.files[0]);
    $('#imgUrl9').attr('src', img);
    
  })
});
$(function () {
  $('.lableImg20').change(function (event) {
    let img = URL.createObjectURL(event.target.files[0]);
    $('#imgUrl20').attr('src', img);
    
  })
});
$(function () {
  $('.lableImg300').change(function (event) {
    let img = URL.createObjectURL(event.target.files[0]);
    $('#imgUrl300').attr('src', img);
    
  })
});
$(function () {
  $('.lableImg10').change(function (event) {
    let img = URL.createObjectURL(event.target.files[0]);
    $('#imgUrl10').attr('src', img);
    
  });
});



const imgSCR_video_img = document.querySelector('.imgSCR_video_img');
const video_save = document.querySelector('.video_save');
if(imgSCR_video_img == null) {
  video_save.setAttribute('name','video_save');
}else{
  video_save.setAttribute('name','a');
}
