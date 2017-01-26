<?php

	if(!mysql_connect("localhost","root","")){
		echo "connection failed";
	}
	
	if(!mysql_select_db("consyns")){
		$sql_db = "CREATE DATABASE consyns";
		$sql_tb = "CREATE TABLE  `consyns`.`contact_us` (
					`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
					`enq_type` VARCHAR( 255 ) NOT NULL ,
					`name` VARCHAR( 255 ) NOT NULL ,
					`tel` VARCHAR( 255 ) NOT NULL ,
					`email` VARCHAR( 255 ) NOT NULL ,
					`subject` VARCHAR( 255 ) NOT NULL ,
					`message` VARCHAR( 1000 ) NOT NULL
					)";
		if(!mysql_query($sql_db)){
			echo "db creation failed";
		}
		if(!mysql_query($sql_tb)){
			echo "no table created";
		}
		
	}
	
?>