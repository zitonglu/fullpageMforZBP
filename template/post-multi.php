{php}
	$temp="a";
	$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
	$content = $article->Content;
	preg_match_all($pattern,$content,$matchContent);
	if(isset($matchContent[1][0]))
	$temp=$matchContent[1][0];
	else
	$temp=$zbp->host."zb_users/theme/$theme/include/$temp.jpg";
{/php}

<div class="slide" id="{$article.ID}">
	<div class="blogtext">
		<div class="title">
			<img src="{$temp}" alt="{$article.Title}">
			<h1>{$article.Title}</h1>
			<p>
				{$article.Time('Y-m-d')}&nbsp
				{foreach $article.Tags as $tag}
					<a href="{$tag.Url}">{$tag.Name}</a>&nbsp
				{/foreach}
			</p>
			<div class="clearfix"></div>
		</div>
		<div class="blog">
			{$article.Intro}
		</div>
	</div>
	<div class="blogbottom">
		<p><a href="{$article.Url}" title="{$article.Title}">点击浏览</a></p>
	</div>
</div>