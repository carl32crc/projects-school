$(document).ready(main);

var cont = 1;

function main(){
	$('.menu_bar').parent().click(function(){
		if(cont == 1){
			$('.menuPersonal').animate({
				left:'0'
			});
			cont = 0;
		}else{
			cont = 1;
			$('.menuPersonal').animate({
				left:'-100%'
			});
		}
	});
}