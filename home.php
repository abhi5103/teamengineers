<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .navbar-nav h4 {
            color: blue;
            padding-left: 130px;
        }

        .navbar-brand {
            padding-top: 8px;
        }

        .navbar-nav {
            padding-left: 130px;
            font-size: 20px;
        }

        #logo {
            margin: 8px 25px;
        }

        #logo img {
            height: 45px;
        }

        .btn {
            padding: 6px 20px;
            border: 2px solid white;
            background-color: #80af81;
            color: white;
            margin: 17px;
            font-size: 1.5rem;
            border-radius: 10px;
            cursor: pointer;
        }

        .center {
            text-align: center;
        }

        #home {
            display: flex;
            flex-direction: column;
            padding: 3px 200px;
            height: 550px;
            justify-content: center;
            align-items: center;
        }

        #home::before {
            content: "";
            position: absolute;
            background: url('.//img/1.jpg') no-repeat center center/cover;
            height: 642px;
            top: 0px;
            left: 0px;
            width: 100%;
            z-index: -1;
            opacity: 0.79;
        }

        #home h1 {
            color: #0b3603;
            text-align: center;
            font-family: 'Bree Serif', serif;
        }

        #home p {
            color: white;
            text-align: center;
            font-size: 1.5rem;
            font-family: 'Bree Serif', serif;
        }

        footer {
            background: black;
            color: white;
            padding: 9px 20px;
        }
    </style>
    <title>yyyyo</title>
</head>

<body>

    <?php
    include "navbar.php";
    ?>

    <section id="home">
        <h1 class="h-primary">Welcome to Uttarakhand</h1>
        <p>Uttarakhand is known for the natural environment of the Himalayas, the Bhabar and the Terai regions. It borders the Tibet Autonomous Region of China to the north; the Sudurpashchim Province of Nepal to the east; the Indian states of Uttar Pradesh to the south and Himachal Pradesh to the west and north-west</p>
        <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p> -->
        <button class="btn" ><a href=".//Region/region.php">EXPLORE</a></button>
    </section>

    <?php
    include "footer.php";
    ?>
    <!-- <div class="background_image">
    <h1>welcome</h1>
    <div class="carousel-item active">
      <img src=".//img/1.jpg" class="d-block w-100" style="width: 200px; height: 400px">
    </div>

    </div> -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>