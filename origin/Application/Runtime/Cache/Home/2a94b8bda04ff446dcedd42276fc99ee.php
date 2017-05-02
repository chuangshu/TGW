<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>共青团暨南大学珠海校区工作委员会</title>

    <link rel="stylesheet" href="Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="Public/css/home/main.css" type="text/css" />
    <script src="Public/js/jquery-1.11.1.min.js"></script>
    <script src="Public/js/bootstrap.min.js"></script>
    
    
    <style>
        body{
            background-image:url("Public/images/748001000820207069.jpg");
            background-position:center;
            background-repeat:repeat;
        }
    </style>
</head>
<body>
<!-- 第一张大图  -->
<div class="container" align="center">
    <img src="Public/images/712824885406454302.jpg" class="img-responsive" alt="共青团暨南大学珠海校区工作委员会" width="100%">
</div>
<br />
<!-- 第一张大图 -->


<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="
                #bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">&nbsp;&nbsp;首页&nbsp;&nbsp;</a>

            </div>
            <div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <?php if(is_array($nav)): foreach($nav as $key=>$vo): ?><li <?php if($vo['menu_id'] == $_GET['id']): ?>class="active"<?php endif; ?>>
                            <a href="index.php?c=cat&id=<?php echo ($vo["menu_id"]); ?>"><?php echo ($vo["name"]); ?></a>
                            </li><?php endforeach; endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>

    



<script>
    $(document).ready(function(){
        $('#circleContent').carousel({interval:5000});//每隔5秒自动轮播
    });
</script>




<div class="container">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div id="myCarousel" class="carousel slide">
            <!-- 轮播（Carousel）指标 -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>
            <!-- 轮播（Carousel）项目 -->
            <div class="carousel-inner">
                <div class="item active">
                    <a target="_blank" href="index.php?c=detail&id=1">
                    <img src="Public/images/001.jpg" alt="First slide">
                </div>
                <?php if(is_array($carousel)): foreach($carousel as $key=>$vo): ?><div class="item">
                    <a target="_blank" href="index.php?c=detail&id=<?php echo ($vo["news_id"]); ?>">
                    <img src="<?php echo ($vo["thumb"]); ?>" alt="<?php echo ($vo["title"]); ?>">
                    </a>
                </div><?php endforeach; endif; ?>
            </div>
            <!-- 轮播（Carousel）导航 -->
            <a class="carousel-control left" href="#myCarousel"
               data-slide="prev">&lsaquo;
            </a>
            <a class="carousel-control right" href="#myCarousel"
               data-slide="next">&rsaquo;
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <br />
        <div class="input-group" style="margin-top:0px positon:relative">

            <input type="text" class="form-control"placeholder="请输入字段名" / >
            <span class="input-group-btn">
               <button class="btn btn-info btn-search">查找</button>
            </span>
        </div>
        <br />
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    最新信息
                </h3>
            </div>
            <div class="panel-body">
                <?php if(is_array($latest)): foreach($latest as $key=>$vo): ?><a target="_blank" href="index.php?c=detail&id=<?php echo ($vo["news_id"]); ?>">
                    <h><?php echo ($vo["title"]); ?></h>
                    </a>
                    <br /><?php endforeach; endif; ?>
            </div>
        </div>

    </div>
</div>


<!-- 第二张大图 -->
<br />
<div class="container" align="center">
    <img src="Public/images/206888339129661881.jpg" class="img-responsive" alt="共青团暨南大学珠海校区工作委员会" width="100%">
</div>
<br />
<!-- 第二张大图 -->


<!-- 九小图 -->
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                图文信息
            </h3>
        </div>
        <div class="panel-body">
            <?php if(is_array($pic)): $i = 0; $__LIST__ = $pic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="container col-lg-3 col-md-3 col-sm-6 col-xs-10">
                    <a target="_blank" href="index.php?c=detail&id=<?php echo ($vo["news_id"]); ?>">
                    <img src="<?php echo ($vo["thumb"]); ?>" alt="<?php echo ($vo["title"]); ?>" width="" height="140" class="img-responsive">
                    <div class="container"><h><?php echo ($vo["title"]); ?></h></div>
                    </a>
                    <br />
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</div>
<!-- 九小图 -->


<!-- 四模块 -->
<div class="container">
    <div class="container col-lg-6 col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    新闻中心
                </h3>
            </div>
            <div class="panel-body">
                <?php if(is_array($news)): foreach($news as $key=>$vo): ?><a target="_blank" href="index.php?c=detail&id=<?php echo ($vo["news_id"]); ?>">
                    <h><?php echo ($vo["title"]); ?></h>
                    </a>
                    <br /><?php endforeach; endif; ?>
            </div>
        </div>
    </div>
    <div class="container col-lg-6 col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    组织建设
                </h3>
            </div>
            <div class="panel-body">
                <?php if(is_array($construct)): foreach($construct as $key=>$vo): ?><a target="_blank" href="index.php?c=detail&id=<?php echo ($vo["news_id"]); ?>">
                    <h><?php echo ($vo["title"]); ?></h>
                    </a>
                    <br /><?php endforeach; endif; ?>
            </div>
        </div>
    </div>
    <div class="container col-lg-6 col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    人物专访
                </h3>
            </div>
            <div class="panel-body">
                <?php if(is_array($interview)): foreach($interview as $key=>$vo): ?><a target="_blank" href="index.php?c=detail&id=<?php echo ($vo["news_id"]); ?>">
                    <h><?php echo ($vo["title"]); ?></h>
                    </a>
                    <br /><?php endforeach; endif; ?>
            </div>
        </div>
    </div>
    <div class="container col-lg-6 col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    图片专区
                </h3>
            </div>
            <div class="panel-body">
                <?php if(is_array($pic2)): foreach($pic2 as $key=>$vo): ?><a target="_blank" href="index.php?c=detail&id=<?php echo ($vo["news_id"]); ?>">
                    <h><?php echo ($vo["title"]); ?></h>
                    </a>
                    <br /><?php endforeach; endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- 四模块 -->


<!-- 公事文件下载区 -->
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                公事文件下载区
            </h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>文件序号</th>
                    <th>文件标题</th>
                    <th>发布时间</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($download)): foreach($download as $key=>$vo): ?><tr>
                        <td>1</td>
                        <td>tgw</td>
                        <td>time</td>
                    </tr><?php endforeach; endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- 公事文件下载区 -->


<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                友情链接
            </h3>
        </div>
        <div class="panel-body">

        </div>
    </div>
</div>



<!-- 网页最下面 -->
<footer>
    <p class="text-center"><a href="#">网站首页</a>  |  <a href="#">意见反馈</a>  |  <a href="#">网站地图</a>  |  <a href="#">RSS订阅</a>  |  <a href="#">匿名投稿</a></p>
    <p class="text-center">版权所有：共青团暨南大学珠海校区工作委员会</p>
    <p class="text-center">网站维护：暨南人网络联盟&nbsp;&nbsp;&nbsp;版面开发：黄定权&nbsp;&nbsp;陈棋轩</p>
</footer>
<!-- 网页最下面 -->


</body>
<script src="Public/js/admin/common.js"></script>



</body>

</html>