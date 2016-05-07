{template:header}
</head>
<body class="body">
	<div id="index-body">
		<div class="section"  id="HomePage">
			<img src="{$host}zb_users/theme/{$theme}/include/bg1.jpg" alt="{$name}" class="bg1">
			<div class="HomeBlog">
				<div class="headerImg" style="background: url({$host}zb_users/theme/{$theme}/include/bg1.jpg) bottom center no-repeat;"></div>
				<img class="avatarImg" src="{$host}zb_users/theme/{$theme}/include/a.jpg" alt="作者头像">
				<div class="text1">
					<h1>{$name}</h1>
					<nav>
						{module:navbar}
					</nav>
					<p class="blogText1">{$subname}</p>
					<div class="content1box">
					<div class="content1">
					{$lef=13}
					<form class="form-horizontal more-margin" id="frmSumbit" target="_self" method="post" action="{$lef.CommentPostUrl}">
					<input type="hidden" name="inpId" id="inpId" value="{$article.ID}" />
					<input type="hidden" name="inpRevID" id="inpRevID" value="0" />
						<div class="content1-list">
							<label for="inpName" class="control-label-box">评论者(*)</label>
							<input type="text" name="inpName" id="inpName" placeholder="您的称呼" tabindex="1" class="control-input-box" value="{$user.Name}">
						</div>
						<div class="content1-list">
							<label for="inpEmail" class="control-label-box">E-mail(*)</label>
							<input type="text" name="inpEmail" id="inpEmail" placeholder="@"  tabindex="2" class="control-input-box" value="{$user.Email}">
						</div>
						<div class="content1-list">
							<textarea name="txaArticle" id="txaArticle" rows="3" tabindex="3" class="form-control-box"></textarea>
						</div>
						<div class="content1-list">
							<input type="text" name="inpHomePage" id="inpHomePage" placeholder="http://"  tabindex="4" class="control-input-box" value="{$user.HomePage}">
							<button class="control-button-box" onclick="return VerifyMessage()">留言</button>
						</div>
					</form>				
					</div><!-- 未完成 -->
					</div>
				</div>
				<div class="footer1">
					<p>{$copyright} {if $user.ID>0}.<a href="{$host}zb_system/admin/?act=admin" rel="nofollow" title="后台管理">管理</a>{else}.<a href="{$host}zb_system/cmd.php?act=login" rel="nofollow" title="登录管理">登录</a>{/if}</p>
					<p>Powered By {$zblogphpabbrhtml}.Theme by <a href="http://www.paipk.com" target="_black" title="拍拍看科技">Paipk.com</a>.</p>
				</div>
			</div>
		</div>
		<div class="section">
			{foreach $articles as $article}
			{template:post-multi}
			{/foreach}
			<div class="slide">
				<div class="pagination-box">
					{template:pagebar}
				</div>
			</div>
		</div>
<div class="section">
	{php}
	$post = New Post;
	$post->LoadInfoByID($postid);
	$page = $page == 0 ? 1 : $page;
	$pagebar = new Pagebar('javascript:GetComments(\'' . $post->ID . '\',\'{%page%}\')');
	$pagebar->PageCount = $zbp->commentdisplaycount;
	$pagebar->PageNow = $page;
	$pagebar->PageBarCount = $zbp->pagebarcount;
	{/php}
	<label id="AjaxCommentBegin"></label>
	<div class="comments">
		<aside class="comment-list">
			{php}
			$comments = array();
			$comments = $zbp->GetCommentList('*',array(array('=', 'comm_LogID', $post->ID),array('=', 'comm_RootID', 0),array('=', 'comm_IsChecking', 0),),
			array('comm_ID' => ($zbp->option['ZC_COMMENT_REVERSE_ORDER'] ? 'DESC' : 'ASC')),
			array(($pagebar->PageNow - 1) * $pagebar->PageCount, $pagebar->PageCount),
			array('pagebar' => $pagebar)
			);
			$rootid = array();
			foreach ($comments as $comment) {
			$rootid[] = array('comm_RootID', $comment->ID);
			}
			$comments2 = $zbp->GetCommentList('*',array(array('=', 'comm_LogID', $post->ID),array('array', $rootid),array('=', 'comm_IsChecking', 0),),array('comm_ID' => ($zbp->option['ZC_COMMENT_REVERSE_ORDER'] ? 'DESC' : 'ASC')),null,null);
			$floorid = ($pagebar->PageNow - 1) * $pagebar->PageCount;
			foreach ($comments as &$comment) {
			$floorid += 1;
			$comment->FloorID = $floorid;
			$comment->Content = TransferHTML($comment->Content, '[enter]') . '<label id="AjaxComment' . $comment->ID . '"></label>';
			}
			foreach ($comments2 as &$comment) {
			$comment->Content = TransferHTML($comment->Content, '[enter]') . '<label id="AjaxComment' . $comment->ID . '"></label>';
			}
			{/php}
			<!--评论输出-->
			{foreach $comments as $key => $comment}
			{template:comment}
			{/foreach}
		</aside>
		<!--评论翻页条输出-->
		<div class="comments-pagebar">
			{template:pagebar}
		</div>
	</div>
	<label id="AjaxCommentEnd"></label>
</div>
	</div>
{template:footer}
