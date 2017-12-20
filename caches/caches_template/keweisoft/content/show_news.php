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
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>official/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo JS_PATH;?>official/jquery-1.7.1.min.js"></script>
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
  <div class="m-content">
  <div class="title"><a href="<?php echo siteurl($siteid);?>">首页</a> <span id="dt">&nbsp;>&nbsp;</span> <a href="<?php echo $CATEGORYS[$catid]['url'];?>"><?php echo $CATEGORYS[$catid]['catname'];?></a>&nbsp;>&nbsp;<?php echo $title;?><div class="Eng">NEWS</div></div>
  <div class="left">
    <div class="left_Con">
    <h1 class="Font_Title"><?php echo $title;?></h1>
    <div class="Data"><?php echo date('Y-m-d',strtotime($inputtime));?></div>
    <div class="Eyes"><span id="hits"><script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script></span></div>
    <div style="clear:both;"></div>
    <div class="Text_Con">
      <div class="Text_desc"><span style="font-weight:bold;">摘要：</span><?php echo $description;?>...</div>
      <div class="Text_desc Text_keyword"><span style="font-weight:bold;">关键词：</span><?php $n=1;if(is_array($keywords)) foreach($keywords AS $keyword) { ?><?php if($n<=3) { ?><?php echo $keyword;?>&nbsp;&nbsp;<?php } ?><?php $n++;}unset($n); ?></div>     
    <p><?php echo $content;?></p>
    <div class="bdsharebuttonbox" style="margin-top:15px;"><a href="#" class="bds_more" data-cmd="more"></a><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a><a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq"></a><a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren"></a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
  <span id='favorite'>
  <a href="javascript:;" onclick="add_favorite('<?php echo addslashes($title);?>');" class="t6">收藏</a>
  </span>
<p class="f14">
    <strong style="color:#ff6600;">上一篇：</strong><a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a><br />
    <strong style="color:#ff6600;">下一篇：</strong><a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a>
</p>  
   </div>  
      </div>
</div>
                 <div class="right_2">
                 <div class="Bar_2">最近更新:</div>
                 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6c9f49ed1ab5fc64ca25c90b316bbc59&action=lists&catid=249&order=inputtime+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'249','order'=>'inputtime DESC','limit'=>'5',));}?> 
                 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                 <div class="img_1"><a href="#"><img src="<?php echo $r['thumb'];?>" width="286" height="150" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>"/></a></div>
                 <p class="LittleTit_1"><a href="<?php echo $r['url'];?>" style="font-size:14px;color:#333; font-weight:bold;"><?php echo str_cut($r[title],30,'...');?></a></p>
                 <div class="ConY_1"><p class="Con_1"><a href="<?php echo $r['url'];?>" style="font-size:12px;color:#666; line-height:20px;"><?php echo str_cut($r[description],85,'...');?></p></a></div>
                 <?php $n++;}unset($n); ?>
                 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
               
                 </div>
          </div> 
           <div style="clear:both"></div> 
<script type="text/javascript">
  function add_favorite(title) {
    $.getJSON('<?php echo APP_PATH;?>api.php?op=add_favorite&title='+encodeURIComponent(title)+'&url='+encodeURIComponent(location.href)+'&'+Math.random()+'&callback=?', function(data){
      if(data.status==1)  {
        $("#favorite").html('收藏成功');
      } else {
        alert('请登录');
      }
    });
  }  
</script>      
<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>     
		<?php include template("content","footer"); ?>	
