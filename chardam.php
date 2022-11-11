<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .chardham{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
            padding-top: 40px;
            padding-bottom: 40px;
        }
        .card-img-top{
            width: 250px;
            height: 250px;
        }
        
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
            padding: 6px 7px;
            border: 2px solid white;
            background-color: #80af81;
            color: white;
            margin: 5px;
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
    <title>Uttarakhand</title>
</head>

<body>
    <?php
    include"navbar.php";
    ?>
    <div class="chardham">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/kedra.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><h3>Kedranath</h3></h5>
                <p class="card-text">Kedarnath is the most remote of the four Chota Char Dham pilgrimage sites. It is located in the Himalayas, about 3,583 m (11,755 ft) above sea level near the Chorabari Glacier, which is the source of the Mandakini river. </p>
                <a href="https://en.wikipedia.org/wiki/Kedarnath_Temple" class="btn btn-primary">Read More</a>
                <a href="https://www.google.com/maps/place/Kedarnath,+Uttarakhand+246445/@30.7344814,79.0625578,16z/data=!3m1!4b1!4m5!3m4!1s0x39083ee051e628b1:0x167ce4efaf440f1e!8m2!3d30.7346267!4d79.0668943" class="btn btn-primary">Map</a>

            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/badrinath.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><h3>Badrinath</h3></h5>
                <p class="card-text">Badrinath is located at an elevation of around 3,100 m. Located in the Garhwal Himalayas, on the banks of the Alaknanda river, this sacred town lies between Nar and Narayana mountain ranges. </p>
                <a href="https://en.wikipedia.org/wiki/Badrinath_Temple" class="btn btn-primary">Read More</a>
                <a href="https://www.google.com/maps/place/Badrinath,+Uttarakhand+246422/@30.7417338,79.4852149,15z/data=!3m1!4b1!4m5!3m4!1s0x39a78e9f973108e7:0xf05a8b5e0c71473!8m2!3d30.7433085!4d79.4937634" class="btn btn-primary">Map</a>

            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/gangotri.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><h3>Gangotri</h3></h5>
                <p class="card-text">One of the char dhams (the most sacred pilgrimage circuits in northern India with four holy destinations), Gangotri, in Uttarkashi, is a small town with the temple of Goddess Ganga at its heart.</p>
                <a href="https://en.wikipedia.org/wiki/Gangotri#Gangotri_Temple" class="btn btn-primary">Read More</a>
                <a href="https://www.google.com/maps/place/Gangotri,+Uttarakhand+249135/@30.9951673,78.9364135,16z/data=!3m1!4b1!4m5!3m4!1s0x390871907388bf55:0x67172e0036db57db!8m2!3d30.9946945!4d78.9398402" class="btn btn-primary">Map</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/yamunotri.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><h3>Yamunotri</h3></h5>
                <p class="card-text">Highly revered as the origin of the majestic river Yamuna, Yamunotri is famed for its glaciers and thermal springs that makes it one of the most important stopovers in the schedule of Hindu pilgrimage.</p>
                <a href="https://en.wikipedia.org/wiki/Yamunotri_Temple" class="btn btn-primary">Read More</a>
                <a href="https://www.google.com/maps/place/Yamunotri+Temple/@30.9997848,78.4605179,17z/data=!3m1!4b1!4m5!3m4!1s0x39089b4d105c9b49:0x9927c63a2fd2e8cc!8m2!3d30.9997848!4d78.4627066" class="btn btn-primary">Map</a>

            </div>
        </div>
    </div>

    <?php
    include"footer.php";
    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>