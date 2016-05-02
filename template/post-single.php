<div class="postbox">
	<div class="posttitle">
		<h1>{$article.Title}</h1>
		<p>{$article.Time('Y年m月d日 m:s')}</p>
	</div>
	{$article.Content}
</div>
{if !$article.IsLock}
{template:comments}
{/if}