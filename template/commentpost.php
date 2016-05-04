<!-- <aside id="comment">
	<form class="form-horizontal more-margin" id="frmSumbit" target="_self" method="post" action="{$article.CommentPostUrl}">
	<input type="hidden" name="inpId" id="inpId" value="{$article.ID}" />
	<input type="hidden" name="inpRevID" id="inpRevID" value="0" />
		<div class="form-group">
			<label for="inpName" class="col-sm-2 control-label">评论者(*)</label>
			<div class="col-sm-10">
				<input type="text" name="inpName" id="inpName" placeholder="您的称呼" value="{$user.Name}" tabindex="1" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="inpEmail" class="col-sm-2 control-label">Email(*)</label>
			<div class="col-sm-10">
				<input type="text" name="inpEmail" id="inpEmail" placeholder="@" value="{$user.Email}" tabindex="2" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="inpHomePage" class="col-sm-2 control-label">博客地址</label>
			<div class="col-sm-10">
				<input type="text" name="inpHomePage" id="inpHomePage" placeholder="http://" value="{$user.HomePage}" tabindex="3" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="txaArticle" class="col-sm-2 control-label">文章评论(*)</label>
			<div class="col-sm-10">
				<textarea name="txaArticle" id="txaArticle" rows="3" tabindex="5" class="form-control"></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default" name="sumbit" tabindex="6" onclick="return VerifyMessage()">发表评论</button>
			</div>
		</div>
	</form>
</aside> -->


<div class="commentinput">
	<div class="content1" id="comment">
		<form class="form-horizontal more-margin" id="frmSumbit" target="_self" method="post" action="{$article.CommentPostUrl}">
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
	</div>
</div>