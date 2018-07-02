<?php
	class databaseConnection{

		public __construct($server, $user, $pass){

			global $conn;

			$conn = new mysqli($server, $user, $pass);

			if($conn->connect_error){
				die("Connection failed: ".$conn->connect_error);
			}

			echo "Connected succesfully";

		}

	}
?>