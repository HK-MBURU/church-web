
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<title>Videos</title>
	<link rel="stylesheet" href="buyer.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>

	<body>

         <section id="banner">
             <img src="images/logo.jpg" class="logo" alt="logo">
              <div class="banner-text">
                  <h1>A.K.ISRAEL.</h1>
                  <p>VIDEOS OF VARIOUS CHURCH EVENTS</p>
              </div>
              <!-------------------Main Content------------------------------>
		     <div class="container main">
		         <div class="img-box">
                     <?php
	 
	                         /*-- we included connection files--*/
	                         include "connection.php";

                        	 $result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error($result));
	                     mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error($result));
                        	$image_query = mysqli_query($result,"select videoName,videoPath from videos");
	                     while($rows = mysqli_fetch_array($image_query))
                	        {
	            	           $videoName = $rows['videoName'];
	            	         $video_src = $rows['videoPath'];
                   	   ?>
	
                            	<div class="img-block">
                                   <video src="<?php echo $video_src; ?>" alt="" title="<?php echo $videoName; ?>" class="img-responsive" controls></video>
	                             <p><strong><?php echo $videoName; ?></strong></p>
            	              </div>
                             
	
                            	<?php
                        	}
                        ?>


	        		</div>
	        	</div>
    <div class="container">  
       <div class="row">
            <div class="col">
                <div class="small-img-row">
                    <div class="small-img">
                        <img src="images/smart.png" alt="">
                        
                        <img src="images/ply.png" class="play-btn" onclick="playVideo('1.mp4')">
                    </div>
                    <p>Multiple videos <br>In web</p>
                </div>
            </div>
        </div>
    </div>

            </section>
 
    <div id="sideNav">
        <nav>
            <ul>
                <li><a href="videos.html">VIDEOS</a></li>
                <li><a href="#">AUDIO RECORDINGS</a></li>
                <li><a href="pictures.html" target="_blank">PHOTOS</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="upload_design.php">Upload Video</a></li>

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