<?php 
    include '../config/dbconfig.php';
    if ($_SESSION['permission'] == 1) {


        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }

        $query = "DELETE FROM posts WHERE post_id = :id";
        $query = $conn->prepare($query);

        $query->execute(['id'=>$id]);

        header("Location: index.php?page=posts");

    } else {
        header("Location: test.php");
    }
?>