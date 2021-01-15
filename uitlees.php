<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="STYLESHEET" type="text/css" href="style.css">
    <title>Foto Upload</title>
</head>
<body>
    <div id="content">
    <?php 
        $db = $mysqli_connect("localhost", "root", "", "photo");
        $sql = "SELECT * FROM images";
        $result = $mysqli_query($db, $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo "<div id='img_div'>";
                echo "<img src='images/".$row ['image']."' >";
                echo "<p>". $row['text']. "</p>";
            echo "</div>";
        }

    ?>


</body>
</html>