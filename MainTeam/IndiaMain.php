<html>

<head>

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

</head>
<body>
<section style="width: 100%;height:50px " class="front ">
   
    <div class="heading ">
        <nav class="navbar navbar-expand-lg navbar-light nav-bar " style="width: 100%; background: transparent; color: white; ">
            <img style="width: 75px; " src="./img/mono-img.png " alt=" ">
            <a class="navbar-brand page-title " href="# ">World Cup</a>
            <button class="navbar-toggler " type="button " data-toggle="collapse " data-target="#navbarSupportedContent " aria-controls="navbarSupportedContent " aria-expanded="false " aria-label="Toggle navigation ">
      <span class="navbar-toggler-icon "></span>
    </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent ">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active ">
                        <a style="font-size: 1.2rem; " class="nav-link " href="https://www.cricbuzz.com/ ">Live<span class="sr-only ">(current)</span></a>
                    </li>
                    <li class="nav-item active ">
                        <a style="font-size: 1.2rem; " class="nav-link " href="# ">Fixtures<span class="sr-only ">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item active ">
                        <a style="font-size: 1.2rem; " class="nav-link " href="team.html">Teams<span class="sr-only ">(current)</span></a>
                    </li>
                    <li class="nav-item active ">
                        <a style="font-size: 1.2rem; " class="nav-link " href="# ">Video<span class="sr-only ">(current)</span></a>
                    </li>
                    <li class="nav-item active ">
                        <a style="font-size: 1.2rem; " class="nav-link " href="\cricket-world-cup/index.php ">Home<span class="sr-only ">(current)</span></a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0 ">
                    <input class="form-control mr-sm-2 " type="search " placeholder="Search " aria-label="Search ">
                    <button class="btn btn-outline-success my-2 my-sm-0 " type="submit ">Search</button>
                </form>
            </div>
        </nav>
 

        <div class="media " style="display: flex; padding: 120px ; ">
                <h1 style=" color: white; transition: none; ">
                  India
                </h1>
            </div>

        
    </div>
</section>

<section id="projects">
    <div class="projects container">

<?php include 'team-inner/india.php'; ?>

    </div>
</section>






<section class="footer-1">
    <div><img src="./img/footer.png" alt=""></div>
    <div>
        <h1>FOLLOW US ON SOCIAL</h1>
        <div class="footer-logo">

            <a href="https://www.freecodecamp.org/learn"><img style="height: 60px;" src="./img/facebook.png" alt=""></a>
            <a href="https://wa.me/8827290484"><img style="height: 60px;" src="./img/whatsapp.png" alt=""></a>
            <a href="https://twitter.com/TarunKu53475509?s=08"><img style="height: 60px;" src="./img/twitter.png" alt=""></a>
            <a href="http://www.instagram.com/kumar_23tarun"><img style="height: 60px;" src="./img/insta.png" alt=""></a>
            <a href="http://www.instagram.com/kumar_23tarun"><img style="height: 60px;" src="./img/youtube.png" alt=""></a>
        </div>
        <hr>
        <div class="links">

            <a href="#">LIVE SCORES INDEX</a>
            <a href="#">ICC EVENTS</a>
            <a href="#">RANKING</a>
            <a href="#">NEWS AND VIDEO</a>
        </div>
    </div>

</section>
<footer>
    <div>
        <p>2020 © International Cricket Council FZ LLC</p>
    </div>
</footer>

</body>
</html>