<?php 
include 'header.php';
include 'db.php';

if (isset($_POST['submit'])) {
    // Escaping special characters in the input fields
    $mv_name = mysqli_real_escape_string($con, $_POST['mv_name']);
    $mv_m_desc = mysqli_real_escape_string($con, $_POST['mv_m_desc']);
    $mv_m_tag = mysqli_real_escape_string($con, $_POST['mv_m_tag']);
    $mv_link1 = mysqli_real_escape_string($con, $_POST['mv_link1']);
    $mv_link2 = mysqli_real_escape_string($con, $_POST['mv_link2']);
    $mv_lang = mysqli_real_escape_string($con, $_POST['mv_lang']);
    $cat_id = (int)$_POST['cat_id'];  // Ensure category ID is an integer
    $genre_id = (int)$_POST['genre_id'];  // Ensure genre ID is an integer
    $mv_desc = mysqli_real_escape_string($con, $_POST['mv_desc']);
    $mv_director = mysqli_real_escape_string($con, $_POST['mv_director']);

    $mv_date = date('Y-m-d', strtotime($_POST['mv_date']));
    $target = "../thumb/" . basename($_FILES['img']['name']);
    $img = $_FILES['img']['name'];

    // Construct the query
    $query = "INSERT INTO movie (`cat_id`, `genre_id`, `mv_name`, `mv_des`, `mv_tag`, `link1`, `link2`, `img`, `date`, `lang`, `director`, `meta_description`) 
              VALUES ($cat_id, $genre_id, '$mv_name', '$mv_desc', '$mv_m_tag', '$mv_link1', '$mv_link2', '$img', '$mv_date', '$mv_lang', '$mv_director', '$mv_m_desc')";

    // Execute the query
    $run = mysqli_query($con, $query);

    // Check if the file is uploaded and query is successful
    if ($run && move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
        echo "<script>alert('Movie Successfully Added.. :)');window.location.href='movielist.php';</script>";
    } else {
        echo "<script>alert('Something Went Wrong!!.. :(');window.location.href='addmovie.php';</script>";
    }
}
?>
