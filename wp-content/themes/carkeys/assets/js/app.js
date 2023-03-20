$(document).ready(function() {    
    themeJs.create();
});
var themeJs = {	
	create: function(){
	    var that = this;
	    // bind Listeners
	    that.bindEvents();
	},
	bindEvents: function(){
		if( $('.select-input').length ){
			$('.select-input').each( function(e){
				themeJs.selectToLi( $(this).find('select') );
			})

			// click trigger for dropdowns
			$(document).on('click', '.dropdown-label', themeJs.triggerSelectLiDropdown );
		}
	},
	selectToLi : function( thisSelect ){ // covert select to li
		var select = thisSelect,
			list_html = '',
			dropdown = '',
			dropdown_label = '';

			dropdown_label = thisSelect.find('option').eq(0).text();
			thisSelect.find('option').each( function(e){
				list_html +='<li><span>'+$(this).text()+'</span></li>';
			});

			if( list_html ){
				dropdown = '<label class="dropdown-label">'+dropdown_label+'</label><div class="select-dropdown"><ul>'+list_html+'</ul></div>';
			}
		thisSelect.closest('.select-input').prepend( dropdown );
	},
	triggerSelectLiDropdown : function(e){
		var trigger_label = $(this),
			ddown_container = trigger_label.closest('.select-input');

		if( ddown_container.hasClass('dropped') ){
			ddown_container.removeClass('dropped');
		}else{
			ddown_container.addClass('dropped');
		}
	}
}