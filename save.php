<?php
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';

$zbp->Load();
$action='root';
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}
if (!$zbp->CheckPlugin('fullpagestyle')) {$zbp->ShowError(48);die();}

if($_GET['type'] == 'base' ){
	global $zbp;
	foreach ($_FILES as $key => $value) {
		if(!strpos($key, "_php")){
			if (is_uploaded_file($_FILES[$key]['tmp_name'])) {
				$tmp_name = $_FILES[$key]['tmp_name'];
				$name = $_FILES[$key]['name'];
				@move_uploaded_file($_FILES[$key]['tmp_name'], $zbp->usersdir . 'theme/fullpagestyle/include/a.jpg');
			}
		}
	}
	$zbp->SetHint('good','修改成功');
	Redirect('./main.php?act=base');
}
if($_GET['type'] == 'bjjpg' ){
	global $zbp;
	foreach ($_FILES as $key => $value) {
		if(!strpos($key, "_php")){
			if (is_uploaded_file($_FILES[$key]['tmp_name'])) {
				$tmp_name = $_FILES[$key]['tmp_name'];
				$name = $_FILES[$key]['name'];
				@move_uploaded_file($_FILES[$key]['tmp_name'], $zbp->usersdir . 'theme/fullpagestyle/include/bg1.jpg');
			}
		}
	}
	$zbp->SetHint('good','修改成功');
	Redirect('./main.php?act=bjjpg');
}

?>