tinymce.init({ selector:'.editor' });
$(".menu__movil").on("click", function(){
	console.log($(this).next());
	$(this).next().slideToggle();
});
$('.slider').slider({full_width: true});
$('.materialboxed').materialbox();

$('.enviar').on('click', function(e){
	e.preventDefault();
	var data = $(this).parent().serialize();
	console.log(data);

	$.ajax({
		url:"http://localhost/MetaHerrera/public/admin/about",
		type:"POST",
		data:data
	})
	.done(function(){
		console.log("Actualizo");
	});
});