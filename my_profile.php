<!DOCTYPE html>
<html lang="en">

<?php
include_once("init_db.php");
include_once("init_session.php");
include_once("init_check_logged_in.php"); // only for pages that strictly require login
?>

<head>
    <title>Travalog - Contact Us</title>
    
    <!--Bootstrap implementation-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cards-gallery.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- Theme stylesheet-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/blog/2-0/css/style.default.622904dd.css"
        id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
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
                    <li class="nav-item"><a class="nav-link " href="index.php">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link " href="browse.php">Browse</a>
                    </li>
                    <li class="nav-item"><a class="nav-link " href="search.php">Search</a>
                    </li>
                    <li class="nav-item"><a class="nav-link " href="contact.php">Contact</a>
                    </li>
                    
                    <li class="nav-item"><a class="nav-link " href="my_posts.php">My Posts</a></li>
                    <li class="nav-item dropdown">
                        <a class="btn btn-style btn-dark ms-2 px-3 py-2 dropdown-toggle " href="#" id="navbarUserMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        @<?php echo $_SESSION["username"]; ?>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarUserMenuLink">
                        <li><a class="dropdown-item" href="analysis.php">Analysis</a></li>
                        <li><a class="dropdown-item" href="my_profile.php">Edit profile</a></li>
                        <li><a class="dropdown-item" href="index.php">Log out</a></li>
                        </ul>
                    </li>
                        
                </ul>
            </div>
        </div>
    </nav>
    
    <section>
        <div class="container">
            <div class="container section-title ">
                <h2>My Profile</h2>
                <p>
                    Show my best side to all of the world!
                </p>
            </div>

            <form action="#" method="post" class="section-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-12 form-label">
                                    <label for="fname"><b>Username</b></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                        <input type="text" id="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-label">
                                    <label for="name"><b>Name</b></label>
                                    <input type="text" id="name" class="form-control" required>
                                </div>
                                <div class="col-md-6 form-label">
                                    <label for="displayname"><b>Display Name</b></label>
                                    <input type="text" id="displayname" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-label">
                                    <label for="email"><b>Email Address</b></label>
                                    <input type="text" id="email" class=" form-control" required>
                                </div>
                                <div class="col-md-6 form-label">
                                    <label for="tel"><b>Tel. Number</b></label>
                                    <input type="text" id="tel" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-label">
                                    <label for="email"><b>Profile introduction</b></label>
                                    <textarea id="message" rows="4" class="form-control"></textarea>
                                </div>
                            </div>
                            <span>Leave blank if you do not want to change password.</span>
                            <div class="row">
                                <div class="col-md-6 form-label">
                                    <label for="oldpassword"><b>Old Password</b></label>
                                    <input type="password" id="oldpassword" class="form-control" required>
                                </div>
                                <div class="col-md-6 form-label">
                                    <label for="newpassword"><b>New Password</b></label>
                                    <input type="password" id="newpassword" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 form-label float-md-end">
                            <picture>
                                <img src="image/profile_man.jpeg" class="img-fluid card-img-top" alt="...">
                            </picture>
                            <div class="col form-label">
                                <input type="file" class="form-control" id="inputGroupFile01">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <input type="submit" value="Save" class="btn btn-dark py-3 px-5" id="sub">
                        </div>
                    </div>
                    <br>
                    <small class="text-small">Not happy with our service? 
                        <a href="#">Delete account.</a>
                    </small>
                </div>
            </form>
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


<script>
    //need to save to DB
    document.getElementById("sub").onclick = function (){
        //todo later do
    }
</script>
</html>