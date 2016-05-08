<?php
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';

$zbp->Load();
$action='root';
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}
if (!$zbp->CheckPlugin('fullpagestyle')) {$zbp->ShowError(48);die();}
$blogtitle="主题配置";

if(isset($_POST['liuyanID'])){
	global $zbp;
	$zbp->Config('fullpagestyle')->liuyanID = $_POST['liuyanID'];
	$zbp->SaveConfig('fullpagestyle');
  $zbp->ShowHint('good');
}

require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';
?>

<div id="divMain">
  <div class="divHeader2"><?php echo $blogtitle;?></div>
  <div class="SubMenu"></div>
  <div id="divMain2">
    <table width="100%" border="1" width="100%" class="tableBorder">
      <tr>
        <th scope="col" height="32" width="150px">配置项</th>
        <th scope="col">配置内容</th>
        <th scope="col" width="500px">使用说明</th>
      </tr>
      <form enctype="multipart/form-data" method="post" action="save.php?type=base">
        <tr>
          <td><label for="a.png">头像设置</label></td>
          <td><input name="a.jpg" type="file"/>
            <input name="" type="Submit" class="button" value="上传头像图片"/></td>
          <td>[179px*179px]-jpg格式</td>
        </tr>
      </form>
      <form enctype="multipart/form-data" method="post" action="save.php?type=bjjpg">
        <tr>
          <td><label for="bg1.png">背景图片</label></td>
          <td><input name="bg1.jpg" type="file"/>
            <input name="" type="Submit" class="button" value="上传背景图片"/></td>
          <td>自动滤镜效果</td>
        </tr>
      </form>
      </table>
    <!--图片OK-->
    <form id="form-postdata" name="form-postdata" method="post" enctype="multipart/form-data" action="main.php">
      <table width="100%" border="1" width="100%" class="tableBorder">
      <tr>
        <th scope="col" height="32" width="150px">配置项</th>
        <th scope="col">配置内容</th>
        <th scope="col" width="500px">使用说明</th>
      </tr>
      <tr>
        <td scope="row">留言评论页面ID</td>
        <td><input name="liuyanID" type="text" style="width:98%" value="<?php echo $zbp->Config('fullpagestyle')->liuyanID; ?>">
          </input></td>
        <td>请设置一个留言页面的ID，默认1</td>
      </tr>
      </table>
      <br/>
      <input class="button" type="submit" value="保存设置" />
    </form>
  </div>
</div>
<?php
require $blogpath . 'zb_system/admin/admin_footer.php';
?>
