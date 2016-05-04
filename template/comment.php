<div class="media" id="cmt{$comment.ID}">
  <div class="media-left">
    <a href="#comment" onclick="RevertComment('{$comment.ID}')">
      <img class="media-object" src="{$comment.Author.Avatar}" alt="{$comment.Author.Name}" title="点击头像回复该评论">
    </a>
  </div>
  <div class="media-body">
    <h2>{$comment.Author.Name}</h2>
    <p>{$comment.Content}</p>
    {foreach $comment.Comments as $comment}
      {template:comment}
    {/foreach}
  </div>
</div>