<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, 
  initial-scale=1.0, 
  maximum-scale=1.0, 
  user-scalable=no">

  <link href="Public/css/sdcms.css" rel="stylesheet" type="text/css">
  <link href="Public/css/nav.color.css" rel="stylesheet">
   <link rel="stylesheet" href="Public/css/bootstrap.min.css">
     <title>共青团暨南大学珠海校区工作委员会</title>
    <!--[if lt IE 9]>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>
        .setbord{  
        	    border-style:solid;
                border-width:1px;
        	    border-color: #990000;
        }
        .nav-tabs a{
            color:#900;
        }
        .panel-body div{
          margin:15px;
        }
        body {
        	background-image:url("Public/images/748001000820207069.jpg");
        	background-position:center; 
        	background-repeat:repeat;
        }
        footer a{
            color: black;
        }        
        span{
            color: #990000;
        }
        .body1{
            padding-left: 150px;
            padding-right: 150px;
        }
        .body2{
          width:100%;
        }
      .search1_class{
        width:100%;
        padding-left:0px;
        padding-right:0px;
        margin-top:-5px;
        margin-bottom:15px;
      }
       .round_img_class{
        width:100%;
        padding-left:0px;
        padding-right:0px;
        margin-bottom:15px;
      } 
      .images_information_class{
        width:100%;
        padding-left:0px;
        padding-right:0px;
      } 
      .news_center_class{
        width:100%;
        padding-left:0px;
        padding-right:0px;
      } 
      .fabric_construct_class{
        width:100%;
        padding-left:0px;
        padding-right:0px;
      }
       .celebrities_story_class{
        width:100%;
        padding-left:0px;
        padding-right:0px;
      } 
      .image_center_class{
        width:100%;
        padding-left:0px;
        padding-right:0px;
      } 
      .newest_news_class{
        width:100%;
        padding-left:0px;
        padding-right:0px;
    
      }
</style>

</head>
<body id="set_range">
    <div class="col-md-12" id="title_img">
            <img style="display:block;width:100%;margin-top:10px;margin-bottom:10px;" src="Public/images/712824885406454302.jpg">
    </div>

<!--电脑端的网页-->
  <div class="col-md-12" id="nav_computer">
      <ul class="nav nav-tabs" role="tablist">
          <?php if(is_array($nav)): foreach($nav as $key=>$vo): ?><li role="tab" data-toggle="tab"><a href="#"><?php echo ($vo['name']); ?></a></li><?php endforeach; endif; ?>

      </ul>
  </div>
<!--电脑端的网页-->

<!--显示手机端的网页-->
    <nav class="navbar navbar-default" id="nav_mobile" >
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" id="brand" href="#">共青团暨珠工作委员会</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">首页 <span class="sr-only">(current)</span></a></li>
            <li><a href="#">公告中心</a></li>
            <li><a href="#">新闻中心</a></li>
            <li><a href="#">组织建设</a></li>
            <li><a href="#">学术科技</a></li>
            <li><a href="#">品牌活动</a></li>
            <li><a href="#">人物专访</a></li>
            <li><a href="#">图片专区</a></li>
            <li><a href="#">招新专题</a></li>
            <li><a href="#">探索连线</a></li>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
<!--显示手机端的网页-->

<!--搜索框-->
  <div class="col-md-6" id="search1" >
    <div class="col-md-12">
      <form action="" method="get" class="form-horizontal">
          <div class="input-group search-input-group setbord">
              <input type="hidden" name="scope" value="1">
              <input name="key" autocomplete="off" type="text" class="form-control" placeholder="请输入要搜索的内容关键字" >
              <span class="input-group-addon">
              <button type="submit">
              <span class="glyphicon glyphicon-search"></span>
              </button> 
              </span>
          </div>
      </form>
    </div>
  </div>
<!--搜索框-->

