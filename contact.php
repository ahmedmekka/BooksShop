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

    <h4 class="h">CONTACT US :</h4><br><br>
<form action="phpmailer/index.php" method="POST">
    <label for="name" id="label">NAME</label><br>
    <input type="text" name="name" placeholder="" id="name"><br><br>
    <label for="name" id="label">MAIL</label><br>
    <input type="email" name="email" placeholder="" id="name"><br><br>
    <label for="name1" id="label">MESSAGE</label><br>
    <textarea name="message" class="name"></textarea><br><br>
    <button type="submit" name="send" id="bottona2">SEND</button>

</form>





    <?php include('footer.php') ?>

</body>

</html>