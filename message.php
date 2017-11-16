<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Testing Some Basic Skills">
    <meta name="author" content="Ohidoa Oluwatobi Samuel">
    <link rel="icon" href="../../favicon.ico">
    <title>Sammy Learns Web Development</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet">
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

      .alert-dismiss{
            position:relative;
        }

        .alert-dismiss::after{
            content:'\f00d';
            font-family:'FontAwesome';
            position:absolute;
            top:5%;
            right:2%;
            color:black;
            cursor:pointer;
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
	            <a href="#" class="list-group-item active">
	              View Message
	            </a>
	            <a href="#" class="list-group-item">Reply Message</a>
	            <a href="#" class="list-group-item">Delete Message</a>
              <a href="#" class="list-group-item">Archive Message</a>
              <a href="#" class="list-group-item">Back</a>
	          	</div>
	    	</div>
        </div>
    	<div class="col-sm-9">
    		<div class="container-fluid">
    			<div class="panel panel-default">
                        <div class="panel-heading">
                             {{From}} Message
                        </div>
                        <div class="panel-body">
                            <div class="well messageBody">
                            <p class="subject">From: Ohidoa Oluwatobi Samuel</p>
                            <p class="subject">Subject: Ohidoa Oluwatobi Samuel</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            
                                <button class="btn btn-primary right" data-toggle="modal" data-target="#myModal" > Reply Message</button>
                            
                        </div>
                    </div>

    		</div>
    	</div>
    </div>
    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        
        <form action="">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Reply Message From : {{Sender's Name }}</h4>
            </div>
            <div class="modal-body">
            <div class="alertBox">
                <p class="alert alert-success alert-dismiss"> Successfully Replied The Message</p>
            </div>
                <div class="form-group">
                    <label for="subject"> Message Subject : </label>
                    <input type="text" class="form-control" placeholder="Enter Message Subject Here" name="subject" />
                </div>
                <div class="form-group">
                    <label for="messagebody">Message Body: </label>
                    <textarea name="messagebody" id="" rows="7" class="form-control" placeholder="Enter Message Body Here"></textarea>
                </div>
                <div class="form-group">
                    <span class="btn btn-default" id="attachment">
                        <i class="fa fa-paperclip"></i> Add Attachment
                    </span> <span id="fileDetails"> File Details Will Appear here .....</span>
                </div>
            </div>
            <div class="hide">
                <input type="file" id="realAttachment">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="close" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="send">Send</button>
            </div>
            
        </form>
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
    <script>
        var attachFile=document.getElementById('attachment');
        var file=document.getElementById('realAttachment');
        attachFile.addEventListener('click',function(evt){
            file.click();
        });
    </script>
  </body>
</html>
