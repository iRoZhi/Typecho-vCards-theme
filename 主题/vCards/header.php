<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js" lang="zh-CN">

<head>
	<meta charset="<?php $this->options->charset(); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="renderer" content="webkit">
	<meta name="HandheldFriendly" content="true">

	<!-- QQCard BEGIN -->
	<meta itemprop="name" content="若志随笔" />
	<meta itemprop="image" content="https://q1.qlogo.cn/g?b=qq&nk=80360650&s=640" />
	<meta name="description" itemprop="description" content="一个若志的自留地" />
	<!-- QQCard END -->


	<title>
		<?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?>
		<?php $this->options->title(); ?>
	</title>
	<link rel="shortcut icon" href="<?php $this->options->themeUrl('assets/img/favicon.svg'); ?>" type="image/png">

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/styles/style.css'); ?>" />
	<!--网站字体-->
	<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/fonts/fonts.css'); ?>">
	<!-- dark   <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/styles/style-dark.css'); ?>" />-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/css/mdui.min.css"
		integrity="sha384-cLRrMq39HOZdvE0j6yBojO4+1PrHfB7a9l5qLcmRm/fiWXYY+CndJPmyu5FV/9Tw" crossorigin="anonymous" />
<link rel='stylesheet' href='https://unpkg.com/nprogress@0.2.0/nprogress.css'/>
		<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/owo/OwO.min.css'); ?>">
	<!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->



	<!-- 通过自有函数输出HTML头部信息 -->
	<?php $this->header(); ?>
</head>

<body>
	<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
	<![endif]-->
	<div class="scroll-line" style="width: 0%;"></div>

	<?php if ($this->options->headTitle && $this->options->headStatus && $this->options->logoUrl && $this->options->headbgImgUrl && $this->options->hdAboutUrl): ?>
	<div class="preloader" style="/* visibility: hidden; */">
	<div class="preloader-content">	
		<div class="pre-c" style="position: fixed;bottom: 5rem;padding: 2rem;width:100%">
			<img src="<?php $this->options->logoUrl() ?>">
			<span class="txt-item" style="position: fixed;padding: 1rem;left: 7rem;text-align: left;">
				<p style="margin-left: 1rem;"><?php $this->options->headTitle() ?></p>
				<hr style="margin: 10px;background: #969696;width: 15rem;">
				<p style="margin-left: 1rem;color: #fdfdfd73;font-size: 0.5rem; letter-spacing: 0.5rem;"><?php $this->options->headStatus() ?></p>
			</span>
		</div>
		<div class="pre-b" style="position: fixed;bottom: 0rem;padding: 1rem;width: 100%;">
			<span class="txt-item" style="">
				<p style="margin-left: 1rem;color: rgb(255 255 255 / 65%);"> 进入博客 ></p>
			</span>
		</div>
	</div>
