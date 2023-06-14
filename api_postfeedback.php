<?php
require_once "init_db.php";
require_once "init_session.php";

# only run if is set
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if ( isset($_POST['setrating']) && isset($_POST["postid"]) ){
        return setRating($conn, $_POST['setrating'], $_POST['postid']);
    } else {
        http_response_code(404);
        include('404.php'); // provide your own HTML for the error page
        die();
    }
} else {
    http_response_code(404);
    include('404.php'); // provide your own HTML for the error page
    die();
}


function setRating($conn, $rating, $postid) {
    // make sure both are number
    if (
        !filter_var($rating, FILTER_VALIDATE_INT) ||
        !filter_var($postid, FILTER_VALIDATE_INT)
    ){
        http_response_code(404);
        include('404.php'); // provide your own HTML for the error page
        die;
    }
    if (empty($_SESSION['userid'])){
        return JSONresponse(401, ["message" => "Please login to give a rating."]);
    }
    $stmt = $conn->prepare("REPLACE INTO ratings (userid, postid, rating) VALUES (?,?,?)");
    $stmt->bind_param("iss", $_SESSION['userid'], $postid, $rating);
    if (!$stmt->execute()){
        http_response_code(500);
        die;
    }
    return JSONresponse(200, []);
}