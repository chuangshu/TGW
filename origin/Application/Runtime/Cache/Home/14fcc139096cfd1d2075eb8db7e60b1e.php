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
            <div>
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">&nbsp;&nbsp;首页&nbsp;&nbsp;</a>
                </div>
                <ul class="nav navbar-nav">
                    <?php if(is_array($nav)): foreach($nav as $key=>$vo): ?><li <?php if($vo['menu_id'] == $_GET['id']): ?>class="active"<?php endif; ?>>
                        <a href="index.php?c=cat&id=<?php echo ($vo["menu_id"]); ?>"><?php echo ($vo["name"]); ?></a>
                        </li><?php endforeach; endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</div>

    



    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-9">

                    <div class="news-list">
                        <?php if(is_array($result['listNews'])): $i = 0; $__LIST__ = $result['listNews'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl>
                            <dt><?php echo ($vo["title"]); ?></dt>
                            <dd class="news-img">
                                <a target="_blank" href="index.php?c=detail&id=<?php echo ($vo["news_id"]); ?>"><img width="200" height="120" src="<?php echo ($vo["thumb"]); ?>" alt="<?php echo ($vo["title"]); ?>"></a>
                            </dd>
                            <dd class="news-intro">
                                <?php echo ($vo["description"]); ?>
                            </dd>
                            <dd class="news-info">
                                <?php echo ($vo["keywords"]); ?> <span><?php echo (date("Y-m-d H:i:s",$vo["create_time"])); ?></span>阅读
                            </dd>
                        </dl><?php endforeach; endif; else: echo "" ;endif; ?>
                        <nav>
                            <ul class="pagination">
                                <?php echo ($result["pageRes"]); ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>