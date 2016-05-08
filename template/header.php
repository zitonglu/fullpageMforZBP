<!DOCTYPE html>
<html xml:lang="{$language}" lang="{$language}">
<head>
	<meta charset="UTF-8">
  <!-- 视口控制 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="format-detection" content="telephone=no">

  <script src="{$host}zb_system/script/common.js" type="text/javascript"></script>
  <script src="{$host}zb_system/script/c_html_js_add.php" type="text/javascript"></script>
  <!-- 引入css -->
  {if $type=='index'}
  <link rel="stylesheet" type="text/css" href="{$host}zb_users/theme/{$theme}/style/jquery.fullPage.css" />
  {/if}
  <link rel="stylesheet" type="text/css" href="{$host}zb_users/theme/{$theme}/style/{$style}.css?v=1.0" />
{$header}
  <title>{$title}</title>