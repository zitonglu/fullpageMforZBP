{if $type=='index'}
    <script type="text/javascript" src="{$host}zb_users/theme/{$theme}/js/jquery.fullPage.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#index-body").fullpage({
        controlArrows:false,
        anchors:['home','list','comments'],
        loopBottom:true,
        navigation:true,
        slidesNavigation:true
        });
    });
    </script>
{/if}

{$footer}
</body>
</html>