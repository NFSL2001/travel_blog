<!DOCTYPE html>
<html lang="en">

<?php
include_once("init_db.php");
include_once("init_session.php");
?>

<head>
    <title>Travalog - Journey Never Ends</title>

    <!--Bootstrap implementation-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    
    <!-- Theme stylesheet-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/blog/2-0/css/style.default.622904dd.css"
        id="theme-stylesheet">
    <!--CSS overwrite-->
    <link rel="stylesheet" href="css/main.css">
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom py-2 fixed-top">
        <div class="container pt-1">
            <h1>
                <a class="navbar-brand text-md fw-bold text-dark" href="index.php">Travalog</a>
            </h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    <li class="nav-item"><a class="nav-link active " href="index.php">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link " href="browse.php">Browse</a>
                    </li>
                    <li class="nav-item"><a class="nav-link " href="search.php">Search</a>
                    </li>
                    <li class="nav-item"><a class="nav-link " href="contact.php">Contact</a>
                    </li>
                    <?php
                    if (isset($_SESSION["username"])) {
                        $username = $_SESSION["username"];
                        ## multiline syntax, use <<< TAG and TAG;
                        echo <<< LOGIN
                        <li class="nav-item"><a class="nav-link " href="my_posts.php">My Posts</a></li>
                        <li class="nav-item dropdown">
                            <a class="btn btn-style btn-dark ms-2 px-3 py-2 dropdown-toggle " href="#" id="navbarUserMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @$username
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarUserMenuLink">
                            <li><a class="dropdown-item" href="analysis.php">Analysis</a></li>
                            <li><a class="dropdown-item" href="my_profile.php">Edit profile</a></li>
                            <li><a class="dropdown-item" href="index.php">Log out</a></li>
                            </ul>
                        </li>
                        LOGIN;
                    } else {
                        ## multiline syntax, use <<< TAG and TAG;
                        echo <<< OUTSIDE
                        <li class="nav-item"><a class="nav-link " href="login.php">Login</a></li>.
                        <li class="nav-item "><a class="btn btn-style btn-dark ms-2 px-3 py-2 " href="register.php">Sign Up</a></li>
                        OUTSIDE;
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section-->
    <section class="hero position-relative"
        style="background: url(https://d19m59y37dris4.cloudfront.net/blog/2-0/img/hero.68e47bad.jpg); background-size: cover; background-position: center center">
        <div class="container d-flex text-white py-5">
            <div class="row col-lg-7">
                    <h1 class="display-4">BigFive Travel Blog - <wbr> The Journey will never End.</h1>
                    <a class="link-underline mt-3 col-6" href="browse.php">Discover More</a>
            </div>
            <a class="continue text-gray-400 position-absolute bottom-0 mb-5 z-index-20 link-transition small text-uppercase"
                href="#intro"><i class="fa fa-long-arrow-alt-down"></i> Scroll Down
            </a>
        </div>
    </section>

    <section id="intro">
        <div class="container">
            <div class="col-lg-8">
                <h2>The Journey Will Never End!</h2>
                <p class="text-lg fw-light lh-lg mb-0"><strong>Memories are precious.</strong>
                    They deserved to be preserved. 
                    Come and share with us your precious moments!
                </p>
                <a class="link-underline mt-3" href="login.php"><strong>Create own travel blog</strong> </a>
            </div>
        </div>
    </section>

    <!-- Divider Section-->
    <section class="divider"
        style="background: url(https://d19m59y37dris4.cloudfront.net/blog/2-0/img/divider-bg.9efa09f1.jpg); background-size: cover; background-position: center bottom">
        <div class="container text-white">
            <div class="row">
                <div class="col-md-7">
                    <h2>Inspire or be inspired! Be sure to check out other latest adventures</h2>
                    <a class="link-underline mt-3" href="#latest">View More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Posts -->
    <section id="latest">
        <div class="container">
            <header class="mb-5">
                <h2>Latest from the blog</h2>
                <p class="text-lg fw-light">Never miss on the best moments.</p>
            </header>
            <div class="row gy-4">
                <div class="col-md-4"><a class="mb-3" href="https://www.getyourguide.com/-l169000/?cmp=ga&cq_src=google_ads&cq_cmp=16375542880&cq_con=133910963019&cq_term=brazil%20travelling&cq_med=&cq_plac=&cq_net=g&cq_pos=&cq_plt=gp&campaign_id=16375542880&adgroup_id=133910963019&target_id=kwd-3428487217&loc_physical_ms=9066768&match_type=e&ad_id=588628737836&keyword=brazil%20travelling&ad_position=&feed_item_id=&placement=&device=c&partner_id=CD951&gclid=Cj0KCQjwi46iBhDyARIsAE3nVrbskLJ3T0Rcl_KOfYZmkGyl70Z1kneGz17xPaHD4UllTqVOrWaePGQaAlKDEALw_wcB"
                ><img class="img-fluid" src="image/brazil.jpg"
                            alt="..." /></a>
                    <div class="d-flex align-items-center justify-content-between mb-2"><small class="text-gray-500">20
                            May | 2023</small></div>
                    <h5><a class="text-dark" href="https://www.getyourguide.com/-l169000/?cmp=ga&cq_src=google_ads&cq_cmp=16375542880&cq_con=133910963019&cq_term=brazil%20travelling&cq_med=&cq_plac=&cq_net=g&cq_pos=&cq_plt=gp&campaign_id=16375542880&adgroup_id=133910963019&target_id=kwd-3428487217&loc_physical_ms=9066768&match_type=e&ad_id=588628737836&keyword=brazil%20travelling&ad_position=&feed_item_id=&placement=&device=c&partner_id=CD951&gclid=Cj0KCQjwi46iBhDyARIsAE3nVrbskLJ3T0Rcl_KOfYZmkGyl70Z1kneGz17xPaHD4UllTqVOrWaePGQaAlKDEALw_wcB"
                    >Brazil</a></h5>
                    <p class="text-muted text-sm"> This is Brazil.</p>
                </div>
                <div class="col-md-4"><a class="mb-3" href="https://www.gohawaii.com/"><img class="img-fluid" src="image/hawaii.jpg"
                            alt="..." /></a>
                    <div class="d-flex align-items-center justify-content-between mb-2"><small class="text-gray-500">20
                            May | 2023</small>
                    </div>
                    <h5><a class="text-dark" href="https://www.gohawaii.com/">Hawaii</a></h5>
                    <p class="text-muted text-sm">This is Hawaii</p>
                </div>
                <div class="col-md-4"><a class="mb-3" href="https://bushisgo.rezio.shop/en-US?utm_source=google&utm_medium=cpc&utm_campaign=SS_MA_EN&utm_content=ippan&gclid=Cj0KCQjwi46iBhDyARIsAE3nVrbzi5v6tvx6W1pkPM1DKH78mHR6AQXxTXplCmrWT0k-McLZqs9rgicaApIREALw_wcB"
                ><img class="img-fluid" src="image/japan.jpg"
                            alt="..." /></a>
                    <div class="d-flex align-items-center justify-content-between mb-2"><small class="text-gray-500">20
                            May | 2023</small>
                    </div>
                    <h5><a class="text-dark" href="https://bushisgo.rezio.shop/en-US?utm_source=google&utm_medium=cpc&utm_campaign=SS_MA_EN&utm_content=ippan&gclid=Cj0KCQjwi46iBhDyARIsAE3nVrbzi5v6tvx6W1pkPM1DKH78mHR6AQXxTXplCmrWT0k-McLZqs9rgicaApIREALw_wcB"
                    >Japan</a>
                    </h5>
                    <p class="text-muted text-sm">This is Japan</p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="copyrights text-white py-4" style="background: #090909">
            <div class="container">
                <div class="row text-center gy-2">
                    <div class="col-md-12">
                        <p class="mb-0 fw-light text-sm">Copyright &copy;2023. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript files-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css" crossorigin="anonymous">
</body>



</html>