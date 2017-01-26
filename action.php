<?php
include("dbconnect.php");

	if(isset($_POST['submit']) && $_POST['submit'] == "Submit"){
		$enqtype = htmlentities($_POST['enqtype']);
		$name = htmlentities($_POST['name']);
		$tel = htmlentities($_POST['tel']);
		$email = htmlentities($_POST['email']);
		$subject = htmlentities($_POST['subj']);
		$message = htmlentities($_POST['message']);
		
		$sql = "INSERT INTO consyns.contact_us (enq_type, name, tel, email, subject, message) VALUES ('$enqtype', '$name', '$tel', '$email', '$subject', '$message')";
		
		if(!mysql_query($sql)){
			die(mysql_error());
			?>
			<script>alert("There was an error");</script>
			<?php
		}else{
		header("location: index.php");
		}
	}else{
		echo "There is an error";
	}

?>