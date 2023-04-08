<?php
    $m = file_get_contents('numberofm.txt');

?>


<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
        <link href="https://fonts.googleapis.com/css2?family=BioRhyme:wght@200;400;800&family=Montserrat:wght@300;500;900&display=swap" rel="stylesheet">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        About
    </title>
</head>
<body id="about">
    <div class="header">
        <div class="innerheader">
            <div class="logocontainer">
                <a href="index.html"><h1>SA<span>DIQ</span></h1></a>
            </div>
            
            <ul class="nav">
                <a href="index.html" class="nv"><li>Home</li></a>
                <a href="about.php" class="nv"><li>About</li></a>
                <a href="portfolio.html" class="nv"><li>Portfolio</li></a>
                <a href="contact.html" class="nv"><li>Contact</li></a>
            </ul>

        </div>
    </div>
    
    

    <div class="about-content" id="about-content">
        <h1 class="heada">About</h1>
        <div><h1 class="heada-content">Hi There, This is Sadiq </h1>
        <h1 class="arrow">→</h1>
        <img src="pictures/littlesadiq.png" alt=""></div>
    </div>

    <div class="about-content">
        <div><h1 class="heada-content">He wants to make a website</h1>
        <h1 class="arrow">→</h1>
        <img src="pictures/website.png" alt=""></div>
    </div>

    <div class="about-content">
        <div><h1 class="heada-content">But he procrastinates </h1>
        <h1 class="arrow">→</h1>
        <img src="pictures/procrastinate.png" alt=""></div>
    </div>

    <br>
    <br>

    <form name="formaa" action="numberofm.php" method="POST">
        <div class="about-content">
            <div><h1 class="heada-content">Click here to motivate him </h1>
            <h1 class="arrow">→</h1>
            <button type="submit" class="motivate" id="motivation" onclick="myFunction()">Motivation Hormone</button><br><br><br><br><br><br><p class="numberofm1">Number of Motivation Hormones 😁 = <?php echo $m ?></p></div>
        </div>
    </form>

    
    

    <footer><hr><p>2020 Copyright - All Rights Reserved.</p></footer>
    
</body>

<script type="text/javascript"> 

function myFunction() {
  alert("Thank You for motivating me, Please do not spam the button, give a chance for others 😘")
}

</script>

</html>