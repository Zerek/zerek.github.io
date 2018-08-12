<?php
  if($_SESSION["token"] !== $_POST["token"]){

  }
  if(!empty($_POST["email"])){
    $email = $_POST["email"];
    echo "<h1>$email</h1>";
  }

  $token = bin2hex(random_bytes(32));

  $_SESSION["token"] = $token;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Zerek - Языковые переводы</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Zerek Company</a>
                <span class="navbar-brand pull-right">+77084252800</span>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">О нас</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Услуги</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#press">В новостях</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#statistics">Статистика</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Контакты</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Качественные языковые переводы</h1>
                <hr>
                <p>Мы переводим более чем на 60 языках мира вот уже 10 лет!</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Узнать больше</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">У нас есть то, что вам нужно!</h2>
                    <hr class="light">
                    <p class="text-faded">Качественный перевод с гарантией. Возможность отслеживать заказ. Заверение перевода. Доставка заказа. Онлайн оплата и POS-терминал. Бонусная карта.</p>
                    <a href="#" class="btn btn-default btn-xl" data-toggle="modal" data-target="#orderNow">Заказать сейчас</a>
                </div>
            </div>
        </div>
    </section>
		
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <form action="?" method="post">
              <input type="hidden" name="token" value="<?php echo $token; ?>">
              <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" id="name" name="name" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Почта</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="email@example.com" required>
              </div>
              <div class="form-group">
                <label for="phone">Телефон</label>
                <input type="tel" id="phone" name="phone" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="file">Файл для перевода</label>
                <input type="file" id="file" required>
                <p class="help-block">Файл не должен превышать 20мб. Если файл превышает напишите нам на почту. Мы найдем способ получить файл.</p>
              </div>
              <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Закажите у нас перевод и Вы забудете о поиске других алтернатив!</h2>
                <a href="mailto:info@zerek.kz" class="btn btn-default btn-xl wow tada">Заказать сейчас!</a>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Будем на связи!</h2>
                    <hr class="primary">
                    <p>У Вас все еще остались вопросы? Тогда свяжитесь с нами! Наши специалисты ответят на все Ваши интересующие вопросы.</p>
                </div>
                <div class="col-lg-3 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p><a href="tel:+7(727)9835398">+7 (727) 98-353-98</a></p>
                    <p><a href="tel:+7(727)3150457">+7 (727) 315-04-57</a></p>
                    <p><a href="tel:+7(701)7949576">+7 (701) 794-95-76</a></p>
					
                </div>
				<div class="col-lg-3 text-center">
                    <i class="fa fa-building-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p>пр. Сейфуллина, 498, 2-этаж, офис 201</p>
                </div>
                <div class="col-lg-3 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:info@zerek.kz">info@zerek.kz</a></p>
                </div>
            </div>
        </div>
    </section>
	<aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <a href="https://www.facebook.com/zerekgroup/" target="_blank" class="btn wow tada" style="color:#3B5998"><i class="fa fa-facebook fa-2x"></i></a>
				<!-- <a href="https://plus.google.com/b/100733991449261952153/100733991449261952153/about?gmbpt=true&hl=en" target="_blank" class="btn wow tada" style="color:#d34836"><i class="fa fa-google-plus fa-2x"></i></a> -->
				<a href="https://www.instagram.com/zerek.kz/" target="_blank" class="btn wow tada" style="color: #9b6954"><i class="fa fa-instagram fa-2x"></i></a>
				<!-- <a href="https://twitter.com/ztranslation" target="_blank" class="btn wow tada" style="color:#55acee"><i class="fa fa-twitter fa-2x"></i></a> -->
            </div>
        </div>
    </aside>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
