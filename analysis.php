<!DOCTYPE html>
<html lang="en">

<?php
require_once("init_db.php");
require_once("init_session.php");
require_once("init_check_logged_in.php"); // only for pages that strictly require login
?>

<head>
    <title>Travel Blog - Analysis</title>

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

    <!-- jQuery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <!-- JS chart library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js"></script>

    <!--CSS overwrite-->
    <link rel="stylesheet" href="css/cards-gallery.css">
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
                            <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                        </ul>
                    </li>
                        
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="container">
            <div class="container section-title ">
                <h2>Analysis</h2>
                <p>
                    Let's see what you've done so far.
                </p>
            </div>

            <!--3x2 card gallery-->
            <section class="gallery-block cards-gallery">

                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0 transform-on-hover">
                                <picture>
                                    <canvas id="pieChart" style="width:100%;max-width:270px"></canvas>
                                </picture>
                                <div class="card-body">
                                    <h6><a href="#" class="stretched-link">Rating Ratio</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0 transform-on-hover">
                                <picture>
                                    <canvas id="verticalBarChart" style="width:100%;max-width:335px"></canvas>
                                </picture>
                                <div class="card-body">
                                    <h6><a href="#" class="stretched-link">Weekly View Count</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0 transform-on-hover">
                                <picture>
                                    <canvas id="horizontalBarChart" style="width:100%;max-width:330px"></canvas>
                                </picture>
                                <div class="card-body">
                                    <h6><a href="#" class="stretched-link">Your Top Posts</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0 transform-on-hover">
                                <picture>
                                    <canvas id="verticalBarChart2" style="width:100%;max-width:335px"></canvas>
                                </picture>
                                <div class="card-body">
                                    <h6><a href="#" class="stretched-link">Weekly Posts Published</a></h6>
                                </div>
                            </div>
                        </div>

                        <!--comments-->
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0 transform-on-hover">
                                <picture>
                                    <canvas id="comments" style="width:100%;max-width:335px"></canvas>
                                </picture>
                                <div class="card-body">
                                    <h6><a href="#" class="stretched-link">Weekly Comments Published</a></h6>
                                </div>
                            </div>
                        </div>


                        <!--FAKE Location-->
                        <!--   <div class="col-md-6 col-lg-4">
                               <div class="card border-0 transform-on-hover">
                                   <picture>
                                       <canvas id="Locations" style="width:100%;max-width:600px"></canvas>
                                   </picture>
                                   <div class="card-body">
                                       <h6><a href="#" class="stretched-link">Location </a></h6>
                                   </div>
                               </div>
                           </div>


                          FAKE age
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0 transform-on-hover">
                                <picture>
                                    <canvas id="ages" style="width:100%;max-width:335px"></canvas>
                                </picture>
                                <div class="card-body">
                                    <h6><a href="#" class="stretched-link">Age and views </a></h6>
                                </div>
                            </div>
                        </div>-->

                    </div>
                </div>
            </section>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- chart library -->
    <script>
        $(document).ready(function() {
            showGraph();
        });

        const showGraph = () => {
            $.post("api_analysis.php", function(data) {
                console.log(data);
                //data = JSON.parse(data); // parse data from JSON string into object
                
                var ratings = data["rating"];
                // const possibleRatings = [1, 2, 3, 4, 5];
                // // loop through each rating and add total = 0
                // possibleRatings.forEach(rating => {
                //     const hasRating = ratings.some(r => r.rating === rating);
                //     if (!hasRating) {
                //         ratings.push({ rating, total: 0 });
                //     }
                // });
                // sort rating by ascending order
                ratings.sort((a,b) => a.rating - b.rating);
                var ratingtitle = ratings.map(rating => rating.rating + " star" + (rating.rating > 1 ? "s" : "")),
                ratingscore = ratings.map(rating => rating.total);
                
                Chart.register(ChartDataLabels);
                
                // pie chart
                new Chart("pieChart", {
                    type: "pie",
                    data: {
                        labels: ratingtitle, // header
                        datasets: [{
                            backgroundColor: ["#0e6573", "#008e89", "#00b680", "#73da5d", "#e0f420",],
                            data: ratingscore // value
                        }]
                    },
                    options: {
                        plugins: {
                            legend: {
                                display: true,
                            },
                            datalabels: {
                                color: 'black',
                                labels: {
                                    title: {
                                        font: {
                                            weight: 'bold'
                                        }
                                    }
                                }
                            }
                        }
                    }
                });


                var views = data["mostviews"];
                var viewstitle = views.map(mostviews => mostviews.title + (mostviews.title > 1 ? "s" : "")),
                    viewcount = views.map(mostviews => mostviews.viewcount);

                // vertical bar chart
                new Chart("verticalBarChart", {
                    type: "bar",
                    data: {
                        //labels: ["Mon", "Tues", "Wed", "Thurs", "Fri", "Sat", "Sun"], // x axis
                        labels: viewstitle,
                        datasets: [{
                            backgroundColor: ["#fd7f6f", "#7eb0d5", "#b2e061", "#bd7ebe", "#ffb55a", "#ffee65", "#beb9db", "#fdcce5", "#8bd3c7"]
,
                            //data: [0, 0, 0, 0, 0, 0, 0] // y axis
                            data: viewcount
                        }]
                    },
                    options: {
                        plugins: {
                            legend: {
                                display: false
                            },
                            datalabels: {
                                color: 'black',
                                labels: {
                                    title: {
                                        font: {
                                            weight: 'bold'
                                        }
                                    }
                                }
                            }
                        },
                        scales: {
                            y: {
                                title: {
                                    display: true,
                                    text: 'View Count'
                                }
                            }
                        }
                    }
                });




                var avgrating = data["topposts"];
                var viewstitle = avgrating.map(topposts => topposts.title + (topposts.title > 1 ? "s" : "")),
                    avg_rating = avgrating.map(topposts => topposts.avg_rating);


                // horizontal bar chart  avg_rating
                new Chart("horizontalBarChart", {
                    type: 'bar',
                    data: {
                        //labels: ["Japan", "Korea", "UK", "New Zealand"], // x axis
                        labels: viewstitle,
                        datasets: [{
                                backgroundColor: ["lightsalmon", "lightgreen", "deepskyblue", "deepskyblue"],
                                data: avg_rating // y axis
                                //data: [4.667, 3.667, 3.667, 2.667] // y axis
                            }
                        ]
                    },
                    options: {
                        plugins: {
                            legend: {
                                display: false
                            },
                            datalabels: {
                                color: 'black',
                                labels: {
                                    title: {
                                        font: {
                                            weight: 'bold'
                                        }
                                    }
                                }
                            }
                        },
                        scales: {
                            y: {
                                title: {
                                    display: true,
                                    text: 'Star Rating'
                                }
                            }
                        },
                    }
                });



                var weeklyposts = data["postweek"];
                var postdate = weeklyposts.map(postweek => postweek.postdate + (postweek.postdate > 1 ? "s" : "")),
                    posttotal = weeklyposts.map(postweek => postweek.total);

                // vertical bar chart 2
                new Chart("verticalBarChart2", {
                    type: "bar",
                    data: {
                        //labels: ["Mon", "Tues", "Wed", "Thurs", "Fri", "Sat", "Sun"], // x axis
                        labels: postdate,
                        datasets: [{
                            backgroundColor: ["burlywood", "lightgreen", "deepskyblue", "lightsalmon", "wheat", "pink", "violet"],
                            //data: [1, 1, 1, 1, 2, 4, 2] // y axis
                            data: posttotal
                        }]
                    },
                    options: {
                        plugins: {
                            legend: {
                                display: false
                            },
                            datalabels: {
                                color: 'black',
                                labels: {
                                    title: {
                                        font: {
                                            weight: 'bold'
                                        }
                                    }
                                }
                            }
                        },
                        scales: {
                            y: {
                                title: {
                                    display: true,
                                    text: 'Posts Published'
                                },
                                // make y-axis scale as whole numbers
                                ticks: {
                                    callback: function(value) {if (value % 1 === 0) {return value;}}
                                }
                            }
                        }
                    }
                });


                var comments = data["commentweek"];
                //commentweek=comments.total_count*7;
                var commentsdate = comments.map(commentweek => commentweek.commentdate + (commentweek.commentdate > 1 ? "s" : "")),
                    commentstotal= comments.map(commentweek => commentweek.total_count);

                // vertical bar chart 2
                new Chart("comments", {
                    type: "bar",
                    data: {
                        //labels: ["Mon", "Tues", "Wed", "Thurs", "Fri", "Sat", "Sun"], // x axis
                        labels: commentsdate,
                        datasets: [{
                            backgroundColor: ["burlywood", "lightgreen", "deepskyblue", "lightsalmon", "wheat", "pink", "violet"],
                            //data: [1, 1, 1, 1, 2, 4, 2] // y axis
                            data: commentstotal
                        }]
                    },
                    options: {
                        plugins: {
                            legend: {
                                display: false
                            },
                            datalabels: {
                                color: 'black',
                                labels: {
                                    title: {
                                        font: {
                                            weight: 'bold'
                                        }
                                    }
                                }
                            }
                        },
                        scales: {
                            y: {
                                title: {
                                    display: true,
                                    text: 'Posts Published'
                                },
                                // make y-axis scale as whole numbers
                                ticks: {
                                    callback: function(value) {if (value % 1 === 0) {return value;}}
                                }
                            }
                        }
                    }
                });



            /*    //Location fake
                var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
                var yValues = [55, 49, 44, 24, 15];
                var barColors = [
                    "#b91d47",
                    "#00aba9",
                    "#2b5797",
                    "#e8c3b9",
                    "#1e7145"
                ];

                new Chart("Locations", {
                    type: "doughnut",
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: yValues
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            text: "World Wide Wine Production 2018"
                        }
                    }
                });
*/

                /*
               const xValues2 = [100,200,300,400,500,600,700];
               const yValues2 = [20,25,30,35,40,45,50,55];
              new Chart("ages", {
                   type: "line",
                   data: {
                       labels: xValues2,
                       datasets: [{
                           fill: false,
                           lineTension: 0,
                           backgroundColor: "rgba(0,0,255,1.0)",
                           borderColor: "rgba(0,0,255,0.1)",
                           data: yValues2
                       }]
                   },
                   options: {
                       legend: {display: false},
                       scales: {
                           yAxes: [{ticks: {min: 6, max:16}}],
                       },
                       title: {
                           display: true,
                       }
                   }
               });*/



            })
        }
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css" crossorigin="anonymous">
</body>