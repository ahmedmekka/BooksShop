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

    <?php
         include('function/db.php') ;
       $recherche= isset($_POST['recherche']) ? $_POST['recherche'] : '';

       $q ="SELECT * FROM books where  title LIKE'$recherche%'";
       $result= mysqli_query($connection,$q);
    while($row = mysqli_fetch_assoc($result))
       {
?>

    <h5 class="title1" style="font-size: 25px;"> <?php echo $row['title']; ?></h5>
    <div class="row">

   
        <div class="col-lg-6 col-sm-8">
            <div style="background-color: #f0f0f0e7 ; height: 350px; width: 70%;" class="divv"><br>
            <h4> <span> Name :</span> <?php echo $row['title']; ?></h4><br>
                <h4><span>AUTHOR :</span><?php echo $row['auteur']; ?></h4><br>
                <h4><span>PRIX :</span><?php echo $row['Prix']; ?></h4><br>
                <h4><span>QUANTITE AU STOCK :</span><?php echo $row['QStock']; ?></h4><br>
                <h4><span>DATE DE PUBLICATION :</span><?php echo $row['publishedat']; ?></h4><br>
            </div>
        </div>
       
        <div class="col-lg-4 col-sm-10">
            <img class="card-img-top card-image " src="upload/<?php  echo $row['image'] ?>"  alt="Card image cap">
        </div>
        <?php
}
?>
    </div>
</body>

</html>