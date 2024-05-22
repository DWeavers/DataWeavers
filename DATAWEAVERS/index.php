<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Weavers</title>
  
  <style>
    body {
      font-family: Arial, sans-serif;
      background:url(mountain.jpg);
      background-repeat: no-repeat;
      background-size: 100% 1000px;
    }

    .hero {
      position: relative;
      height: 100vh;
      color: #fff;
      text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 20px;
      box-sizing: border-box;
    }

    .hero h1 {
      font-size: 48px;
      margin-bottom: 20px;
    }

    .hero p {
      font-size: 24px;
      line-height: 1.5;
      margin-bottom: 30px;
    }

    .button {
      margin-top: 20px;
    }

    .button a {
      display: inline-block;
      padding: 12px 24px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      font-size: 24px;
      
    }

    .button a:hover {
      background-color: #0056b3;
    }
    .get{
      position: absolute;
      top: 10%;
      left: 33%;
      font-size: 100px;
      color: rgb(131, 173, 76);
    }

    .admin {
    color: white;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
     font-size: 25px;
     font-weight: 500;
     position: absolute;
    bottom: 150px;
    left: 44%;
  }
    @media only screen and (max-width: 700px) {
      .get{
      position: absolute;
      top: 15%;
      left: 22%;
      font-size: 55px;
      color: rgb(131, 173, 76);
    }
    .admin {
    color: white;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
     font-size: 25px;
     font-weight: 500;
     position: absolute;
     bottom:100px;
     left:130px;

  }

}
  



  </style>
</head>
<body>
  <h1 class="get">Get Started!</h1>

  <div class="hero">
    <h1>Welcome to Data Weavers</h1>
    <p>Your Trusted Data Management Solution</p>
    <div class="button">
      <a href="./pages/signup.php">Sign Up</a>
      <a href="./pages/login.php">Log In</a>
      
    </div>
    <a class="admin"  href="./admin/adminlogin.php">Log In As Admin!</a>
  </div>

</body>
</html>
