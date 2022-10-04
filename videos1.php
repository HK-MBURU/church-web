<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="video1.css">
</head>
<body>
    <div class="container">
       
        <div class="row">
            <div class="col">
                <div class="small-img-row">
                    <div class="small-img">
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
                         <video src="<?php echo $video_src; ?>" alt="" title="<?php echo $videoName; ?>" class="img-responsive" ></video>
                           
                        <!--   <img src="images/atungati.jpg" alt="">-->
                        
                        <img src="images/ply.png" class="play-btn" onclick="playVideo('1.mp4')">

                                
                        
                    </div>
                    <p><strong><?php echo $videoName; ?></strong></p>
                    <!--<p>Multiple videos <br>In web</p>-->
                    <?php
                                        }
                                       ?>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>