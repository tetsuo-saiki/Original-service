<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My ideals</title>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel='stylesheet' href=''>
        
        <!--自作CSS -->
        <style type="text/css">
        .jumbotron { background:url(http://res.freestockphotos.biz/pictures/15/15397-a-healthy-young-man-running-on-a-treadmill-in-a-gym-pv.jpg) center no-repeat; background-size: cover;}
        .jumbotron h1 { color: #FFF;}
        .jumbotron p { color: #FFF;}
        .jumbotron_new {
          padding-top: 30px;
          padding-bottom: 30px;
          margin-bottom: 30px;
          color: #474747;
          background-color: #ecf0f1;
        }
        .footer {
              position: absolute;
              bottom: 0;
              width: 100%;
              /* Set the fixed height of the footer here */
              height: 60px;
              background-color: #f5f5f5;
        }
        .container {
              width: auto;
              max-width: 680px;
              padding: 0 15px;
        }
        .container .text-muted {
              margin: 20px 0;
        }
        </style>
    </head>
    <body>
        @include('commons.navbar')
        
        <div class="container">
            @include('commons.error_messages')
            
            @yield('content')
        </div>
    </body>
    <footer class="footer">
        <div class="container">
            <p class="text-muted">Copyright &copy; My Ideals.</p>
        </div>
    </footer>


</html>