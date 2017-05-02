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

    



<?php
$vo = $result['news']; ?>
<section>
    <div class="container">
        <div class="row">
            <div>
                <div class="news-detail">
                    <h1><?php echo ($vo["title"]); ?></h1>
                    <br />
                    <?php echo ($vo["content"]); ?>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<script src="public/js/jquery.js"></script>
</html>