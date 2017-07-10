<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

Bitrix\Main\Localization\Loc::loadMessages(__FILE__); // Для локализации
$assetInstance = Bitrix\Main\Page\Asset::getInstance(); // Для подключения js/css/string

$assetInstance->addCss(SITE_TEMPLATE_PATH.'/css/bootstrap.css');
$assetInstance->addCss(SITE_TEMPLATE_PATH.'/css/bootstrap-reboot.css');
$assetInstance->addCss(SITE_TEMPLATE_PATH.'/css/bootstrap-grid.css');

$assetInstance->addString('<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>');
$assetInstance->addString('<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>');
$assetInstance->addString('<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>');
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
	<head>
		<!-- Required meta tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<title><?$APPLICATION->ShowTitle();?></title>
		<?$APPLICATION->ShowHead();?>
	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-9 col-lg-9 col-xl-12">
					<nav class="navbar navbar-toggleable-md fixed-top bg-faded navbar-light">
						<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<a class="navbar-logo" href="index.html">Лада Щербакова</a>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav m-auto">
								<li class="nav-item">
									<a class="nav-link active" href="index.html">Обо мне <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="services.html">Услуги</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="trainings.html">Тренинги</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="portfolio.html">Портфолио</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="blog.html">Блог</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="gallery.html">Фотоархив</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="contacts.html">Контакты и цены</a>
								</li>
							</ul>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 ml-0 pl-0">
							<span class="navbar-text">+7(903) 726-62-69</span>
							<a class="navbar-brand" href="https://www.facebook.com/lada.shcherbakova" target="_blank"><img src="img/facebook.png"></a>
							<a class="navbar-brand" href="mailto:ladapr01@gmail.com"><img src="img/email.png"></a>  
						</div>
					</nav>
				</div>
			</div>
		</div>
		
		<div class="container-fluid mtn-5">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselIndicators" data-slide-to="1"></li>
							<li data-target="#carouselIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<img class="d-block" src="img/slide3.jpg" alt="Разработка коммуникационной платформы">
								<div class="carousel-caption d-sm-inline-block">
									<p class="col-sm-4">Разработка коммуникационной платформы</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block" src="img/slide4.jpg" alt="Разработка коммуникационной платформы">
								<div class="carousel-caption d-sm-inline-block">
									<p class="col-sm-4">Разработка коммуникационной платформы</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block" src="img/slide5.jpg" alt="Разработка коммуникационной платформы">
								<div class="carousel-caption d-sm-block">
									<p class="col-sm-4">Разработка коммуникационной платформы</p>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Назад</span>
						</a>
						<a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Вперед</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	
						