<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Aqua Adventures</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="script.js"></script>
  <style>
    /* Add your additional styles here if needed */
  </style>
</head>
<body>
  <nav>
    <div class="navbar">
      <div class="logo"><a href="#"><img src="aqua.png" alt="Aqua Logo"></a></div>
      <div class="nav-links">
        <ul class="links">
          <li><a href="index.html">HOME</a></li>
          <li>
            <a href="services.php">SERVICES</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow'></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="jetskis.php">JETSKIS</a></li>
              <li><a href="boats.php">BOATS</a></li>
            </ul>
          </li>
          <li><a href="contact.php"><span>CONTACT US!</span></a></li>
        </ul>
      </div>
    </div>
  </nav>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jetski Booking Page</title>
    <style>
         body {
            margin: 60px; /* Reset default body margin */
            padding: 100; /* Reset default body padding */
        }

        h2 {
            font-size: 26px; /* Adjust the font size as needed */
            letter-spacing: 2px;
        }
        .image-container {
            overflow-x: scroll;
            white-space: nowrap;
            text-align: center;
        }

        .image-container img {
            max-width: 300px;
            height: auto;
            margin: 20px;
            transition: transform 0.3s ease-in-out;
        }

        .image-container img:hover {
            transform: scale(1.8);
        }

        .image-container::-webkit-scrollbar {
            height: 12px;
        }

        .image-container::-webkit-scrollbar-thumb {
            background-color: #888;
        }

        .image-container::-webkit-scrollbar-track {
            background-color: #f1f1f1;
        }
        a {
    display: inline-block;
    padding: 10px 20px; /* Adjust the padding to make it a square button */
    background-color: #4CAF50; /* Set the background color */
    color: #fff; /* Set the text color */
    text-decoration: none;
    border-radius: 5px; /* Add rounded corners */
    transition: box-shadow 0.3s ease-in-out;
}

a:hover {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Add shadow on hover */
}
    </style>
</head>
<body>
    <h2>JETSKIS</h2>

    <?php
    include 'db_connection.php';

    // Fetch Jetski information from the database
    $sql = "SELECT * FROM Jetskis";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h3>" . $row["Model"] . "</h3>";

            // Fetch Jetski images from the JetskiImages table
            $imageSQL = "SELECT ImageURL FROM JetskiImages WHERE JetskiID = " . $row["JetskiID"];
            $imageResult = $conn->query($imageSQL);

            if ($imageResult->num_rows > 0) {
                echo "<div class='image-container'>";
                while ($imageRow = $imageResult->fetch_assoc()) {
                    echo "<img src='" . $imageRow["ImageURL"] . "' alt='" . $row["Model"] . "'>";
                }
                echo "</div>";
            } else {
                echo "Images not available<br>";
            }

            echo "Price: $" . $row["HourlyRate"] . " per hour<br>";
            echo "<a href='book_jetski.php?id=" . $row["JetskiID"] . "'>Book Now</a>";
            echo "</div><hr>";
        }
    } else {
        echo "No Jetski models available.";
    }

    $conn->close();
    ?>
</body>
</html>
