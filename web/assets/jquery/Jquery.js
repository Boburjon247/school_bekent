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
  $('.lableImg10').change(function (event) {
    let img = URL.createObjectURL(event.target.files[0]);
    $('#imgUrl10').attr('src', img);
    
  });


  if($('.videoNameHidden').val() != undefined){
      $('.addVideoBody').css('display', 'none'); 
  }else{
    $('.addVideoBody').css('display', 'flex'); 
  }
});