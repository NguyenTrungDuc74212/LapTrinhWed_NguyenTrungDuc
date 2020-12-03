/*slide down chuyên mục*/
  $(document).ready(function() {
    $('.danhsach li').slideDown();
    $('.truyen').click(function() {
      $('.danhsach li').slideToggle();
       $('.truyen').toggleClass('add');
    });
  });
/*end chuyenmuc*/

  /*hiệu ứng side bar*/
  $(document).ready(function() {
    $('.nut').click(function() {
      $('.side-bar').animate({'min-width':'toggle'});
      $('.side-bar').next().next().toggleClass('hieuung');
    });
  });

  /*nhúng ckeditor*/
  CKEDITOR.replace( 'noidungtruyen', {
    filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
    filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
} );
