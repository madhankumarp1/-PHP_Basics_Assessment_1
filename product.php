<?php require 'templates/navbar.php' ?>


<style>
    .blog-post {
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        margin-bottom: 20px;
        padding: 20px;
        display: flex;
        align-items: center;
        flex-direction: column;
        width: 25%;
        border-color: #9aa39a;


    }

    .blog-list {
        width: 100%;
        display: flex;
        justify-content: center;
        /* align-items: center; */
        gap: 1em;
        flex-wrap: wrap;
    }
</style>
<?php

$db = require("db.php");
$config = require('config.php');
$databaseConnection = new DatabaseConnection($config);
$conn = $databaseConnection->getConnection();




$result = $conn->query("SELECT * FROM products");


echo "<div class='blog-list-center_head'>";
echo "<div class='blog-list-center'>";
echo "<div class='blog-list'>";

while ($row = $result->fetch_assoc()) {
    echo "<div class='blog-post'>";
    echo "<h1>Name : " . $row['name'] . "</h1>";
    echo "<p>Price: " . $row['price'] . "</p>";
    echo "<img src='data:image/jpeg;base64," . base64_encode($row['image']) . "' width='100'>";
    echo "<h5>Description : " . $row['description'] . "</h5>";
    echo "</div>";
}
echo "</div>";
echo "</div>";
echo "</div>";



?>


<?php require 'templates/footer.php' ?>