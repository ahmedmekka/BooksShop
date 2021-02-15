<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('function/boostrap.php') ?>
    <link rel="stylesheet" href="style/style.css">
    <title>Library</title>
</head>

<body>
    <?php include('header.php') ?>
    <div style="width: 100% ;height: 880px ;background-color: rgba(0, 0, 0, 0.705); position: absolute;  z-index: -1;"></div>
    <div>
        <img src="image.jpg" class="imagee" style="width: 100%">
    </div>
    <h1>READ <br> MORE <br> BOOKS</h1><br><br>
    <div>
        <form action="cherchbook.php" method="POST">
            <center><input type="text" name="recherche" placeholder="FIND YOUR BOOK HERE" id="cherch"></center><br>
            <center><button type="submit" id="bottona">Search</button></center>
        </form><br><br><br>
       
        <br><h4 class="h44" style="position: absolute; bottom: -90px">OUR BOOKS :</h4>
        <div class="main-container">
            <div class="container">
                <div class="card-deck">
            

                <?php

                include('function/db.php') ;
$sql="select * from books order by ID desc limit 3";
$result= mysqli_query($connection,$sql) ;

while($row = mysqli_fetch_assoc($result))
{
 
?>   
<div class="col-sm-4">   
<div class="card" style="height:480px; border: 4px solid black;">
                        <img class="card-img-top" style="height: 473px" src="upload/<?php  echo $row['image'] ?>" alt="Card image cap" style="width:auto">
                        </div>
                    <div class="card-body" style="color: #6001ff; font-size: 1.5em"><b><?php echo $row['title']; ?></b></div>
                    </div>
                    <?php
}
?>
                </div>
            </div>
           
           
            <?php include('footer.php')?>
       
            </div>
            </div>





</body>

</html>