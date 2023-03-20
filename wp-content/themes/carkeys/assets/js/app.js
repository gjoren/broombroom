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
			$(document).on('click', '.select-dropdown ul li', themeJs.triggerSelect );
			$(document).on('change', '.select-input select', themeJs.filterSelect );
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

		$('.dropdown-label').not(this).closest('.select-input').removeClass('dropped');
	},
	triggerSelect: function(e){
		var trigger = $(this),
			triggerCont = trigger.closest('.select-input'),
			selectTarget = triggerCont.find('select'),
			triggerIndex = trigger.index(),
			seletVal = null;
		selectTarget.find('option').eq( triggerIndex ).attr('selected', true );
		selectTarget.trigger('change');
		trigger.closest('.select-input').find('.dropdown-label' ).text( trigger.text() );
		trigger.closest('.select-input').removeClass('dropped');
	},
	filterSelect: function(e){
		var term_id = $(this).val(),
			filter_for = $(this).closest('.select-input').data('filter-for');
		$.ajax({
		    url:carkeys.ajaxurl,
		    method : 'POST',
		    dataType : 'json',
		    data:{
		        'action' : 'ajaxFilterSelection',
		        'term_id' : term_id,
		        'filter_for': filter_for
		    },
		    beforeSend: function() {
		        
		    },
		    success: function( response ){		                         
		    }
		});
	}
}