$('#sidebar').affix({
      offset: {
        top: 0
      }
});

var $body   = $(document.body);
var navHeight = $('.navbar').outerHeight(true) + 20;

$body.scrollspy({
	target: '#leftCol',
	offset: navHeight
});