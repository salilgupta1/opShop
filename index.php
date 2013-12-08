<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
/*
Front page
*/
?>
<!DOCTYPE HTML>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OpShop</title>
  <script src = '/views/javascript/jquery/jquery.js'></script>
	<script src = '/views/javascript/bootstrap.min.js'></script>
	<script src = '/views/javascript/OpShop.js'></script>
	<script>
  $(document).ready(function(){
    OpShop.init();
  });
	</script>

  <link type = 'text/css' rel = 'stylesheet' href = '/views/css/bootstrap.css'/>
  <link type = 'text/css' rel = 'stylesheet' href = '/views/css/bootstrap-theme.min.css'/>
    <link type = 'text/css' rel = 'stylesheet' href = '/views/css/opShop.css'/>
</head>
  <body>



    <div class="container">
          <nav role="navigation">
        <ul class="nav nav-pills">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li ><a href="team.html">Team</a></li>
        </ul>
      </nav>
      <div class="starter-template">
        <img src = '/assets/opShopLogo.jpg' width="300" height="200"/>
        <form>
        	<div class = 'form-group'>
        		<input type="url" class="form-control" id ='articleLink' placeholder="URL">
        	</div>
        	<button type="submit" id = 'submit' class="btn btn-default">OpShop it!</button>
        </form>

        <div style = 'display:none' id="loader"><img src="/assets/loading.gif" /></div>

        <div id = 'fail' style = 'display:none'>
          <h2>Sorry, OpShop wasn't able to process your request :(</h2>
        </div>
        <div id = 'congyQuotes' style = 'display:none'>
          <div id = 'spectrum'>
            <img src = "/assets/scale.jpg" />
          </div>
          <div id = 'quoteCards'>
            <div id = 'row'>
              <div class="col-sm-6 col-md-3">
                <div class = 'thumbnail' data-type = 'f_lib'>
                  <div class = 'name'>
                    <h3>N/A</h3>
                  </div>
                  <div class = 'position'>
                    <h4>N/A</h4>
                  </div>
                  <div class = 'quotation'>
                    <p>N/A</p>
                  </div>

                  <a href = '#' target = '_blank'> </a>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class = 'thumbnail' data-type = 'm_lib'>
                  <div class = 'name'>
                    <h3>N/A</h3>
                  </div>
                  <div class = 'position'>
                    <h4>N/A</h4>
                  </div>
                  <div class = 'quotation'>
                    <p>N/A</p>
                  </div>

                  <a href = '#' target = '_blank'></a>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class = 'thumbnail' data-type = 'm_con'>
                  <div class = 'name'>
                    <h3>N/A</h3>
                  </div>
                  <div class = 'position'>
                    <h4>N/A</h4>
                  </div>
                  <div class = 'quotation'>
                    <p>N/A</p>
                  </div>

                  <a href = '#' target = '_blank'></a>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class = 'thumbnail' data-type = 'f_con'>
                  <div class = 'name'>
                    <h3>N/A</h3>
                  </div>
                  <div class = 'position'>
                    <h4>N/A</h4>
                  </div>
                  <div class = 'quotation'>
                    <p>N/A</p>
                  </div>

                  <a href = '#' target = '_blank'></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class = 'push'></div>
    </div><!-- /.container -->
     <div class = 'footer'>

     </div>
  </body>
</html>
