<?php

	/*-- we included connection files--*/
	include "connection.php";

	/*--- we created a variables to display the error message on design page ------*/
	$error = "";

	if (isset($_POST["btn_upload"]) == "Upload")
	{
		$file_tmp = $_FILES["fileImg"]["tmp_name"];
		$file_name = $_FILES["fileImg"]["name"];

		/*image name variable that you will insert in database ---*/
		$videoName = $_POST["videoName"];

		//image directory where actual image will be store
		$file_path = "videos/".$file_name;	

	/*---------------- php textbox validation checking ------------------*/
	if($videoName == "")
	{
		$error = "Please enter the name of the video.";
	}

	/*-------- now insertion of image section has start -------------*/
	else
	{
		if(file_exists($file_path))
		{
			$error = "Sorry,The <b>".$file_name."</b> video already exist.";
		}
			else
			{
				$result = mysqli_connect($host, $uname, $pwd) or die("Connection error: ". mysqli_error($result));
				mysqli_select_db($result, $db_name) or die("Could not Connect to Database: ". mysqli_error($result));
				mysqli_query($result,"INSERT INTO videos(videoName,videoPath)
				VALUES('$videoName','$file_path')") or die ("image not inserted". mysqli_error($result));
				move_uploaded_file($file_tmp,$file_path);
				$error = "<p align=center>File ".$_FILES["fileImg"]["name"].""."<br />Image saved into Table.";
			}
		}
	}
?>