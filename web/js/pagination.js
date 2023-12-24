document.addEventListener("DOMContentLoaded", function(){
   // pagenation
   function getPage(totalPage,page,maxlength){
      function range(start, end) {
         return Array.from(Array(end-start+1), (_, i) => i+start);
      }
      let sideWidth = maxlength < 9 ? 1 : 2;
      let leftWidth = (maxlength - sideWidth * 2 - 3) >> 1; 
      let rightWidth = (maxlength - sideWidth * 2 - 3) >> 1; 

      if(totalPage <= maxlength){
         return range(1,totalPage)
      }
      if(page <= maxlength - sideWidth - 1 - rightWidth){
         return range(1,maxlength - sideWidth - 1).concat(0,range(totalPage - sideWidth+1, totalPage));

      }

      if(page >= totalPage - sideWidth - 1 - rightWidth){
         return range(1,sideWidth).concat(0,range(totalPage - sideWidth - 1 -rightWidth - leftWidth, totalPage));
      }
      return range(1, sideWidth).concat(0,range(page - leftWidth, page - rightWidth), 0, range(totalPage - sideWidth + 1, totalPage))
   }

   $(function(){
      var numberOfItems = $(".card-content .card").length
      var limitPerPage = 6;
      var totalPages = Math.ceil(numberOfItems /  limitPerPage);
      var paginationSize = 5;
      var currentPage;



      function showPage(withPage){
         if(withPage < 1 || withPage > totalPages) return false;

         currentPage = withPage;

         $(".card-content .card").hide().slice((currentPage - 1)*limitPerPage, currentPage * limitPerPage).show();

         $(".pagination li").slice(1,-1).remove();

         getPage(totalPages,currentPage, paginationSize).forEach(item => {
            $('<li>').addClass('page-item').addClass(item ? "current-page" : "dots").toggleClass("active", item === currentPage).append($('<a>').attr({href:"javascript:void(0)"}).text(item || "...")).insertBefore(".next-page"); 
         });
         $(".previous-page").toggleClass("disable", currentPage === 1); 
         $(".next-page").toggleClass("disable", currentPage === totalPages); 
         return true;
         
      }
      $(".pagination").append(
         $('<li>').addClass('page-item').addClass('previous-page').append($('<a>').attr({href:'javascript:void(0)'}).text('<')),
         $('<li>').addClass('page-item').addClass('next-page').append($('<a>').attr({href:'javascript:void(0)'}).text('>')),
      );

      $('.card-content').show();
      showPage(1);
   
      $(document).on("click", ".pagination li.current-page:not(.ative)", function(){
         return showPage(+$(this).text());
      });

      $(".next-page").on("click", function(){
         return showPage(currentPage + 1);
      });
      $(".previous-page").on("click", function(){
         return showPage(currentPage - 1);
      });
   });


});   