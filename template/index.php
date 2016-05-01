{template:header}
</head>
<body class="body">
	<div id="index-body">
		<div class="section"  id="HomePage">
			<img src="{$host}zb_users/theme/{$theme}/include/bg1.jpg" alt="" class="bg1">
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
						<div class="content1-list">
							<label for="inpName" class="control-label-box">评论者(*)</label>
							<input type="text" name="inpName" id="inpName" placeholder="您的称呼" tabindex="1" class="control-input-box">
						</div>
						<div class="content1-list">
							<label for="inpEmail" class="control-label-box">E-mail(*)</label>
							<input type="text" name="inpEmail" id="inpEmail" placeholder="@"  tabindex="2" class="control-input-box">
						</div>
						<div class="content1-list">
							<textarea name="txaArticle" id="txaArticle" rows="3" tabindex="3" class="form-control-box"></textarea>
						</div>
						<div class="content1-list">
							<input type="text" name="inpHomePage" id="inpHomePage" placeholder="http://"  tabindex="4" class="control-input-box">
							<button class="control-button-box">留言</button>
						</div>
					</div>
					</div>
				</div>
				<div class="footer1">
					<p><a href="">站长统计</a> 苏ICP备09094874号-2 .<a href="">登录</a></p>
					<p>Powered By <a href="">Z-BlogPHP</a>.Theme by <a href="">Paipk.com</a>.</p>
				</div>
			</div>
		</div>
		<div class="section">1</div>
		<div class="section">1</div>
		<div class="section">1</div>
	</div>
{template:footer}
