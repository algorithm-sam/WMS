<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />>
    <meta name="viewport" content="width=device-width, initial-scale=1" />>
    <meta name="description" content=" Testing Some Basic Skills" />>
    <meta name="author" content="Ohidoa Oluwatobi Samuel" />>
    <link rel="icon" href="../../favicon.ico" />>
    <title>Sammy Learns Web Development</title>
    <link href="css/bootstrap.css" rel="stylesheet" />>
    <link href="css/style.css" rel="stylesheet" />>

    <style type="text/css">
    	.wrapper{
    		margin-top: 100px;
    	}
    	.list-group{
    		text-align: center;
    	}
    	.navbar{
    		background:#11bbcc;
    	}
    	#navbar li a{
    		color:white !important;
    	}
    	.navbar-brand{
    	color:white !important;	
    	}
    	.list-group-item.active,.list-group-item:hover{
    	background:#11bbcc !important;
    	color:white !important;	
    	border: none;
    	}
        .slides div.jumbotron{
            position:relative;
        }
        .slides div.jumbotron p.caption{
            position:absolute;
            top:2%;
            right:2%;
            color:red;
        }

        .main_slide{
            min-height:300px;
        }
        .sub_slide{
         min-height:200px;   
        }
        .main_slide img,.sub_slide img{
            width:100%;
            height:100%;
        }

    </style>
  </head>

  <body>

    <nav class="navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">WMS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="posts.php">Manage Posts</a></li>
            <li class="active"><a href="messages.php">Manage Feedbacks</a></li>
            <li><a href="slides.php">Manage Slides</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Others <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="wrapper">
    	
    <div class="container-fluid">
    
    <div class="row">
    	<div class="col-sm-3">
	    	<div class="menus">
	          <div class="list-group">
	            <a href="" class="list-group-item active">
	              View Slides
	            </a>
	              <a href="#changeOrder" class="list-group-item">Change Order</a>
                <a href="#addSlides" class="list-group-item">Add Slides</a>
	          	</div>
	    	</div>
        </div>
    	<div class="col-sm-9">
    		<div class="container-fluid">
                        <div class="slides_editor" id="content_holder">
                         

    		                </div>
    	</div>
    </div>
      </div>
    </div> <!-- /container -->

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/slides.js"></script>
  </body>
</html>
