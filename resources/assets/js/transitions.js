// header-text fade-up on page load
$('fade-up').delay(1300).animate({'marginTop':'+=-80px','opacity':'1'},800);

// Social icon hover circle outline
$('a').each(function(){
  $(this).html('<span class="icon">'+ $(this).html() +'</span><span class="circle"><span><em></em></span><span><em></em></span></span>');
});

// lightGallery
$("#lightgallery").lightGallery();

