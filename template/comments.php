{if $socialcomment}
{$socialcomment}
{else}

<!--评论框-->
{template:commentpost}
<label id="AjaxCommentBegin"></label>
{if $article.CommNums>0}
<div class="comments">
<aside class="comment-list">
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
{/if}
<label id="AjaxCommentEnd"></label>
{/if}