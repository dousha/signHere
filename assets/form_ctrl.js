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
	if(validate()){
		$('#frm').submit();
	}
}

function add_parent(){
	$.post("lib/form_intf.php", {num:parseInt($('#parent_count').html()) + 1},
			function(html){
				// insert after
				var selector = '#parent_' + $('#parent_count').html();
				$(selector).after(html);
				var count = parseInt($('#parent_count').html());
				count++;
				$('#parent_count').html(count);
				$('#p_del').removeClass('disabled');
			});
}

function del_parent(){
	var selector = '#parent_' + $('#parent_count').html();
	$(selector).prev()[0].remove();
	$(selector).animate({height:0}, "fast", function(){$(selector).remove()});
	var count = parseInt($('#parent_count').html());
	count--;
	$('#parent_count').html(count);
	if($('#parent_count').html() == "1"){
		$('#p_del').addClass('disabled');
	}
}

function validate_radio(name){
	
}

function validate_file(id){
	
}

function validate_date(text){
	
}

function validate_id(text){
	return text.match('^(([0-9]{17})[0-9X])$');
}

function validate_number(text){
	
}

function validate_string(text){
	
}

function validate(){
	// returns a list of componenet ids containing error
	var inputs = $('input');
	// 
}

function submit_worker(){
	
}
