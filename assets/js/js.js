$(function (){
		
	$('.filtro').click (function(){
	$('.mostraFiltro').slideToggle();
	$(this).toggleClass('active');
		return false;
	});
	
	$('.mobmenu').click (function(){
	$('.menu').slideToggle();
	$(this).toggleClass('active');
		return false;
	});	
	
	
	$('.senha').click (function(){
		$('.mostraCampo').slideToggle();
		$(this).toggleClass('active');
		return false;
	});
	
		
	$( "#accordion" ).accordion({
		collapsible: true,
		autoHeight: false,
		active: false,
		heightStyle: "content" 
    });    

});

function excluir(obj){
	var entidade  = $(obj).attr('data-entidade');
	var id  = $(obj).attr('data-id');	
	if(confirm('Deseja realmente excluir ?')){
		window.location.href = base_url + entidade +"/excluir/" + id;	
	}
}

function fecharMsg(obj){	
	$(".msg").hide();
}