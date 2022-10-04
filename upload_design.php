<?php
	
		include('upload.php'); // Include upload code Script page.
		
	?>


<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<title>VIDEOS</title>
	<link rel="stylesheet" href="buyer.css">
	<link rel="stylesheet" href="style.css">
	<style>
	
		html, body{background: #ececec; height: 100%; margin: 0; font-family: Arial;}
		.main{height: 100%; display: flex; justify-content: center;}
		.main .image-box{width:300px; margin-top: 30px;}
		.main h2{text-align: center; color: #4D4D4D;}
		.main .tb{width: 100%; height: 40px; margin-bottom: 5px; padding-left: 5px;}
		.main .file_input{margin-top: 10px; margin-bottom: 10px;}
		.main .btn{width: 100%; height: 40px; border: none; border-radius: 3px; background: #27a465; color: #f7f7f7;}
		.main .msg{color: red; text-align: center;}
	
	</style>
	</head>

	<body>
    <section id="banner">
        <img src="images/logo.jpg" class="logo" alt="logo">
        <div class="banner-text">
            <h1>A.K.ISRAEL.</h1>
            <p>Upload video here</p>

        </div>
		<!-------------------Main Content------------------------------>
	<div class="container main" >
		<div class="image-box">
			<form method="POST" name="upfrm" action="" enctype="multipart/form-data">
				<div>
				<input type="file" name="fileImg" class="file_input" >
					<input type="text" name="videoName"placeholder="Enter the title of the video" style="width: 500px;height: 35px;" >

					
					<input type="submit" value="Upload" name="btn_upload" class="btn" />
				</div>
			</form>
			<div class="msg">
            <strong>
		<?php if(isset($error)){echo $error;}?>
	</strong>
	
	
	<div class="msg">
		You have not uploaded anything yet.
	</div>


			</div>
		</div>
	</div>

    </section>
    <div id="sideNav">
        <nav>
            <ul>
                <li><a href="videos.php">VIDEOS</a></li>
                <li><a href="#">AUDIO RECORDINGS</a></li>
                <li><a href="pictures.html" target="_blank">PHOTOS</a></li>
                <li><a href="#">ABOUT</a></li>

            </ul>
        </nav>
    </div>
    <div id="menuBtn">
        <img src="images/menu.png" alt="menu.png" id="menu">

         </div>
		 <!--script-->
		 <script>
        var menuBtn=document.getElementById("menuBtn");
        var sideNav=document.getElementById("sideNav");
        var menu=document.getElementById("menu");

        sideNav.style.right="-250px";
       
        menuBtn.onclick=function(){
            if(sideNav.style.right=="-250px"){
                sideNav.style.right="0";
                menu.src="images/close.png";
            }
            else{
                sideNav.style.right="-250px";
                menu.src="images/menu.png";
            }

        }
    </script>
	</body>
	</html>