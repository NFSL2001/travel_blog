<!DOCTYPE html>
<html lang="en">

<?php
include_once("init_db.php");
include_once("init_session.php");
?>

<head>
    <title>Travalog - Top country to visit. Must see.</title>

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
                        <li class="nav-item"><a class="nav-link active" href="my_posts.php">My Posts</a></li>
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


    <section class="pt-1">
        <div class="mt-0">

            <!-- header background image -->
            <div class="mb-4" style="height: 300px;
            background-image: url('./image/new_zealand.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;">
            </div>

            <!-- blog post content -->
            <div class="article-section container-sm pb-4">
                
                <div class="float-end me-2">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <!-- header, author -->
                <h2 id="article-header">New Zealand and its Railcar</h2>
                <p id="article-author" class="d-inline">by John Doe</p> | <p id="article-date" class="d-inline">15 May 2022</p><br>
                <p id="article-location" class="mt-1"><i class="fa fa-location-dot h6"></i> New Zealand</p>

                <!-- article -->
                <h5 id="article-subtitle" class="lead mt-4">Top country to visit. Must see.<br>
                    <small>This placeholder article is generated by AI. This webpage is not.</small>
                </h5>
                <article id="article" class="mb-4 center-block">
                    
<p>New Zealand is known for its stunning <i>natural landscapes</i>, and one of the best ways to see them is by railcar. The country's rail system offers a unique way to travel, allowing visitors to take in the beauty of the countryside while also enjoying a comfortable and relaxing ride.</p><h4>My journey there</h4><p>My journey through New Zealand began in Auckland, the country's largest city. From there, I hopped on the Northern Explorer, a train that takes passengers on a scenic journey through the heart of the North Island. The train was comfortable and well-appointed, with large windows that offered stunning views of the surrounding countryside.</p><p>As we made our way south, the scenery changed from lush forests to rolling hills, and eventually to the rugged coastline. Along the way, we passed through small towns and villages, each with its own unique charm and character. I particularly enjoyed the stop in the town of National Park, which is located near the Tongariro National Park. The scenery here was simply breathtaking, with snow-capped mountains and crystal-clear lakes stretching as far as the eye could see.</p><h4>Second day</h4><p>After a night in National Park, I continued south on the train to Wellington, the capital of New Zealand. This leg of the journey was equally scenic, with the train winding its way through the mountains and along the coast. The train was equipped with comfortable seating and a dining car, where I was able to enjoy a delicious meal while taking in the stunning views.</p><h4>My thoughts</h4><p>Overall, my experience traveling through New Zealand on a railcar was unforgettable. The scenery was stunning, the train was comfortable and well-appointed, and the people I met along the way were friendly and welcoming. I would highly recommend this mode of travel to anyone looking to explore the natural beauty of New Zealand in a unique and memorable way.</p>
                </article>

                <!-- tags -->
                <div class="container p-0">
                    <a href="" class="tags btn btn-sm btn-outline-secondary mx-1 my-1">Europe</a>
                    <a href="" class="tags btn btn-sm btn-outline-secondary mx-1 my-1">New Zealand</a>
                    <a href="" class="tags btn btn-sm btn-outline-secondary mx-1 my-1">happy</a>
                    <a href="" class="tags btn btn-sm btn-outline-secondary mx-1 my-1">visit</a>
                    <a href="" class="tags btn btn-sm btn-outline-secondary mx-1 my-1">railcar</a>
                </div>
            </div>

            <!--comment section-->
            <div class="comment-section container-sm align-items-middle pt-4">
                <h6>Comments</h6>
                <div class="list">
                    <!-- one comment -->
                    <div class="comment-item d-flex py-3">
                        <!-- pfp and user info-->
                        <div class="comment-user d-flex overflow-hidden pe-4">
                            <div class="user-image"><img src="image/profile_man.jpeg" alt="man"></div>
                            <div class="user-meta">
                                <div class="name">Alex</div>
                                <div class="day small">13 days ago</div>
                            </div>
                        </div>
                        <div class="comment-post">Thank you for the suggestion. Love it there.</div>
                    </div>

                </div>

                <div class="comment-box py-3 overflow-hidden">
                    <!--star rating-->
                    <div class="star-widget float-end">
                        <span class="subtitle me-2">Your rating</span>
                        <input type="radio" name="rate" id="rate-5">
                        <label for="rate-5" class="fa fa-star"></label>
                        <input type="radio" name="rate" id="rate-4">
                        <label for="rate-4" class="fa fa-star"></label>
                        <input type="radio" name="rate" id="rate-3">
                        <label for="rate-3" class="fa fa-star"></label>
                        <input type="radio" name="rate" id="rate-2">
                        <label for="rate-2" class="fa fa-star"></label>
                        <input type="radio" name="rate" id="rate-1">
                        <label for="rate-1" class="fa fa-star"></label>
                        <form action="#">
                    </div>

                    <div class="comment-user py-2 d-flex">
                        <div class="user-image"><img src="image/profile_woman.jpg" alt="woman"></div>
                        <div class="name">Rachel</div>
                    </div>
                    
                    <form action="" method="post" class="m-2">
                        <textarea name="comment" id="comment" class="w-100 p-2" rows="4"
                            placeholder="Type your message here..."></textarea>
                        <button type="submit" class="btn btn-dark float-end">Comment</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <br>

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

    <!-- JavaScript for star widget -->
    <script>
        const widget = document.querySelector(".star-widget");
        btn.onclick = () => {
            widget.style.display = "none";
            editBtn.onclick = () => {
                widget.style.display = "block";
            }
            return false;
        }
    </script>
    <!-- JavaScript files-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css" crossorigin="anonymous">
</body>

</html>