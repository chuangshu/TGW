<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index($type = ''){
        //获取导航栏数据
        $nav = D("Menu")->getBarMenus();
        $this->assign('nav',$nav);

        //获取图片轮播数据
        $carousel = D("PositionContent")->select(array('status'=>1 , 'position_id'=>8),4);
        $this->assign('carousel',$carousel);

        //获取最新信息
        $latest = D("PositionContent")->select(array('status'=>1 , 'position_id'=>7),8);
        $this->assign('latest',$latest);

        //获取图文信息
        $pic = D("PositionContent")->select(array('status'=>1 , 'position_id'=>6),9);
        $this->assign('pic',$pic);
        //print_r($pic);exit;

        //获取新闻中心
        $news = D("PositionContent")->select(array('status'=>1 , 'position_id'=>5),8);
        $this->assign('news',$news);

        //获取组织建设
        $construct = D("PositionContent")->select(array('status'=>1 , 'position_id'=>4),8);
        $this->assign('construct',$construct);

        //获取人物专访
        $interview = D("PositionContent")->select(array('status'=>1 , 'position_id'=>3),8);
        $this->assign('interview',$interview);

        //获取图片专区
        $pic2 = D("PositionContent")->select(array('status'=>1 , 'position_id'=>2),8);
        $this->assign('pic2',$pic2);











        /*
        //获取排行
        $rankNews = D("Index")->getRank();
        //获取首页大图数据
        $topPicNews = D("PositionContent")->select(array('status'=>1 , 'position_id' =>4 ) , 1);
        //print_r($topPicNews);
        //首页3小图推荐
        $topSmallNews = D("PositionContent")->select(array('status'=>1 , 'position_id' =>5 ) , 3);
        //新闻
        $listNews = D("News")->select(array('status' => 1 , 'thumb' => array('neq' ,'')) , 30);
        //print_r($listNews);exit;
        //print_r($listNews);exit;
        //广告位
        $advNews = D("PositionContent")->select(array('status' => 1 , 'position_id' => 6) , 2);



        $this->assign('result' , array(
            'topPicNews' => $topPicNews,
            'topSmallNews' => $topSmallNews,
            'listNews' => $listNews,
            'advNews' =>$advNews,
            'rankNews' => $rankNews,
            'catId' => 0,

        ));
        //生成页面静态化
         
        if($type == 'buildHtml') {
            $this->buildhtml('index',HTML_PATH,'Index/index');
        }else{
            $this->display();
        }*/
    $this->display();
    }

    public function error($message = '') {
        $message = $message ? $message : '系统发生错误';
        $this->assign('message',$message);
        $this->display("Index/error");
    }

    public function build_html () {
        $this->index('buildHtml');
        return show(1,'首页缓存生成成功');
    }

    public function crontab_build_html() {
        if(APP_CRONTAB != 1) {
            die("the_file_must_exec_crontab");
        }
        $result = D("Basic")->select();
        if(!$result['cacheindex']) {
            die('系统没有设置开启自动生成首页缓存的内容');
        }
        $this->index('buildHtml');
    }

}