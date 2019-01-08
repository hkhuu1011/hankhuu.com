// header-text fade-up on page load
$('fade-up').delay(1300).animate({'marginTop':'+=-80px','opacity':'1'},800);

// Social icon hover circle outline
$('a').each(function(){
  $(this).html('<span class="icon">'+ $(this).html() +'</span><span class="circle"><span><em></em></span><span><em></em></span></span>');
});

// Project Details
$('#project-preview').hover(function() {
	$('#project-info').slideToggle(500);
});
$('#project-preview2').hover(function() {
	$('#project-info2').slideToggle(500);
});

// lightGallery
$('#lightgallery, #lightgallery2, #lightgallery3').lightGallery();
