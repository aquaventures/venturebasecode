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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reservation Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    form {
      max-width: 600px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input,
    select {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      box-sizing: border-box;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
     h2 {
      padding-top: 40px;
    }
  </style>
</head>
<body>

  <h2>BOOK NOW!</h2>

  <form action="process_reservation.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" required>

    <label for="date">Select Date:</label>
    <input type="date" id="date" name="date" required>

    <label for="time">Select Time:</label>
    <select id="time" name="time" required>
      <option value="7:00 AM - 8:00 AM">7:00 AM - 8:00 AM</option>
      <option value="8:00 AM - 9:00 AM">8:00 AM - 9:00 AM</option>
      <option value="9:00 AM - 10:00 AM">9:00 AM - 10:00 AM</option>
      <option value="10:00 AM - 11:00 AM">10:00 AM - 11:00 AM</option>
      <option value="11:00 AM - 12:00 PM">11:00 AM - 12:00 PM</option>
      <option value="12:00 PM - 1:00 PM">12:00 PM - 1:00 PM</option>
      <option value="1:00 PM - 2:00 PM">1:00 PM - 2:00 PM</option>
      <option value="2:00 PM - 3:00 PM">2:00 PM - 3:00 PM</option>
      <option value="3:00 PM - 4:00 PM">3:00 PM - 4:00 PM</option>
      <option value="4:00 PM - 5:00 PM">4:00 PM - 5:00 PM</option>
      <option value="5:00 PM - 6:00 PM">5:00 PM - 6:00 PM</option>
      <option value="6:00 PM - 7:00 PM">6:00 PM - 7:00 PM</option>
      <option value="7:00 PM - 8:00 PM">7:00 PM - 8:00 PM</option>
      <!-- Add more time options as needed -->
    </select>

    <label for="vehicle">Select Rental Type:</label>
    <select id="vehicle" name="vehicle" required>
      <option value="boat">Boat</option>
      <option value="jetski">Jet Ski</option>
    </select>

    <button type="submit">Submit Reservation</button>
  </form>

</body>
</html>
