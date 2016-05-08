{if $article.ID==$zbp->GetPostByID($zbp->Config('fullpagestyle')->liuyanID)}
{template:index}
{else}
{template:header}
</head>
<body>
{if $article.Type==ZC_POST_TYPE_ARTICLE}
{template:post-single}
{else}
{template:post-page}
{/if}
{template:footer}
{/if}