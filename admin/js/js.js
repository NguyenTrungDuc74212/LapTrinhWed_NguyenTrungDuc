  $(document).ready(function() {
    $('.danhsach li').slideDown();
    $('.truyen').click(function() {
      $('.danhsach li').slideToggle();
       $('.truyen').toggleClass('add');
    });
  });

  // $(document).ready(function() {
  //   $('.item-chuyenmuc').click(function() {
  //        $('.chuyenmuc').addClass('chuyenmuc-add');
  //   });
  // });