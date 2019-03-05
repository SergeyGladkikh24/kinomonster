<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="КиноМонстр-кинотеатр прямо у Вас дома">
    <meta name="keywords" content="фильмы,сериалы,рейтинг фильмов,новости кино" />

  
    <title><?php echo $title; ?></title>
    
     <link href="/assets/img/Windows-Movie-Maker-icon.png" rel="shortcut icon" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
    <link href="/assets/css/style.css" rel="stylesheet">


   <!--  Fonts
 -->
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Knewave|Lobster|Pacifico" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Chela+One|Chonburi" rel="stylesheet">


  </head>
  <body>

    <header class="header">

      <div class="container-fluid">

        <div class="row">

          <nav role="navigation" class="navbar navbar-inverse">

            <div class="col-lg-6 col-md-5 col-sm-12">

            <a class = "icon" href="/"></a>
             <h1><a href="/">КиноМонстр</a></h1> 
              <p>Кино - наша страсть!</p>

            </div>

            <div class="col-lg-6 col-md-7 col-sm-12">

              <div class="navbar-header">

                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
              
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>

                </button>

              </div>

              <div id="navbarCollapse" class="collapse navbar-collapse navbar-right">
                          
                <ul class="nav nav-pills">
                  <li <?php echo show_active_menu(0,0); ?>> <a href="/">Главная</a> </li>
                  <li <?php echo show_active_menu('films', $category); ?>> <a href="/movies/type/films">Фильмы</a> </li>
                  <li <?php echo show_active_menu('serials', $category); ?>> <a href="/movies/type/serials">Сериалы</a> </li>
                  <li <?php echo show_active_menu('rating', 0); ?>> <a href="/rating">Рейтинг фильмов</a> </li>
                  <li <?php echo show_active_menu('contact', 0); ?>> <a href="/contact">Контакты</a> </li>

                </ul>

              </div>

            </div>

          </nav>

        </div>

      </div>

    </header>

    <div class="wrapper">
      
      <div class="container">
        
        <div class="row">
          
        <div class="col-lg-9 col-lg-push-3"> <!-- Меняем блоки местами col-lg-push-3 -->

          <form role="search" action="/search/" method="get" class="visible-xs">
            <div class="form-group">
              <div class="input-group">
                <input type="search" name="q_search" class="form-control input-lg" placeholder="Ваш запрос">
                <div class="input-group-btn">
                  <button class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
              </div>
            </div>
          </form> 
          