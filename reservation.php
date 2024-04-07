<?php  
 include("db.php");
 include("header.php");
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  .img-container {
      position: relative;
      text-align: center;
      color: white;
    }
    .img-image {
      width: 100%;
      height: auto;
    }
    .img-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    .container {
      display: flex;
      justify-content: space-around;
      align-items: center;
      margin-top: 20px;
    }
    .flex-box {
      flex: 1;
      padding: 20px;
    }
    .image-box img {
      width: 100%;
      height: auto;
    }
    .form-box form {
      max-width: 300px;
      margin: 0 auto;
    }
  </style>
</head>
<body>
<!-- Your HTML content -->
</body>
</html>
In this example, I've added some basic CSS styles for the provided HTML structure. You can further customize and add more styles based on your design requirements. If you have an external CSS file (e.g., style.css), you can link it using the <link> tag within the <head> section instead of adding styles directly in the <style> tag.

add more styling
Certainly! Here's an extended example with additional CSS styles for the provided HTML:

html
Copy
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <style>
    /* Global styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    h1, h2 {
      text-align: center;
    }
    p {
      text-align: center;
    }
    /* Image container */
    .img-container {
      position: relative;
      text-align: center;
      color: white;
      margin-top: 20px;
    }
    .img-image {
      width: 100%;
      height: auto;
    }
    .img-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    /* Flexbox layout for form and image */
    .flex-box {
      /* display: flex;
      justify-content: space-around;
      align-items: center; */
      margin-top: 20px;
    }
    .image-box img {
      width: 30%;
      margin-right:520px;
      height: auto;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-box form {
        
      max-width: 300px;
      margin: 50px;

    }
    label, input, select {
      display: block;
      margin-bottom: 10px;
    }
    input, select {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
    </style>
  </head>
<body>
<div class="img-container">
    <img class="img-image" src="./img/reservation.avif" alt=" Image">
    <div class="img-content">
      <h1>Reservation</h1>
      <p>Tickle your tastebuds</p>
    </div>
  </div>
  <div class="container">
    <div class="flex-box image-box">
      <img src="images/reser.jpg"  width="50" height="50">
    </div>
    <div class="flex-box form-box">
      <form>
        <h2>Book your seat</h2>
        <label for="number">Select a number (1-10):</label>
        <select id="number" name="number">
          
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="1">3</option>
          <option value="2">4</option>
          <option value="1">5</option>
          <option value="2">6</option>
          <option value="1">7</option>
          <option value="2">8</option>
          <option value="1">9</option>
          <option value="2">10</option>
          

        </select>

        <label for="date">Select a date:</label>
        <input type="date" id="date" name="date">

        <label for="time">Select a time:</label>
        <input type="time" id="time" name="time">

        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name">

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email">

        <label for="phone">Your Phone:</label>
        <input type="tel" id="phone" name="phone">

        <button type="button">Confirm</button>
      </form>
    </div>
  </div>

</body>
</html>

</body>
</html>
