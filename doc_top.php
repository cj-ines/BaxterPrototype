
<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootsrap/assets/js/docs.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="bootsrap/assets/ico/favicon.ico">

    <title>Baxter</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">

    .bio-title {
      font-size: 13pt;
      font-family: "Calibri";
    }

    .navbar {
       font-family: "Arial Narrow";
       font-size: 15pt;
    }
    .bio-main {

    }

    .bio-panel {
      min-height: 350px;
      padding: 4px;
    }

    .bio-score {
      font-size: 18pt;
      font-family: "Arial Black";
    }

    .bio-score-label {
      font-size: 14pt;
    }

    .bio-score-md {
      font-size: 13pt;
      font-family: "Arial Black";
    }
    .bio-score-sd {
      font-size: 12pt;
    }

    .bio-nps {
      color: white;
    }
    .pro {
      background-color: #5cb85c;
    }

    .det {
      background-color: #d9534f;
    }

    .pas {
      background-color: #f0ad4e;
    }
    
    .badge{
      background-color: white;
      color: black;
    }
    </style>
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <div class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="res/img/logo.png"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dashboard <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Mystery Shop</a></li>
                <li><a href="#">Donor</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Scores and Surveys <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Scores</a></li>
                <li><a href="#">Surveys</a></li>
              </ul>
            </li>
            <li><a href="#contact">Trends</a></li>
            <li><a href="#contact">Reports</a></li>
            <li><a href="#contact">Admin</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
        <div class="alert alert-warning"><!--- Show Surveys for -->
          <div class="container">
         Show Surveys for: 
            <div class="btn-group">
              <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                Select Location <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Corporate</a></li>
                <li><a href="#">Division</a></li>
                <li><a href="#">Region Number</a></li>
                <li><a href="#">etc...</a></li>
              </ul>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                Select Sub Location <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">List of Division</a></li>
                <li><a href="#">List of Region</a></li>
                <li><a href="#">etc...</a></li>
              </ul>
            </div>
            </div>
    </div><!--- End Survey for -->
    

  
   