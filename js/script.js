
$(function() {
   $('.popupModal').click(function(e) {
     e.preventDefault();
     $('#modal').modal('show').find('.modal-body')
     .load($(this).attr('href'));
   });
   //end pop up
   $('#popupModal').click(function(e) {
       console.log('script popup');
     e.preventDefault();
     $('#modal2').modal('show').find('.modal-body')
     .load($(this).attr('href'));
   });
   //end pop up
});
//end function