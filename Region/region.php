<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="../home.css"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .dis{
   
            margin: 74px;
        }
        h2{
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .main{
            display: flex;
            justify-content: center;

        }
        .garhwal{
            width: 450px;
        }
        .kumaon{
            width: 450px;
        }
        .navbar-nav h4 {
            color: blue;
            padding-left: 130px;
        }

        .navbar-brand {
            padding-top: 8px;
        }

        .navbar-nav {
            padding-left: 150px;
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

        .famous {
            margin-top: -20px;
            margin-left: 440px;
        }

        .deh {
            display: flex;
            justify-content: center;
            margin: 80px;
        }

        .Dehradun {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .card-img-top {
            width: 250px;
            height: 250px;
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
            color: black;
            text-align: center;
            font-family: 'Bree Serif', serif;
        }

        #home p {
            color: white;
            text-align: center;
            font-size: 1.5rem;
            font-family: 'Bree Serif', serif;
        }
    </style>
    <title>Dehradun</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark">

        <div class="container-fluid">
            <a class="navbar-brand" href="../home.php">
                <h3>Uttarakhand Tourism</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Explore</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="../district.php">District</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="../chardam.php">CharDham</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="../donation.php">Donation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="../about.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page">
                            <h4>Team Engineers</h4>
                        </a>
                    </li>



                </ul>

            </div>
        </div>
    </nav>

        <!-- <?php
        include"navbar.php";
        ?> -->
        <p style="text-align:center;"><img src="../Images/Region/map.jpg"height=30% width="50%">
        <div class="main">
        <div class="garhwal">
            <p>
            <h2>GARHWAL REGION</h2>
            
            <a class="dis" href="../District/dehradun.php">1.Dehradun</a><br>
            <a class="dis" href="../District/uttarkashi.php">2.Uttarkashi</a><br>
            <a class="dis" href="../District/chamoli.php">3.Chamoli</a><br>
            <a class="dis" href="../District/haridwar.php">4.Haridwar</a><br>
            <a class="dis" href="../District/pauri.php">5.Pauri</a><br>
            <a class="dis" href="../District/rudraprayag.php">6.Rudraprayag</a><br>
            <a class="dis" href="../District/tehri.php">7.Tehri</a><br><br>
        </p>
    </div>
<div class="kumaon">
        <p>
            <h2>KUMOAN REGION</h2>
            <a class="dis" href="../District/pithoragarh.php">1.Pithoragarh</a><br>
            <a class="dis" href="../District/bageshwar.php">2.Bageshwar</a><br>
            <a class="dis" href="../District/almora.php">3.Almora</a><br>
            <a class="dis" href="../District/nanital.php">4.Nanital</a><br>
            <a class="dis" href="../District/champawat.php">5.Champawat</a><br>
            <a class="dis" href="../District/usnagar.php">6.Uddham Singh Nagar</a><br>
          
        </p>
    </div>  
    </div> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <?php
    include "../footer.php";
    ?>
    <scr
  </body>
</html>