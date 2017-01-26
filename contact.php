<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CONSYNS | CONTACT US</title>

    <!-- Bootstrap Core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">
	
    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" onload="changeColor()">
<script type="text/javascript">
		function changeColor(){
			document.getElementById("contact").style.backgroundColor="grey";
		}
	</script>
	
<?php include("templates/header.inc.php");?>
<section class="bg-primary" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <hr class="light">
					
					
		<div class="col-md-12">
   
			<p class="text-faded">Use the Form Below to Contact Us, For Request, Complaint and Enquiries. We will get back to You In less than 24hours</p>
		   <!--<a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Why ICS ?</a>-->
		</div>
   
   <div class="col-md-12">
   <form class="form-horizontal" method="POST" action="action.php">
<fieldset>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Inquiry Type</label>
  <div class="col-md-4">
    <select id="enqtype" name="enqtype" class="form-control">
      <option value="enquiry">Enquiry</option>
      <option value="complaints">Complaints</option>
      <option value="request">Request</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-6">
  <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tel">Tel</label>  
  <div class="col-md-6">
  <input id="tel" name="tel" type="text" placeholder="Tel:" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-6">
  <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="subj">Subject</label>  
  <div class="col-md-6">
  <input id="subj" name="subj" type="text" placeholder="Subject" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="message">Message</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="message" name="message" placeholder="Enter text here..." rows="10" cols="50"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
<br>
  <div class="col-md-12">
    <button id="submit" name="submit" class="btn btn-xl btn-inverse" value="Submit">Submit</button>
  </div>
</div>

</fieldset>
				
   </div>
				
            </div>
        </div>
    </section>

<?php include("templates/footer.inc.php"); ?>

    <!-- jQuery -->
    <script src="lib/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="lib/scrollreveal/scrollreveal.min.js"></script>
    <script src="lib/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
