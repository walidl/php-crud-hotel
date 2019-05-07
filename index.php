<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- JS: CHART-JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>

    <!-- Js: Handlebar-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>

      <script id="row-template" type="text/x-handlebars-template">

        <div class="row">
          <div class="id">
            {{id}}
          </div>
          <div class="price">
            <span>{{price}}</span> $
          </div>
        </div>
      </script>

    <!-- My script and style -->
    <script src="script.js" charset="utf-8"></script>
    <link rel="stylesheet" href="style.css">

    <title></title>
  </head>
  <body>


    <h1>Pagamenti</h1>
    <div class="container">

      <div class="tabella">
        <div class="titles">
          <div class="id">
            ID
          </div>
          <div class="price">
            Price
          </div>
        </div>
        <div class="rows">
          
        </div>


      </div>
    </div>



  </body>
</html>
