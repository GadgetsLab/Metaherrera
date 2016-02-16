tinymce.init({ selector:'.editor' });
$(".menu__movil").on("click", function(){
	console.log($(this).next());
	$(this).next().slideToggle();
});
$('.slider').slider({full_width: true});
$('.materialboxed').materialbox();