</div>



	<main class="main">
		<!-- Header Image -->
		<div class="header-image">
			<div class="js-parallax"
				style="background-image: url(<?php $this->options->headbgImgUrl() ?>);"></div>
		</div>

		<div class="container gutter-top">
			<!-- Header -->
			<header class="header box" style=" box-shadow: 0px 0px 40px rgb(255 255 255 / 50%);">
				<div class="header__left">
					<a href="<?php $this->options->siteUrl(); ?><?php $this->options->hdAboutUrl() ?>">
						<div class="header__photo">
							<img class="header__photo-img" src="<?php $this->options->logoUrl() ?>"
								alt="<?php $this->options->headTitle() ?>">
						</div>
					</a>
					<div class="header__base-info">
						<h4 class="title titl--h4"><?php $this->options->headTitle() ?></h4>
						<div class="status"><?php $this->options->headStatus() ?></div>

						<?php endif; ?>
						<?php if ($this->options->hd_qq && $this->options->hd_email && $this->options->hd_github && $this->options->hd_weibo && $this->options->hd_coolapk && $this->options->hd_wx): ?>
						<ul class="header__social">
							<li><a class="mdui-btn mdui-btn-icon" mdui-tooltip="{content: 'QQ'}"
									href="<?php $this->options->hd_qq() ?>"><svg
										t="1611490702563" class="icon" viewBox="0 0 1024 1024" version="1.1"
										xmlns="http://www.w3.org/2000/svg" p-id="21452" width="20" height="20">
										<path
											d="M878.839923 489.557872c-29.743418-46.99943-42.632983-97.607038-50.350758-151.176095C800.417829 143.543254 608.344279 17.634636 422.355307 75.30101c-122.815163 38.07927-197.606567 123.735116-222.487234 250.495124-11.623735 59.217706-22.740934 116.999714-56.889685 169.790034-34.465976 53.279461-43.7402 115.842355-39.244816 179.300642 2.598174 36.664038 13.791098 70.054519 40.995693 97.232508 8.18338 8.17417 16.292058 21.673625 15.855106 32.385595C157.439752 881.734856 203.099674 922.55454 267.783883 945.100022c71.653947 24.974811 144.967696 23.877827 215.783555-5.913687 19.298532-8.120958 34.81083-11.057847 55.073316-1.221828 58.244542 28.272927 120.866788 28.719088 182.709275 17.476023 98.704023-17.943674 142.117788-71.040986 142.442176-169.583327 30.92329-22.388916 50.297546-53.78702 54.758138-93.076862C926.706093 620.973924 917.838122 551.180348 878.839923 489.557872zM838.798974 657.789411c-0.548492 18.203594-7.91425 36.201503-15.062044 66.660212-25.233708-21.372773-39.48734-33.44574-54.692646-46.325072-17.59882 26.982538-34.342156 52.651151-52.5304 80.537268 10.998495 6.033413 23.922852 10.174734 32.673144 18.636452 12.17632 11.773138 27.230178 25.605168 30.187533 40.685631 4.279467 21.827121-15.522532 34.543747-33.881668 42.757826-58.291614 26.081005-118.835526 28.999474-175.528736 0.451278-40.527019-20.407796-73.857125-21.776979-114.390283-0.441045-53.107545 27.950586-110.563118 24.686239-166.788677 4.916986-6.126534-2.15406-12.06785-5.220908-17.572214-8.691963-36.835953-23.222911-37.795814-52.718689-2.01796-76.576049 11.973706-7.984858 25.355481-13.856589 38.788421-21.067828-17.692964-27.946492-34.155914-53.952796-51.922557-82.016968-14.903431 12.717649-29.839609 25.463951-45.512566 38.838563-28.297486-21.744233-26.875091-48.762587-25.337061-74.009597 3.244904-53.263088 17.491373-103.337553 53.943586-144.310733 13.664208-15.358803 18.34788-31.764448 21.015639-52.398394 5.809309-44.936445 14.762215-89.923032 27.453259-133.423779 30.692023-105.216343 129.925095-174.186158 237.44183-168.359452 105.724926 5.728468 195.385992 82.576717 217.572294 187.953719 9.342786 44.37465 15.066137 89.524966 24.912389 133.771703 2.943029 13.225209 13.254885 25.369807 21.944801 36.657898C824.935222 548.074613 840.521199 600.542592 838.798974 657.789411z"
											p-id="21453" fill="#5e6e80"></path>
									</svg></a></li>
							<li><a class="mdui-btn mdui-btn-icon" mdui-tooltip="{content: 'Email'}"
									href="<?php $this->options->hd_email() ?>b"><svg
										t="1611490799030" class="icon" viewBox="0 0 1024 1024" version="1.1"
										xmlns="http://www.w3.org/2000/svg" p-id="34500" width="20" height="20">
										<path
											d="M128 128h768a42.666667 42.666667 0 0 1 42.666667 42.666667v682.666666a42.666667 42.666667 0 0 1-42.666667 42.666667H128a42.666667 42.666667 0 0 1-42.666667-42.666667V170.666667a42.666667 42.666667 0 0 1 42.666667-42.666667z m725.333333 180.821333l-338.261333 302.933334L170.666667 307.882667V810.666667h682.666666V308.821333zM192.469333 213.333333l322.133334 284.245334L832.085333 213.333333H192.469333z"
											p-id="34501" fill="#5e6e80"></path>
									</svg></a></li>
							<li><a class="mdui-btn mdui-btn-icon" mdui-tooltip="{content: 'Github'}"
									href="<?php $this->options->hd_github() ?>"><svg t="1611490630935" class="icon"
										viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"
										p-id="16031" width="20" height="20">
										<path
											d="M427.392 853.504a61.44 61.44 0 0 1-1.450667 15.530667 92.586667 92.586667 0 0 1-10.965333 27.605333c-15.061333 25.301333-40.661333 42.154667-73.642667 42.154667-77.653333 0-108.117333-38.101333-146.261333-133.504C169.216 740.693333 157.013333 725.461333 128 725.461333v-85.333333c77.653333 0 108.117333 38.101333 146.261333 133.504 25.856 64.597333 38.058667 79.786667 67.072 79.786667 0-12.373333-0.170667-23.296-0.512-38.144-0.853333-34.816-0.938667-41.941333 0.554667-51.2 0.64-20.352 5.888-34.773333 16.384-49.066667-95.232-20.736-159.445333-63.573333-196.309333-132.992l-13.824-32.426667C134.186667 510.848 128 467.072 128 416.426667c0-58.24 17.749333-110.336 50.944-153.856-10.368-41.386667-8.96-91.989333 13.909333-149.077334l7.466667-18.688 19.2-6.101333c2.56-0.853333 5.632-1.578667 9.301333-2.133333 37.290667-5.888 90.325333 8.106667 159.701334 52.48a565.930667 565.930667 0 0 1 127.274666-14.208c38.741333 0 77.226667 3.882667 114.048 11.605333 67.456-42.24 119.04-55.509333 155.306667-49.92 3.626667 0.597333 6.741333 1.322667 9.258667 2.133333l19.285333 6.101334 7.466667 18.773333c20.010667 50.218667 23.424 96.469333 16.128 136.96C875.434667 296.32 896 352.597333 896 416.512c0 53.888-3.84 94.378667-14.933333 133.802667l-11.733334 32.170666c-30.677333 69.333333-98.304 112.64-202.538666 133.248 10.837333 15.018667 15.872 30.250667 15.872 52.394667v42.666667l-0.042667 42.666666a13.013333 13.013333 0 0 0 0.341333 2.730667L682.666667 938.794667c-36.352 0-63.36-17.706667-76.672-45.653334a88.277333 88.277333 0 0 1-8.661334-40.277333v-84.736c0-3.584-0.128-3.797333-8.832-12.501333-23.296-23.296-33.834667-40.874667-33.834666-72.832v-38.613334l38.4-3.84c114.346667-11.52 176.512-43.221333 197.12-89.6l9.6-26.325333c7.68-27.562667 10.88-61.098667 10.88-107.946667 0-49.706667-17.365333-90.837333-50.218667-123.648L742.4 274.773333l7.381333-24.448c6.528-21.717333 8.106667-47.402667 1.152-76.714666a158.634667 158.634667 0 0 0-3.584 0.938666c-22.826667 6.4-51.370667 20.053333-85.76 43.008l-15.658666 10.453334-18.304-4.522667a467.754667 467.754667 0 0 0-111.829334-13.269333c-42.709333 0-84.906667 5.418667-123.946666 16.042666l-19.029334 5.205334-16.256-11.136c-35.541333-24.32-65.109333-38.826667-88.746666-45.568a158.293333 158.293333 0 0 0-4.864-1.28c-8.234667 33.92-4.992 61.781333 3.413333 82.688l9.984 25.088-18.346667 19.797333C228.693333 332.629333 213.333333 370.986667 213.333333 416.512c0 41.685333 4.864 76.202667 13.824 102.229333l11.178667 26.453334c27.904 52.352 87.168 83.84 192.853333 95.146666l38.144 4.096v38.357334c0 32-10.538667 49.536-33.834666 72.832-8.704 8.704-8.832 8.96-8.832 12.501333l-0.725334 7.893333c-0.512 2.56-0.512 9.258667 0.170667 37.205334 0.298667 12.8 0.469333 22.997333 0.554667 33.621333a33.962667 33.962667 0 0 1 0.725333 6.656z"
											p-id="16032" fill="#5e6e80"></path>
									</svg></a></li>
							<li><a class="mdui-btn mdui-btn-icon" mdui-tooltip="{content: 'Weibo'}"
									href="<?php $this->options->hd_weibo() ?>"><svg t="1611490587543" class="icon"
										viewBox="0 0 1193 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"
										p-id="14605" width="20" height="20">
										<path
											d="M456.991736 557.336482c-107.598583 0-194.644628 74.956316-194.644629 166.838252s87.046045 166.838253 194.644629 166.838253c107.598583 0 194.644628-74.956316 194.644628-166.838253s-87.046045-166.838253-194.644628-166.838252zM391.707202 822.101535c-36.269185 0-66.493506-27.806375-66.493507-62.866588s29.015348-62.866588 66.493507-62.866588c36.269185 0 66.493506 27.806375 66.493506 62.866588S427.976387 822.101535 391.707202 822.101535z m93.090909-91.881936c-14.507674 0-26.597403-12.089728-26.597403-26.597403s12.089728-26.597403 26.597403-26.597403 26.597403 12.089728 26.597403 26.597403-12.089728 26.597403-26.597403 26.597403zM239.376623 281.690673C97.9268 394.125148-18.134593 600.859504 30.224321 661.308146c32.642267 41.105077 59.239669-19.343566 124.524203-89.46399 30.224321-32.642267 77.374262-54.403778 122.106258-90.672964 20.552538-16.92562 197.062574-35.060213 230.913813-35.060212 97.9268-99.135773 114.85242-207.943329 74.956316-258.720189-48.358914-59.239669-201.898465-16.92562-343.348288 94.299882z"
											fill="#5e6e80" p-id="14606"></path>
										<path
											d="M808.802834 560.9634C906.729634 461.827627 911.565525 377.199528 870.460449 326.422668c-47.149941-60.448642-211.570248-32.642267-351.811098 78.583235"
											fill="#5e6e80" p-id="14607"></path>
										<path
											d="M605.695396 353.020071c-14.507674 8.46281-25.38843 12.089728-29.015349 7.253837-1.208973-2.417946-1.208973-6.044864 1.208973-9.671783-16.92562-1.208973-33.85124-1.208973-50.776859-1.208973C235.749705 349.393152 0 500.514758 0 686.696576s235.749705 337.303424 527.112161 337.303424 527.112161-151.121606 527.11216-337.303424c0-170.465171-194.644628-309.497048-448.528925-333.676505zM481.171192 959.924439C275.645809 959.924439 108.807556 847.489965 108.807556 708.458087s166.838253-251.466352 372.363636-251.466351 372.363636 112.434475 372.363637 251.466351-166.838253 251.466352-372.363637 251.466352z"
											fill="#5e6e80" p-id="14608"></path>
										<path
											d="M1021.582054 423.140496c-3.626919 0-6.044864 0-9.671782-1.208973-18.134593-4.835891-29.015348-24.179457-22.970485-42.31405 2.417946-7.253837 3.626919-16.92562 3.626919-29.015348 0-65.284534-53.194805-119.688312-119.688312-119.688312-19.343566 0-33.85124-15.716647-33.851239-33.851239s15.716647-33.85124 33.851239-33.85124c103.971665 0 187.390791 84.628099 187.390791 187.390791 0 18.134593-2.417946 33.85124-6.044864 48.358914-4.835891 14.507674-18.134593 24.179457-32.642267 24.179457z"
											fill="#5e6e80" p-id="14609"></path>
										<path
											d="M1146.106257 473.917355c-2.417946 0-6.044864 0-8.46281-1.208972-20.552538-4.835891-32.642267-25.38843-27.806375-45.940969 6.044864-24.179457 8.46281-47.149941 8.46281-71.329397C1118.299882 201.898465 991.357733 74.956316 836.609209 74.956316c-20.552538 0-37.478158-16.92562-37.478158-37.478158S816.056671 0 836.609209 0c197.062574 0 356.646989 159.584416 356.646989 356.646989 0 29.015348-3.626919 59.239669-10.880755 88.255018-3.626919 18.134593-19.343566 29.015348-36.269186 29.015348z"
											fill="#5e6e80" p-id="14610"></path>
									</svg></a></li>
							<li><a class="mdui-btn mdui-btn-icon" mdui-tooltip="{content: '酷安'}"
									href="<?php $this->options->hd_coolapk() ?>"><svg version="1.1" id="Layer_1"
										xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20"
										enable-background="new 0 0 20 20" xml:space="preserve">
										<image id="image0" width="20" height="20" x="0" y="0" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUBAMAAAB/pwA+AAAABGdBTUEAALGPC/xhBQAAACBjSFJN
					AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAGFBMVEX///9eboD////B69f9
					//7q9/H3/Pqq4MZzTX7kAAAAAXRSTlMAQObYZgAAAAFiS0dEAIgFHUgAAAAHdElNRQflARkCIwFQ
					BoKtAAAAXklEQVQI123Pyw3AIAwD0LABzqH3WOoAXaEbdf9LTfiISs2Fp8gCY2ZWgGo50nCqG2M+
					LJNVdF7wRoA3wZaAh/aMpBaOxZOcgfAkeOjUIi97lIm6P/HfYS+5VV8fegFeOQyReMHYnwAAACV0
					RVh0ZGF0ZTpjcmVhdGUAMjAyMS0wMS0yNFQxODozNTowMSswODowMBdf4i8AAAAldEVYdGRhdGU6
					bW9kaWZ5ADIwMjEtMDEtMjRUMTg6MzU6MDErMDg6MDBmAlqTAAAAIHRFWHRzb2Z0d2FyZQBodHRw
					czovL2ltYWdlbWFnaWNrLm9yZ7zPHZ0AAAAYdEVYdFRodW1iOjpEb2N1bWVudDo6UGFnZXMAMaf/
					uy8AAAAXdEVYdFRodW1iOjpJbWFnZTo6SGVpZ2h0ADIw3+GomQAAABZ0RVh0VGh1bWI6OkltYWdl
					OjpXaWR0aAAyMCdOaBQAAAAZdEVYdFRodW1iOjpNaW1ldHlwZQBpbWFnZS9wbmc/slZOAAAAF3RF
					WHRUaHVtYjo6TVRpbWUAMTYxMTQ4NDUwMT2dGLQAAAARdEVYdFRodW1iOjpTaXplADMwOEJC9x7V
					bAAAAEZ0RVh0VGh1bWI6OlVSSQBmaWxlOi8vL2FwcC90bXAvaW1hZ2VsYy9pbWd2aWV3Ml85XzE2
					MDk5MDM1MzIwMTI5ODMxXzEzX1swXdL8K2cAAAAASUVORK5CYII="></image>
									</svg>
								</a></li>
							<li><a class="mdui-btn mdui-btn-icon" mdui-tooltip="{content: 'WeChat'}"
									href="<?php $this->options->hd_wx() ?>"><svg
										t="1611490496142" class="icon" viewBox="0 0 1024 1024" version="1.1"
										xmlns="http://www.w3.org/2000/svg" p-id="13085" width="20" height="20">
										<path
											d="M664.250054 368.541681c10.015098 0 19.892049 0.732687 29.67281 1.795902-26.647917-122.810047-159.358451-214.077703-310.826188-214.077703-169.353083 0-308.085774 114.232694-308.085774 259.274068 0 83.708494 46.165436 152.460344 123.281791 205.78483l-30.80868 91.730191 107.688651-53.455469c38.558178 7.53665 69.459978 15.308661 107.924012 15.308661 9.66308 0 19.230993-0.470721 28.752858-1.225921-6.025227-20.36584-9.521864-41.723264-9.521864-63.862493C402.328693 476.632491 517.908058 368.541681 664.250054 368.541681zM498.62897 285.87389c23.200398 0 38.557154 15.120372 38.557154 38.061874 0 22.846334-15.356756 38.156018-38.557154 38.156018-23.107277 0-46.260603-15.309684-46.260603-38.156018C452.368366 300.994262 475.522716 285.87389 498.62897 285.87389zM283.016307 362.090758c-23.107277 0-46.402843-15.309684-46.402843-38.156018 0-22.941502 23.295566-38.061874 46.402843-38.061874 23.081695 0 38.46301 15.120372 38.46301 38.061874C321.479317 346.782098 306.098002 362.090758 283.016307 362.090758zM945.448458 606.151333c0-121.888048-123.258255-221.236753-261.683954-221.236753-146.57838 0-262.015505 99.348706-262.015505 221.236753 0 122.06508 115.437126 221.200938 262.015505 221.200938 30.66644 0 61.617359-7.609305 92.423993-15.262612l84.513836 45.786813-23.178909-76.17082C899.379213 735.776599 945.448458 674.90216 945.448458 606.151333zM598.803483 567.994292c-15.332197 0-30.807656-15.096836-30.807656-30.501688 0-15.190981 15.47546-30.477129 30.807656-30.477129 23.295566 0 38.558178 15.286148 38.558178 30.477129C637.361661 552.897456 622.099049 567.994292 598.803483 567.994292zM768.25071 567.994292c-15.213493 0-30.594809-15.096836-30.594809-30.501688 0-15.190981 15.381315-30.477129 30.594809-30.477129 23.107277 0 38.558178 15.286148 38.558178 30.477129C806.808888 552.897456 791.357987 567.994292 768.25071 567.994292z"
											p-id="13086" fill="#5e6e80"></path>
									</svg></a></li>
						</ul>
					</div>
				</div>
				<?php endif; ?>
				
				<?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
				<div class="header__right">
					<ul class="header__contact">
						<li><span class="overhead">文章</span>
							<?php $stat->publishedPostsNum() ?>篇
						</li>
						<li><span class="overhead">评论</span>
							<?php $stat->publishedCommentsNum() ?>条
						</li>
					</ul>
					<ul class="header__contact">
						<li><span class="overhead">分类</span>
							<?php $stat->categoriesNum() ?>个
						</li>
						<li><span class="overhead">标签</span>
							<?php echo tagsNum(); ?>个
						</li>
					</ul>
				</div>

			</header>

			<div class="row sticky-parent">
