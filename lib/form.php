<?php
function input_pair(string $label, 
					string $name, 
					string $placeholder = '',
					string $type = 'text', 
					string $value = '',
					...$options){
	$content = '
			<div class="form-group">
				<div class="row">
					<label for="' . $name . '" class="col-xs-2 control-label">' 
						. $label 
						. '</label>
					<div class="col-xs-10">';
	if($type == 'radio'){
		# radio buttons shares a same name
		foreach($options as $option){
			$content .= '<label class="radio-inline">
							<input type="radio" name="' 
							. $name
							. '" value="' 
							. $option
							.'">'
							. $option
							. '</label>';
		}
	}
	elseif($type == 'checkbox'){
		# so do checkboxes
		foreach($options as $option){
			$content .= '<label class="checkbox-inline">
							<input type="checkbox" name="' 
							. $name
							. '" value="' 
							. $option
							.'">'
							. $option
							. '</label>';
		}
	}
	else{
		$content .= '<input type="' . $type . '" class="form-control" id="' 
							. $name 
							. '" name="' 
							. $name 
							. '" value="'
							. $value
							. '" placeholder="'
							. $placeholder
							. '">';
	}
	$content .= '</div></div></div>';
	return $content;
}

function form_title(string $title, string $id, string $icon = 'pencil'){
	return '<h2 id="' 
			. $id 
			. '">' 
			. $title 
			. '<span id="' 
			. $id 
			. '_status" class="glyphicon glyphicon-'
			. $icon
			. '"></span></h2><hr>';
}

function form_heading(){
	return "洛阳外国语学校在线报名系统";
}

function form_body(){
	$bdy = '
		<form class="form-horizontal" action="confirm.php" method="post">
			<div class="container-fluid">'
			. form_title('个人信息', 'cv')
			. input_pair('姓名', 'name')
			. input_pair('性别', 'gender', '', 'radio', '', '男', '女')
			. input_pair('生日', 'birthday', '20010506')
			. input_pair('民族', 'race', '汉族')
			. input_pair('身份证号', 'ident', '123456789012345678 或 12345678901234567X')
			. input_pair('毕业学校', 'graduate')
			. input_pair('所获荣誉', 'prize', '', 'checkbox', '', '市级任意竞赛二等奖及以上', '市级三好学生及以上')
			. input_pair('家庭住址', 'addr')
			. input_pair('手机号码', 'phone', '可留空')
			. input_pair('住宿类型', 'dorm', '', 'radio', '', '走读', '住宿')
			. input_pair('志愿语种', 'lang', '', 'radio', '', '英语', '日语')
			. input_pair('一寸免冠照片', 'photo', '', 'file')
			. '<br>'
			. form_title('监护人信息', 'parent')
			. input_pair('姓名', 'p_name')
			. input_pair('与被监护人关系', 'p_relationship')
			. input_pair('民族', 'p_race')
			. input_pair('身份证号', 'p_ident', '123456789012345678 或 12345678901234567X')
			. input_pair('手机号码', 'p_phone')
			.'<div class="form-group">
					<div class="col-xs-offset-2 col-xs-10">
						<button type="submit" class="btn btn-primary">注册</button>
						<button type="reset" class="btn btn-default">重置表单</button>
					</div>
				</div>
			</div>
		</form>';
	return $bdy;
}

function form_footer(){
	return "洛阳外国语学校 (c) 2016";
}
?>
