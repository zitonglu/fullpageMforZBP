{if $pagebar}
<nav>
	<ul class="pagination">
		{foreach $pagebar.buttons as $k=>$v}
		{if $pagebar.PageNow==$k}
		<li class="active"><a href="#">{$k}</a></li>
		{else}
		<li><a href="{$v}">{$k}</a></li>
		{/if}
		{/foreach}
	</ul>
</nav>
{/if}