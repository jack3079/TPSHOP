<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title><?php echo ($system["sitename"]); ?>-<?php echo ($system["url"]); ?></title>
    <meta name="keywords" content="<?php echo ($system["keyword"]); ?>" />
    <meta name="description" content="<?php echo ($system["description"]); ?>" />
    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" /> 
    <meta content="telephone=no" name="format-detection" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    
    <!--css-->
    <link href="/tpshop/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/tpshop/Public/font-awesome/css/font-awesome.css?v=4.3.0" rel="stylesheet">
    <link href="/tpshop/Public/css/animate.css" rel="stylesheet">
    <link href="/tpshop/Public/css/style.css" rel="stylesheet">
        <!-- scripts -->
    <script src="/tpshop/Public/js/jquery-2.1.1.min.js"></script>
    <script src="/tpshop/Public/js/bootstrap.min.js"></script>

</head>

<body class="white-bg">



<div  id="wrapper">



<!--header-->    
    <div class="header">
    <div class="ibox-content">
        <div class="col-md-10 col-md-offset-1 m-t m-b">
            <p class="text-center">
            <?php if($system["logo"] == null): ?><img src="/tpshop/Public/img/logo.png">
            <?php else: ?>
            <img title="<?php echo ($system["sitename"]); ?>" src="/tpshop/Public/<?php echo ($system["logo"]); ?>"><?php endif; ?>
            </p>
            <form action="search" method="post" name="form">
                <div class="input-group">
                    <input type="text" name="q" placeholder="请输入产品关键词" class="input-sm form-control"> <span class="input-group-btn">
                    <span class="input-group-btn"><button type="submit" class="btn btn-sm btn-primary"> 查找产品</button> </span>
                </div>
            </form>
        </div>
    </div>
    </div>
    <div class="clearfix"></div>

<!--header end -->   
    
<!--AD-->  
<div class="side">
<div class="ibox-content">
    <div class="carousel slide" id="carousel1">
        <div class="carousel-inner" role="listbox">  
         <div class="item active">
                <img  class="img-preview" src="/tpshop/Public/<?php echo ($adimg["ad_img"]); ?>">  
        </div>          
        <?php if(is_array($ad)): $i = 0; $__LIST__ = $ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ad): $mod = ($i % 2 );++$i;?><div class="item ">
            <a href="<?php echo ($ad["ad_url"]); ?>" title="<?php echo ($ad["ad_name"]); ?>" target="_top">
                <img alt="<?php echo ($ad["ad_name"]); ?>" class="img-preview" src="/tpshop/Public/<?php echo ($ad["ad_img"]); ?>">
            </a>    
            </div><?php endforeach; endif; else: echo "" ;endif; ?> 

        </div>
        <a data-slide="prev" href="#carousel1" class="left carousel-control">
            <span class="icon-prev"></span>
        </a>
        <a data-slide="next" href="#carousel1" class="right carousel-control">
            <span class="icon-next"></span>
        </a>
    </div>
</div>
</div>
<div class="clearfix"></div>
<!--AD END-->    
   
<!--product-->
<div class="container">

<div class="row product-list">
  <div class="col-md-4">
      <section class="panel">
          <div class="pro-img-box">
              <img src="/tpshop/Public/img/3.jpg" alt=""/>
              <a href="#" class="adtocart">
                  <i class="glyphicon glyphicon-shopping-cart"></i>
              </a>
          </div>

          <div class="panel-body text-center">
              <h4>
                  <a href="#" class="pro-title">
                      产品名称
                  </a>
              </h4>
              <p class="price">300.00</p>
          </div>
      </section>
  </div>
  <div class="col-md-4">
      <section class="panel">
          <div class="pro-img-box">
              <img src="/tpshop/Public/img/3.jpg" alt=""/>
              <a href="#" class="adtocart">
                  <i class="glyphicon glyphicon-shopping-cart"></i>
              </a>
          </div>

          <div class="panel-body text-center">
              <h4>
                  <a href="#" class="pro-title">
                      产品名称
                  </a>
              </h4>
              <p class="price">$300.00</p>
          </div>
      </section>
  </div>
  <div class="col-md-4">
      <section class="panel">
          <div class="pro-img-box">
              <img class="" src="/tpshop/Public/img/3.jpg" alt=""/>
              <a href="#" class="adtocart">
                  <i class="glyphicon glyphicon-shopping-cart"></i>
              </a>
          </div>

          <div class="panel-body text-center">
              <h4>
                  <a href="#" class="pro-title">
                      产品名称
                  </a>
              </h4>
              <p class="price">$300.00</p>
          </div>
      </section>
  </div>

