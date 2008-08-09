/**
 * Javascript handlers for generic model admin.
 * 
 * Most of the work being done here is intercepting clicks on form submits,
 * and managing the loading and sequencing of data between the different panels of
 * the CMS interface.
 * 
 * @todo add live query to manage application of events to DOM refreshes
 * @todo alias the $ function instead of literal jQuery
 */
jQuery(document).ready(function() {
	/**
	 * Stores a jQuery reference to the last submitted search form.
	 */
	__lastSearch = null;

	/**
	 * GET a fragment of HTML to display in the right panel
	 */
	function showRecord(uri) {
		jQuery.get(uri, function(result){
			jQuery('#right').html(result);
			jQuery('#SearchForm_holder').tabs();
			
			// TODO/SAM: It seems a bit of a hack to have to list all the little updaters here. 
			// Is livequery a solution?
			Behaviour.apply(); // refreshes ComplexTableField
			jQuery('#right ul.tabstrip').tabs();
			
			jQuery('#Form_EditForm_action_goBack').click(function() {
				if(__lastSearch) __lastSearch.trigger('submit');
				return false;
			});
		});
	}
	
	/**
	 * POST a hash of form submitted data to the given endpoint
	 */
	function saveRecord(uri, data) {
		jQuery.post(uri, data, function(result){
			jQuery('#right').html(result);

			// TODO/SAM: It seems a bit of a hack to have to list all the little updaters here. 
			// Is livequery a solution?
			Behaviour.apply(); // refreshes ComplexTableField
			jQuery('#right ul.tabstrip').tabs();
		});
	}
	
	/**
	 * Returns a flattened array of data from each field
	 * of the given form 
	 */
	function formData(scope) {
		var data = {};
		jQuery('*[name]', scope).each(function(){
			var t = jQuery(this);
			var val = (t.attr('type') == 'checkbox') ? (t.attr('checked') == true) ? 1 : 0 : t.val();
			data[t.attr('name')] = val;
		});
		return data;
	}
	
	/**
	 * Find the selected data object and load its create form
	 */
	jQuery('#Form_ManagedModelsSelect').submit(function(){
		className = jQuery('select option:selected', this).val();
		requestPath = jQuery(this).attr('action').replace('ManagedModelsSelect', className + '/add');
		showRecord(requestPath);
		return false;
	});
	
	/**
	 * attach generic action handler to all forms displayed in the #right panel
	 */
	jQuery('#right .action').livequery('click', function(){
		form = jQuery('#right form');
		saveRecord(form.attr('action'), formData(form));
		return false;
	});
	
	/**
	 * Attach tabs plugin to the set of search filter and edit forms
	 */
	jQuery('ul.tabstrip').tabs();
	
	/**
	 * Submits a search filter query and attaches event handlers
	 * to the response table
	 * 
	 * @todo use livequery to manage ResultTable click handlers
	 */
	jQuery('#SearchForm_holder .tab form').submit(function(){
		__lastSearch = jQuery(this);
		
		form = jQuery(this);
		data = formData(form);
		jQuery.get(form.attr('action'), data, function(result){
			jQuery('#right').html(result);
			jQuery('#right td').click(function(){
				td = jQuery(this);
				showRecord(td.parent().attr('title'));
				td.parent().parent().find('td').removeClass('active');
				td.addClass('active').siblings().addClass('active');
			}).hover(function(){
						jQuery(this).addClass('over').siblings().addClass('over')
					}, function(){
						jQuery(this).removeClass('over').siblings().removeClass('over')
					});
		});
		
		return false;
	});
	
});

/**
 * @todo Terrible HACK, but thats the cms UI...
 */
function fixHeight_left() {
	fitToParent('LeftPane');
	fitToParent('Search_holder',12);
	fitToParent('ResultTable_holder',12);
}