<!--图片轮换-->
    <div id="myCarousel" class="carousel slide col-lg-6 col-md-6 style="height: 300px"" >
        <!-- 轮播（Carousel）指标 -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <!-- 轮播（Carousel）项目 -->
        <div>
        <div class="carousel-inner " >
            <div class="item active" style="height: 300px">
                <a target="_blank" href="index.php?c=detail&id=<?php echo ($vo["news_id"]); ?>">
                    <img src="upload/2017/04/28/59021d745b697.jpg" alt="<?php echo ($vo["title"]); ?>"  style="height: 300px" >
                </a>
            </div>
            <?php if(is_array($carousel)): foreach($carousel as $key=>$vo): ?><div class="item">
                    <a target="_blank" href="index.php?c=detail&id=<?php echo ($vo["news_id"]); ?>">
                    <img src="<?php echo ($vo["thumb"]); ?>" alt="<?php echo ($vo["title"]); ?>">
                    </a>
                </div><?php endforeach; endif; ?>
        </div>
    </div>
    </div>

    <!--图片轮换-->
<div class="col-md-6" >
   <!--搜索框-->
    <div class="col-md-12" id="search2">
        <form action="" method="get" class="form-horizontal">
            <div class="input-group search-input-group setbord">
                <input type="hidden" name="scope" value="1"/>
                <input name="key" autocomplete="off" type="text" class="form-control" placeholder="请输入要搜索的内容关键字"/ >
                <span class="input-group-addon">
                  <button type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                  </button> 
                </span>
            </div>
        </form>
    </div>
  <!--搜索框-->

  <!--最新消息-->
    <div class="col-md-12" id="newest_news" style="height: 300px">
      <div class="panel panel-primary setbord">
        <div class="panel-heading">
          <h3 class="panel-title">最新信息</h3>
        </div>
        <div class="panel-body">
          <ol class="list-unstyled">
                      <h3></h3>
                      <summary></summary>
              <?php if(is_array($latest)): foreach($latest as $key=>$vo): ?><li><?php echo ($vo["title"]); ?></li><?php endforeach; endif; ?>
          </ol>
        </div>
      </div>
    </div>
  <!--最新消息-->
</div>

<!--广告位-->
  <div class="col-md-12">
    <img style="display:block;width:100%;" id="img_middle" src="Public/images/206888339129661881.jpg">
  </div>
<!--广告位-->





<!--图文信息-->

  <div class="col-md-12" id="images_information">
      <div class="panel panel-default">
          <div class="panel-heading">
              图文信息
          </div>
          <div class="panel-body">
              <?php if(is_array($pic)): foreach($pic as $key=>$vo): ?><div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                      <a target="_blank" href="index.php?c=detail&id=<?php echo ($vo["news_id"]); ?>">
                          <img src="<?php echo ($vo["thumb"]); ?>" alt="<?php echo ($vo["title"]); ?>" width="100px">
                      </a>
                  </div><?php endforeach; endif; ?>
          </div>
      </div>

      </div>
<!--图文信息-->         

<!--新闻中心-->
  <div class="col-md-6"  id="news_center">
    <div class="panel panel-primary setbord">
      <div class="panel-heading">
        <h3 class="panel-title">新闻中心<a href="#"><span style="float:right;">更多>></span></a></h3>
      </div>
      <div class="panel-body">
        <ol class="list-unstyled">
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
        </ol>
      </div>
    </div>
  </div>
<!--新闻中心-->

<!--组织建设-->
  <div class="col-md-6"  id="fabric_construct">
    <div class="panel panel-primary setbord">
      <div class="panel-heading">
          <h3 class="panel-title">组织建设<a href="#"><span style="float:right;">更多>></span></a></h3>
      </div>
      <div class="panel-body">
        <ol class="list-unstyled">
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
        </ol>
      </div>
    </div>
  </div>
<!--组织建设-->

<!--人物专访-->        
  <div class="col-md-6" id="celebrities_story">
    <div class="panel panel-primary setbord">
      <div class="panel-heading">
          <h3 class="panel-title">人物专访<a href="#"><span style="float:right;">更多>></span></a></h3>
      </div>
      <div class="panel-body">
        <ol class="list-unstyled">
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
        </ol>
      </div>
    </div>
  </div>