</div>
<!--product end-->
<div class="clearfix"></div>

<!-- about -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content">
                        <div class="row animated fadeInRight">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
      
                                    
                                    
                                    <div class="" id="ibox-content">

                                        <div id="vertical-timeline" class="vertical-container dark-timeline">
                                        
                                        <!--duanluo start-->
                                            <div class="vertical-timeline-block">
                                                <div class="vertical-timeline-icon navy-bg">
                                                    <i class="fa fa-home"></i>
                                                </div>

                                                <div class="vertical-timeline-content">
                                                    <h2>公司简介</h2>
                                                    <p>TPSHOP有限公司公司简介。。。。。。。。。。。
                                                    </p>
                                                    <a href="#" class="btn btn-sm btn-primary"> 更多信息</a>
                                                </div>
                                            </div>

                                            <div class="vertical-timeline-block">
                                                <div class="vertical-timeline-icon blue-bg">
                                                    <i class="glyphicon glyphicon-globe"></i>
                                                </div>

                                                <div class="vertical-timeline-content">
                                                    <h2>公司品牌</h2>
                                                    <p>品牌介绍。。。。。。。。。。。。</p>
                                                   <a href="#" class="btn btn-sm btn-primary"> 更多信息</a>
                                                </div>
                                            </div>

                                            <div class="vertical-timeline-block">
                                                <div class="vertical-timeline-icon lazur-bg">
                                                    <i class="fa fa-star"></i>
                                                </div>

                                                <div class="vertical-timeline-content">
                                                    <h2>公司荣誉</h2>
                                                    <p>公司荣誉介绍。。。。。。。。。。。。</p>
                                                    <a href="#" class="btn btn-sm btn-primary"> 更多信息</a>
                                                </div>
                                            </div>

                                            <div class="vertical-timeline-block">
                                                <div class="vertical-timeline-icon yellow-bg">
                                                    <i class="fa fa-phone"></i>
                                                </div>

                                                <div class="vertical-timeline-content">
                                                    <h2>联系我们</h2>
                                                    <?php if($system["tel"] != NULL): ?><p>公司电话：<?php echo ($system["tel"]); ?></p><?php endif; ?>
                                                    <?php if($system["fax"] != NULL): ?><p>公司传真：<?php echo ($system["fax"]); ?></p><?php endif; ?>
                                                    <?php if($system["email"] != NULL): ?><p>EMAIL：<?php echo ($system["emal"]); ?></p><?php endif; ?>
                                                    <?php if($system["contact"] != NULL): ?><p>联系人：<?php echo ($system["contact"]); ?></p><?php endif; ?>
                                                    <?php if($system["phone"] != NULL): ?><p>手机号码：<?php echo ($system["phone"]); ?></p><?php endif; ?>
                                                    <?php if($system["address"] != NULL): ?><p>公司地址：<?php echo ($system["address"]); ?></p><?php endif; ?>
                                                </div>
                                            </div>

                                            <!--duanluo-->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>  
<!--about end-->

</div>

</body>
</html>

<div class=" site-footer">
    <div class="text-center">
        <?php echo ($system ["icp"]); ?>
    </div>
    <div class="text-center">
        <?php echo ($system ["copyright"]); ?>
    </div>
</div>


<div id="nav">
	<ul class="list-group navlist">   	
        <li class="active"><a href="<?php echo U('Index/index');?>"><span class="glyphicon glyphicon-home"></span><p>首页</p></a></li>
		<li><a href="<?php echo U('Book/index');?>"><span class="glyphicon glyphicon-align-justify"></span><p>商品分类</p></a></li>
        <li id="n_3"><a href="<?php echo U('Shopcart/index');?>"><span class="glyphicon glyphicon-shopping-cart"></span><p>购物车</p></a>
        <?php if($cart_num): ?><b id="cart_num"><!--<?php echo ($cart_num); ?>-->1</b><?php endif; ?></li>
        <li><a href="<?php echo U('User/index');?>"><span class="glyphicon glyphicon-user"></span><p>会员中心</p></a><i></i></li>
    </ul>
</div>
<script>
$(window.onresize = function(){
	var width=window.outerWidth;
	if(width>=768){
		$("#nav").hide();
		}
	if(width<=769){
		$("#nav").show();
		}
	})
</script>


</body>
</html>