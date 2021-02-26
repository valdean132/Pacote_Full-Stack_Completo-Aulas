$(function(){

	/*
	var time;
	var timeOut = function(){
		$('.box2').animate({
			'width': '50%',
			'height': '500px',
			'marginLeft': '100px',
			'paddingTop':'200px'
		}, 2000);
	};

	$('body').click(()=>{
		alert('Animação com timeOut foi cancelada');
		clearTimeout(time);
	});

	$('.box1').animate({
		'width': '50%',
		'height': '500px',
		'marginLeft': '100px',
		'paddingTop':'200px'
	}, 2000, ()=>{
		time = setTimeout(timeOut, 3000);
	});
	*/

	var time;

	$('body').click(()=>{
		console.log('Intervalo cancelado')
		clearInterval(time);
	});

	time = setInterval(() => {
		alert('Olá mundo!');
	}, 3000);

});