<?php
//注册插件
RegisterPlugin('fullpagestyle','ActivePlugin_fullpagestyle');

function ActivePlugin_fullpagestyle()
{
	Add_Filter_Plugin('Filter_Plugin_Zbp_Load','fullpagestyle_rebuild_Main');
}

function InstallPlugin_fullpagestyle()
{
global $zbp;
}

//重建模块首先加载项目
function fullpagestyle_rebuild_Main() {
	global $zbp;
	$zbp->RegBuildModule('comments','fullpagestyle_side_comm');
}

//侧栏评论
function fullpagestyle_side_comm() {
    global $zbp;
	$i = $zbp->modulesbyfilename['comments']->MaxLi;
	if ($i == 0) $i = 10;
	$comments = $zbp->GetCommentList('*', array(array('=', 'comm_RootID', 0)), array('comm_PostTime' => 'DESC'), $i, null);
	$s = '';
	foreach ($comments as $comment) {
		$s .= '<div class="media"><div class="media-left">';
		$s .= '<a href="'.$comment->Post->Url.'"><img src="'.$comment->Author->Avatar.'" alt="'.$comment->Author->StaticName.'"></a></div>';
		$s .= '<div class="media-body">';
		$s .= '<h2>'.$comment->Author->StaticName.'</h2><p>';
		$s .= TransferHTML($comment->Content,'[noenter]');
		$s .= '</p></div><div class="clearfix"></div></div>';
	}
	return $s;
}

function UninstallPlugin_fullpagestyle(){
	global $zbp;
}