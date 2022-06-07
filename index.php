<?php
session_start();
include 'partials/_dbconnect.php';

$username = $_SESSION['username'];

$sql = "Select * from users where username='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$firstname = $row['first_name'];

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

    <title>Welcome - <?php echo $_SESSION['username'] ?></title>
</head>

<body>
    <div class="scrollTop" onclick="scrollToTop()">
        <img src="./img/arrow-up.png"  alt="">
    </div>
    <div style="text-align: left; width: 34rem; margin-bottom:-4rem" class="intro">
        <div class="alert alert-success" style="display: flex; height:3rem;" role="alert">
            <h5 class="alert-heading">Welcome - <?php echo  $firstname ?></h5>
            <p style="margin-left: 1rem; margin-bottom: 0rem;"> logout <a href="logout.php"> using this link.</a></p>
        </div>
    </div>
    <section class="front ">
        <div class="container " style="display: flex; padding-left:400px;">
            <div style="display: flex;">
                <img style="width: 30px; height: 25px; margin-top:5px; " src="./img/airo.png " alt=" ">
                <a style="padding-left: 0rem; " class="btn " href="# ">ICC Travel & Ticket</a>
                <img style="width: 25px; height: 25px; margin-top:5px;" src="./img/tick.png " alt=" ">
                <a style="padding-left: 0rem; " class="btn " href="# ">ICC Tickets </a>
                <img style="width: 25px; height: 25px; margin-top:5px; " src="./img/shop.png " alt=" ">
                <a style="padding-left: 0rem; " class="btn " href="# ">T20 Shop</a>
            </div>
            <div class="nav-contact" style="display: flex;">

            <a href="https://www.freecodecamp.org/learn"><img style="height: 27px; margin-right:5px;" src="./img/facebook.png" alt=""></a>
                <a href="https://wa.me/8827290484"><img style="height: 27px; margin-right:5px;" src="./img/whatsapp.png" alt=""></a>
                <a href="https://twitter.com/TarunKu53475509?s=08"><img style="height: 27px; margin-right:5px;" src="./img/twitter.png" alt=""></a>
                <a href="http://www.instagram.com/kumar_23tarun"><img style="height: 27px; margin-right:5px;" src="./img/insta.png" alt=""></a>
                <a href="http://www.instagram.com/kumar_23tarun"><img style="height: 27px; margin-right:5px;" src="./img/youtube.png" alt=""></a>

                <a style="background-color: rgb(9, 13, 49); " href="login.php" class="btn sign-btn ">Sign In/Create Account</a>
            </div>
        </div>
        </div>
        <div class="heading ">
            <nav class="navbar navbar-expand-lg navbar-light nav-bar " style="width: 100%; background: transparent; color: white; ">
                <img style="width: 75px; " src="./img/mono-img.png " alt=" ">
                <a class="navbar-brand page-title " href="welcome.php">World Cup</a>
                <button class="navbar-toggler " type="button " data-toggle="collapse " data-target="#navbarSupportedContent " aria-controls="navbarSupportedContent " aria-expanded="false " aria-label="Toggle navigation ">
                    <span class="navbar-toggler-icon "></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent ">
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item active ">
                            <a style="font-size: 1.2rem; " class="nav-link " href="https://www.cricbuzz.com/ ">Live<span class="sr-only ">(current)</span></a>
                        </li>
                        <li class="nav-item active ">
                            <a style="font-size: 1.2rem; " class="nav-link " href="fix.html ">Fixtures<span class="sr-only ">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle " href="# " id="navbarDropdown " role="button " data-toggle="dropdown " aria-haspopup="true " aria-expanded="false ">
                                RANKINGS
                            </a>
                            <div class="dropdown-menu " aria-labelledby="navbarDropdown ">
                                <a class="dropdown-item " href="# ">Overview</a>
                                <a class="dropdown-item " href="# ">Team Ranking</a>
                                <a class="dropdown-item " href="# ">Player Comparison</a>
                                <a class="dropdown-item " href="# ">Team Ranking Predictor</a>
                                <a class="dropdown-item " href="# ">About the Ranking</a>
                                <a class="dropdown-item " href="# ">Ranking FAQ</a>
                                <div class="dropdown-divider "></div>
                                <a class="dropdown-item " href="# ">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item active ">
                            <a style="font-size: 1.2rem; " class="nav-link " href="team.html">Teams<span class="sr-only ">(current)</span></a>
                        </li>
                        <li class="nav-item active ">
                            <a style="font-size: 1.2rem; " class="nav-link " href="about.html ">About<span class="sr-only ">(current)</span></a>
                        </li>
                        <li class="nav-item active ">
                            <a style="font-size: 1.2rem; " class="nav-link " href="# ">More<span class="sr-only ">(current)</span></a>
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
                    Media Release
                </h1>
            </div>

        </div>
    </section>
    <section class="head ">
        <div class="social ">
            <img src="./img/share.png" alt="">
            <h4 style="font-weight: 600;">Share</h4>
            <div><a href="# "><i class="fab fa-facebook-f "></i></a></div>
            <div><a href="# "><i class="fab fa-tumblr "></i></a></div>
            <div><a href="# "><i class="fab fa-instagram "></i></a></div>

        </div>
        <div class="vanue ">
            <h3>T20 WORLD CUP, MEDIA RELEASE</h3>
            <h4>07 aug 20</h4>
            <h1>Venue for postponed 2020 ICC Men's T20 World Cup confirmed</h1>
            <img style=" max-width: 100%; " src="https://resources.pulse.icc-cricket.com/ICC/photo/2019/01/11/46b742c4-6b86-4cf4-8df8-8aa018996a66/The-Cricket-World-Cup-trophy-at-the-Sydney-Cricket-Ground.jpg " alt=" ">
        </div>
    </section>
    <section style="padding:0 200px">
        <div class="article__summary">ICC today made key announcements with regards to the schedule of the ICC Men's T20 World Cup and ICC Women's Cricket World Cup</div>
        <div class="article__content">
            <p>The International Cricket Council (ICC) today confirmed that the ICC Men’s T20 World Cup 2020 that was postponed due to COVID-19 will be held in Australia in 2022. India will host the ICC Men’s T20 World Cup 2021 as planned.
            </p>

            <p>The ICC Women’s Cricket World Cup 2021 in New Zealand has been postponed until February – March 2022 because of the impact the pandemic has had on cricket globally. </p>
            <p> decisions were taken by the IBC (the commercial subsidiary of the ICC) following an extensive contingency planning exercise which has taken into account the health, cricket and commercial impact of COVID-19 around the world.</p>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://cdn.wisden.com/wp-content/uploads/2019/07/GettyImages-1159558697-e1562336680190-925x530.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>- Rahul Dravid</h5>
                            <p>“You don’t win or lose the games because of the 11 you select. You win or lose with that those 11 do on the field.”</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://assets.entrepreneur.com/content/3x2/2000/20190612094854-Yuvi1.jpeg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>– Mahendra Singh Dhoni</h5>
                            <p>“You don’t play for the crowd, you play for the country.” </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://www.thestatesman.com/wp-content/uploads/2019/07/Indian-team-1.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5> – Sachin Tendulkar</h5>
                            <p>“Enjoy the game & Chase your dreams. Dreams do come true.”</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <p> “There has been no women’s international cricket played since the conclusion of the ICC Women’s T20 World Cup earlier this year and due to the varying impact of COVID-19 globally that is likely to remain the situation for a number of the
                teams. Moving the event by 12 months gives all competing teams the chance to play a sufficient level of cricket ahead of both the qualification event and leading into a Cricket World Cup so the integrity of the tournament is maintained.”</p>
            <p> The format of the ICC Men’s T20 World Cup 2021 will remain as it was for 2020 and all teams that qualified for that event will now participate in India in 2021. A new qualification process will be run for the ICC Men’s T20 World Cup 2022.
                The format of the postponed ICC Women’s Cricket World Cup will remain as it was for 2021. Five teams have already qualified for the event and that will stand for 2022. The original global qualification event to determine the final
                three teams to contest the ICC Women’s Cricket World Cup was scheduled to be held in Sri Lanka in July 2020, but this was postponed due to COVID-19. The qualification event will now be held in 2021.
            </p>
        </div>
    </section>

    <section class="footer-1">
        <div class="footer-img"><img src="./img/footer.png" alt=""></div>
        <div>
            <h1>FOLLOW US ON SOCIAL</h1>
            <div class="footer-logo">

                <a href="https://www.freecodecamp.org/learn"><img src="./img/facebook.png" alt=""></a>
                <a href="https://wa.me/8827290484"><img src="./img/whatsapp.png" alt=""></a>
                <a href="https://twitter.com/TarunKu53475509?s=08"><img src="./img/twitter.png" alt=""></a>
                <a href="http://www.instagram.com/kumar_23tarun"><img src="./img/insta.png" alt=""></a>
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
    <section class="scroll">

    </section>
    <footer>
        <div>
            <p>2020 © International Cricket Council FZ LLC</p>
        </div>
    </footer>
    <script type="text/javascript">
        window.addEventListener('scroll', function() {
            var scroll = document.querySelector('.scrollTop');
            scroll.classList.toggle("active", window.scrollY > 500)


            function scrollToTop() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                })
            }
        })
    </script>
    <script type="text/javascript" src="app.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</body>

</html>