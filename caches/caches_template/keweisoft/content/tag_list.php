<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
  <head>
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta charset="utf-8" />
    <meta name="author" content="keweisoft.com" />
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
    <meta name="description" content="<?php echo $SEO['description'];?>" />
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>official/common.css">
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>official/news.css">
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>official/hover.css">
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>official/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo JS_PATH;?>official/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>official/index.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>official/nav.js"></script>
  <!--百度统计-->
  <script>
  var _hmt = _hmt || [];
  (function() {
    var hm = document.createElement("script");
    hm.src = "//hm.baidu.com/hm.js?862c8265e86587e91bada5e06c1e576c";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
  })();
  </script>   
  </head>
  <body>
    <?php include template("content","header"); ?>
    <div class="news-banner">
      <div class="news-banner-top"></div>
      <div class="news-banner-bottom">
        <div class="news-banner-center">
          <a href="http://kf2.immivip.com/new/client.php?unique_id=&unique_name=&arg=admin&style=7" target="_blank"><div class="nbc-btn">点击在线咨询</div></a>
        </div>
      </div>
    </div>
    <div class="news-b1 m-content">
      <p><a href="<?php echo siteurl($siteid);?>">首页</a><span> > </span><?php echo catpos($catid);?> 标签：<font color="red"><?php echo $tag;?></font> 总共有 <?php echo $total;?> 条记录</div>
      </p>
<?php $n=1;if(is_array($datas)) foreach($datas AS $r) { ?>
      <div class="news-b1-item">
        <div class="nbi-right">
          <p class="nbi-right-tit"><a href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title],64,'...');?></a></p>
          <p class="nbi-right-con"><?php echo str_cut($r[description],185,'...');?></p>
          <a href="http://kf2.immivip.com/new/client.php?unique_id=&unique_name=&arg=admin&style=7" target="_blank" class="nbi-consult">点击咨询>></a>
          <a href="<?php echo $r['url'];?>" target="_blank"><div class="nbi-more">了解详情>></div></a>
        </div>
      </div>
<?php $n++;}unset($n); ?>
        <div id="pages" class="text-c"><?php echo $pages;?></div>
  </div>
 
      <div style="clear:both;"></div>     
<?php include template("content","footer"); ?>

