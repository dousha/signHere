/// form_ctrl.js
/// Form validating functions
/// Written by dousha

function popup(content, level){
	// basically dynamically created popups should all be
	// dismissible
	$.post("lib/popup_intf.php", {content:content,level:level},
		function(html){
			$('#popuper').html(html);
		});
}

function submit_form(){
	
}

function validate(){
	// returns a list of componenet ids containing error
	var inputs = $('input');
}

function submit_worker(){
	
}
