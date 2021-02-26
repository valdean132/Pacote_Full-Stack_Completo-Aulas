$(function(){

	/*
	$('.box1').fadeOut(2000, function(){
		$('.box2').fadeIn(2000, function(){
			console.log('Terminamos nossa animação');
		})
	});
	*/

	$('.box1').click(()=>{
		$('.box2').slideToggle(4000);
	})

});