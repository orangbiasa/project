<!DOCTYPE html>
<html>
<head>
    <title>MoodFoodandDrink</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
</head>
<body>
        <?php
        require_once("header.php");
        ?>
        <div><!--welcome-->
                <img src="img/bannerfix.jpeg" alt=""  style="width: 100%">
        </div>
        <div class="divoff">
            <p>Sedang Hangat!</p>
        </div>
        <div class="slideshow-container">
            <div class="mySlides fade" >
                <img src="img/rendang1.jpg" alt="" style="width: 50%">
            </div>
            <div class="mySlides fade" >
                <img src="img/dendeng1.jpg" alt=""  style="width: 50%">
            </div>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>
        <script src="js/script.js"></script>
        <footer class="footer">
            <p class="cpy">Copyright @MoodFoodandDrink</p>
            <span><p class="cpy">2018</p></span>
        </footer>
    </body>
</html>