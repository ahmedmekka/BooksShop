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
        <h4 class="h44" style="position: absolute; bottom: 750px">OUR BOOKS :</h4>
       
        <div class="main-container">
            <div class="container">
                <div class="card-deck">
            

                <?php

                include('function/db.php') ;
$sql="select * from books order by ID";
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


</body>

</html>