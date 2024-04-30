<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <head>
        <title>BLOG</title>
    </head>
</head>

<body>

    <?php require 'templates/navbar.php' ?>
    <style>
        .blog-list {
            list-style: none;
            padding: 0;
        }

        .blog-post {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 20px;
            border-color: #9aa39a;

        }

        .blog-post h3 {
            margin-top: 0;
        }

        .blog-post p {
            margin-bottom: 10px;
        }

        .blog-post p:last-child {
            margin-bottom: 0;
        }

        .blog-list {
            max-height: 40em;
            overflow-y: scroll;
            width: 80%;
        }

        .blog-list-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <?php

    $db = require("db.php");
    $config = require('config.php');
    $databaseConnection = new DatabaseConnection($config);
    $conn = $databaseConnection->getConnection();




    $result = $conn->query("SELECT * FROM blog");

    echo "<div class='blog-list-center'>";
    echo "<div class='blog-list'>";

    while ($row = $result->fetch_assoc()) {
        echo "<div class='blog-post'>";
        echo "<h1>Title : " . $row['Title'] . "</h1>";
        echo "<p>content: " . $row['content'] . "</p>";
        echo "<h3> Author : " . $row['Author'] . "</h3>";
        echo "<h4>createdAt : " . $row['createdAt'] . "</h4>";
        echo "<h5>status : " . $row['status'] . "</h5>";
        echo "</div>";
    }
    echo "</div>";
    echo "</div>";



    ?>


    <?php require 'templates/footer.php' ?>
</body>

</html>