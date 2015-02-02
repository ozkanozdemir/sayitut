$(function() {

	$("input[type=checkbox]").switchButton({
	  	width: 80,
	  	height: 20,
	  	button_width: 50,
	  	on_label: 'Var',
  		off_label: 'Yok',
  		labels_placement: "right"
	});

	$('#bul').click(function(){
		var sayi 		= 0;
		var ustLimit 	= 250;
		$('.varmi:checked').each(function(i){
			sayi += parseInt($(this).attr('value'));
		});// each
		if(sayi!=0 && sayi<ustLimit)
			$('.modal-content').removeClass('alert-danger').addClass('alert-success').html('Sanırım '+sayi+' olması lazım');
		else if (sayi==255) 
			$('.modal-content').removeClass('alert-success').addClass('alert-danger').html('Hepsine tıklamasan daha iyi olmaz mı?');
		else if(sayi>ustLimit)
			$('.modal-content').removeClass('alert-success').addClass('alert-danger').html('Rastgele tıklamasan daha iyi olur!');
		else
			$('.modal-content').removeClass('alert-success').addClass('alert-danger').html('Seçtiğin sayı hiç birinde yok mu?');
	});// click

});