<!--人物专访-->   

<!--图片专区-->   
  <div class="col-md-6" id="image_center">
    <div class="panel panel-primary setbord">
      <div class="panel-heading">
          <h3 class="panel-title">图片专区<a href="#"><span style="float:right;">更多>></span></a></h3>
      </div>
      <div class="panel-body">
        <ol class="list-unstyled">
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
        </ol>
      </div>
    </div>
  </div>
<!--图片专区-->  

<!--显示下载链接-->
  <div id="Download_frame" align="center" style=" margin-top:px;">
    <div>
        <div class="col-md-12">
          <div class="panel panel-default" style=" border: 1px solid #FF3300">
            <div class="panel-heading" id="title06"> 公事文件下载区</div>
            <div class="panel-body">
              <table class="table table-bordered">
                <thead >
                  <tr>
                    <th>文件序号</th>
                    <th>文件标题</th>
                    <th>发布时间</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td><a href="">待补充</a></td>
                    <td>待补充</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td><a href="">待补充</a></td>
                    <td>待补充</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td><a href="">待补充</a></td>
                    <td>待补充</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
  </div>
<!--显示下载链接-->



<!--脚部链接-->  
  <div class="col-md-12" id="more_about">
    <div class="panel panel-primary setbord">
      <div class="panel-heading">
        <h3 class="panel-title">友情链接
          <a href="#"><span style="float:right;">更多链接</span></a>
          <a href="#"><span style="float:right;">申请链接&nbsp;&nbsp;</span></a>
          <a href="#"><span style="float:right;">首页链接&nbsp;&nbsp;</span></a>
        </h3>
      </div>
    </div>
    <div class="panel-body">
      <a href="#"><img src="Public/images/#"></a>
      <a href="#"><img src="Public/images/#"></a>
      <a href="#"><img src="Public/images/#"></a>
      <a href="#"><img src="Public/images/#"></a>
      <a href="#"><img src="Public/images/#"></a>
    </div>
<!--脚部链接--> 

  <footer>
          <p class="text-center"><a href="#">网站首页</a>  |  <a href="#">意见反馈</a>  |  <a href="#">网站地图</a>  |  <a href="#">RSS订阅</a>  |  <a href="#">匿名投稿</a></p>
          <p class="text-center">版权所有：共青团暨南大学珠海校区工作委员会&nbsp;&nbsp;&nbsp;
          网站维护：暨南人网络联盟</p>
          <p class="text-center">...</p>
  </footer>
</div>

<script src="Public/js/jquery-1.11.1.min.js"></script>
<script src="Public/js/bootstrap.min.js"></script>
</body>
<script type="text/javascript">
   var p0=document.getElementById("set_range");
      var p1 = document.getElementById("search1");
      var p2=document.getElementById("round_img");
      var p3=document.getElementById("newest_news");
      var p4=document.getElementById("images_information");
      var p5=document.getElementById("news_center");
      var p6=document.getElementById("fabric_construct");
      var p7=document.getElementById("celebrities_story");
      var p8=document.getElementById("image_center");

      var px=window.screen.width;
      if(px>=500)       
        {
          p0.className="body1";
      nav_mobile.style.display="none";
      search1.style.display="none";
      fooster_computer.style.display="none";
    }
    else {
      p1.className="search1_class";
      p2.className="round_img_class";
      p3.className="newest_news_class";
      p4.className="images_information_class";
      p5.className="news_center_class";
      p6.className="fabric_construct_class";
      p7.classNmae="celebrities_story_class";
      p8.className="image_center_class";
      p0.className="body2";

      img_middle.style.display="none";
      search2.style.display="none";
      more_about.style.display="none";
      Download_frame.style.display="none";
      nav_computer.style.display="none";
      title_img.style.display="none";
    //p1.className="bar2";
    }
</script>
</html>