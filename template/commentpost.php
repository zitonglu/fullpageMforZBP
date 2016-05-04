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