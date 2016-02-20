<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AppSocks - 科学上网您最好的选择</title>
    <link href="/appsocks/Public/pictures/logo.ico" rel="shortcut icon">
    <!-- Bootstrap 文件 -->
    <link rel="stylesheet" href="/appsocks/Public/css/bootstrap.min.css">
    <script src="/appsocks/Public/js/jquery.min.js"></script>
    <script src="/appsocks/Public/js/bootstrap.min.js"></script>
    <!-- 字体文件 -->
    <link rel="stylesheet" href="/appsocks/Public/css/typo.css">
    <!-- 自定义css文件 -->
    <link rel="stylesheet" href="/appsocks/Public/css/default.css">
    <link rel="stylesheet" href="/appsocks/Public/css/index.css">
</head>

<body>
    <div class="top-nav">
        <nav class="navbar navbar-fixed-top">
            <div class="brand"><span class="glyphicon glyphicon-send" aria-hidden="true"></span><a href="<?php echo U('Home/Index/index');?>">AppSocks</a>- <span>您的加速科学上网助手</span></div>
            <div class="nav-list">
                <ul>
                    <li><a  href="/appsocks/index.php/Home/Index/menu">套餐订购</a></li>
                    <li><a href="/appsocks/index.php/Home/Help/download">客户端下载</a></li>
                    <li><a href="/appsocks/index.php/Home/Help/method">使用教程</a></li>
                    <li><a href="/appsocks/index.php/Home/Help/support">技术支持</a></li>
                    <li><?php echo session('?uid') ? ('<a href="/appsocks/index.php/Home/User/dashboard">'.session('nickname').'</a>') : '<a href="/appsocks/index.php/Home/Public/login">用户登录</a>'; ?></li>
                    <li><?php echo session('?uid') ? '<a href="/appsocks/index.php/Public/logout">退出</a>' : '<a href="/appsocks/index.php/Home/Public/registe">用户注册</a>'; ?></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="play">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="/appsocks/Public/pictures/play01.jpg" alt="...">
                    <div class="carousel-caption">
                        快速-直达
                    </div>
                </div>
                <div class="item">
                    <img src="/appsocks/Public/pictures/play02.jpg" alt="...">
                    <div class="carousel-caption">
                        体验-美好
                    </div>
                </div>
                <div class="item">
                    <img src="/appsocks/Public/pictures/play03.png" alt="...">
                    <div class="carousel-caption">
                        技术-专业
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="main">
        <div class="feature container">
            <div class="row">
            	<p class="text-center title">优越特性</p>
                <div class="col-md-3 col-xs-6">
                	<img src="/appsocks/Public/pictures/27114-200.png" class="img-thumbnail center-block" alt="around the world">
                	<p class="notice text-center">让你畅游世界网络的海洋</p>
                </div>
                <div class="col-md-3 col-xs-6">
                	<img src="/appsocks/Public/pictures/284718-200.png" class="img-thumbnail center-block" alt="around the world">
                	<p class="notice text-center">安全上网防止隐私泄露</p></div>
                <div class="col-md-3 col-xs-6">
                	<img src="/appsocks/Public/pictures/35633-200.png" class="img-thumbnail center-block" alt="around the world">
                	<p class="notice text-center">拒绝等待，世界触手可得</p>
                </div>
                <div class="col-md-3 col-xs-6">
                	<img src="/appsocks/Public/pictures/26909-200.png" class="img-thumbnail center-block" alt="around the world">
	                <p class="notice text-center">和海外好友一起po图没有阻隔</p>
                </div>
            </div>
        </div>
        <div class="customer container">
	        <div class="row">
	        	<p class="text-center title">目标用户</p>
	        	<div class="col-md-3 col-xs-6">
	                	<img src="/appsocks/Public/pictures/avatar01.jpg" class="img-circle center-block" alt="around the world">
		                <p class="notice">学生党。海外完善丰富的论文资料是最理想的来源，Google 学术准确快捷，不再浪费时间和精力在杂乱无章的搜索中。</p>
	            </div>
	            <div class="col-md-3 col-xs-6">
	                	<img src="/appsocks/Public/pictures/avatar02.jpg" class="img-circle center-block" alt="around the world">
		                <p class="notice">在亚马逊、易贝、樂天市场、健安喜、百思买、诺德斯特龙、丝芙兰、6PM、Drugstore、Diapers 等网站上快捷购物。</p>
	            </div>
	            <div class="col-md-3 col-xs-6">
	                	<img src="/appsocks/Public/pictures/avatar03.jpg" class="img-circle center-block" alt="around the world">
		                <p class="notice">需要和在海外的家人经常联系，国际电话不切实际，最方便莫过于网络了。绕过互联网服务提供商和国家技术手段的无限制畅聊。</p>
	            </div>
	            <div class="col-md-3 col-xs-6">
	                	<img src="/appsocks/Public/pictures/avatar04.jpg" class="img-circle center-block" alt="around the world">
		                <p class="notice">交友控。在手机上使用WhatsApp、LINE、Skype、脸书和推特，轻松交友没有烦恼。IPAD、PC、MAC均可连接。</p>
	            </div>
            </div>
        </div>
    </div>
    <div class="footer">
		<p class="text-center">Copyright © 2016 <a href="http://appsocks.net">AppSocks.net</a>  All Rights Reserved. AppSocks 版权所有</p>
    </div>
</body>

</html>