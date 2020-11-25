  $(document).ready(function() {
    $('.danhsach li').slideUp();
    $('.truyen').click(function() {
      $('.danhsach li').slideToggle();
       $('.truyen').toggleClass('add');
    });
  });