<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700|Merriweather:400italic,400' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="{{ URL::asset('/css/reset.css') }}"> <!-- CSS reset -->
	<link rel="stylesheet" href="{{ URL::asset('/css/style-sliding.css') }}"> <!-- Resource style -->
	<script src="{{ URL::asset('/js/modernizr.js') }}"></script> <!-- Modernizr -->
  	
	<title>櫟舍文學餐廳</title>
	
<style>
	body{
		background-color: #292b2c;
	}

	.about-us{
		
	}

	.my-footer-col {
        text-align: center;
        font-size:20px;
    }

    .my-footer-col-title {
        font-size: 30px; 
        font-weight:bold; 
		margin:10px;
		color:white;
    }

    .my-footer-col-li {
		margin: 7px;
		color:white;
	}

	.my-footer-col-li > a {
		
		color:white;
		font-size:20px;
		padding:0px;
	}
	
	.my-footer-col-li > a:hover {
		background-color:white;
    }
</style>
</head>
<body>
	<a class="cd-nav-trigger cd-text-replace" href="#primary-nav">Menu<span aria-hidden="true" class="cd-icon"></span></a>
	
	<div class="cd-projects-container">
		<ul class="cd-projects-previews">
			<li>
				<a href="#0">
					<div class="cd-project-title">
						<h2>活動</h2>
						<p>Brief description of the project here</p>
					</div>
				</a>
			</li>

			<li>
				<a href="#0">
					<div class="cd-project-title">
						<h2>菜單</h2>
						<p>Brief description of the project here</p>
					</div>
				</a>
			</li>
			
			<li>
				<a href="#0">
					<div class="cd-project-title">
						<h2>作者</h2>
						<p>Brief description of the project here</p>
					</div>
				</a>
			</li>
			
			<li>
				<a href="#0">
					<div class="cd-project-title">
						<h2>位置</h2>
						<p>Brief description of the project here</p>
					</div>
				</a>
			</li>
		</ul> <!-- .cd-projects-previews -->

		<ul class="cd-projects">
			<li>
				<div class="preview-image">
					<div class="cd-project-title">
						<h2>活動</h2>
						<p>Brief description of the project here</p>
					</div> 
				</div>

				<div class="cd-project-info">
				@include('activity')					
				</div> <!-- .cd-project-info -->
			</li>

			<li>
				<div class="preview-image">
					<div class="cd-project-title">
						<h2>菜單</h2>
						<p>Brief description of the project here</p>
					</div> 
				</div>

				<div class="cd-project-info">
				@include('Menu')
				</div> <!-- .cd-project-info -->
			</li>

			<li>
				<div class="preview-image">
					<div class="cd-project-title">
						<h2>作者</h2>
						<p>Brief description of the project here</p>
					</div> 
				</div>

				<div class="cd-project-info">
					@include('Author')
				</div> <!-- .cd-project-info -->
			</li>

			<li>
				<div class="preview-image">
					<div class="cd-project-title">
						<h2>位置</h2>
						<p>Brief description of the project here</p>
					</div> 
				</div>

				<div class="cd-project-info">
					@include('location')
				</div> <!-- .cd-project-info -->
			</li>
		</ul> <!-- .cd-projects -->

		<button class="scroll cd-text-replace">Scroll</button>
	</div> <!-- .cd-project-container -->

	<nav class="cd-primary-nav" id="primary-nav">
		<ul>
			<li class="cd-label">about us</li>
			<!--
			<li><a href="#0">The team</a></li>
			<li><a href="#0">Our services</a></li>
			<li><a href="#0">Our projects</a></li>
			<li><a href="#0">Contact us</a></li>
			-->
			<div class="container">
                <div class="row">
                    <div class="footer-col col-md-4 my-footer-col">
                        <ul>    
                            <li class="my-footer-col-title">聯絡我們</li>
                            <li class="my-footer-col-li">櫟舍文學餐廳 Rekisha</li>
                            <li class="my-footer-col-li">地址 台中市西區自立街6號</li>
                            <li class="my-footer-col-li">電話 (04)3704-6848</li>
                            <li class="my-footer-col-li"><a href="https://www.facebook.com/Rekisha06/">Facebook 粉絲專頁</a></li>
                            <li class="my-footer-col-li"><a href="#">意見回饋</a></li>
                            <li class="my-footer-col-li"><a href="http://www.pu.edu.tw/">Located in【 靜宜大學 】</a></li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4 my-footer-col">
                        <ul>   
                            <li class="my-footer-col-title">網路創新服務設計</li>
                            <li class="my-footer-col-li">鍾韻茹</li>
                            <li class="my-footer-col-li">吳怡蓉</li>
                            <li class="my-footer-col-li">蔡妙欣</li>
                            <li class="my-footer-col-li">金正言</li>
                    </div>
                    <div class="footer-col col-md-4 my-footer-col">
                        <ul>    
                            <li class="my-footer-col-title">城市意象與行銷企劃</li>
                            <li class="my-footer-col-li">尤姿雅</li>
                            <li class="my-footer-col-li">李佳婍</li>
                            <li class="my-footer-col-li">黃佑歆</li>
                    </div>
                </div>
            </div>
		</ul>
	</nav> <!-- .cd-primary-nav -->

    
<script src="{{ URL::asset('/js/jquery-2.1.1.js') }}"></script>
<script src="{{ URL::asset('/js/main-sliding.js') }}"></script> <!-- Resource jQuery -->
</body>
</html>