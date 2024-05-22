<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Data Weavers</title>
  
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background: url(mountain.jpg);
      background-size: 100% 1000px ;
       background-repeat: no-repeat;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0 5px 8px rgba(0, 0, 0, 0.1);
      background-color:rgb(196, 192, 192);
      position: absolute;
      top: 15%;
      left: 23%;
    }

    h1 {
      color: #007bff;
      text-align: center;
    }

    p {
      font-size: 18px;
      line-height: 1.6;
    }

    .about-info {
      margin-top: 20px;
    }
    .nav {
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    left: 1%;
    top: 20px;
    text-decoration: none;
    font-size: 50px;
    
    
  }
  .nav a{
    color: #5f5f5f;
    text-decoration: none;
    font-size: 40px;
    padding-left: 40px;
  }
  .nav a:hover{
    color: #93978ebd;
}
  @media only screen and (max-width: 500px) {
   
   .container {
       max-width: 410px;
       backdrop-filter: blur(25px);
       border-radius: 50px;
       box-shadow: 0 0 20px 18px rgba(0, 0, 0, 0.1);
       position: absolute;
       left: 5%;
       top: 25%;
       
   
   }
   body {
       font-family: Arial, sans-serif;
       background: url(mountain.jpg);
       background-size: 100% 1000px ;
       background-repeat: no-repeat;
       margin: 0;
       padding: 0;
   
     }
     .nav a{
      color: #5f5f5f;
    text-decoration: none;
    font-size: 20px;
    padding-left: 20px;
  }
  }
  </style>
</head>
<body>

  <div class="nav">
   
        <a href="../index.php">Home</a>
      
      <a href="about.php">About</a>
      <a style="color: rgb(102, 174, 241);">Contact</a>
    </ul>
  </div>

  <div class="container">
    <h1>Contact Us</h1>
    <div class="contact">
   
      <p>Welcome to Data Weavers, your trusted data management solution.</p>
      <p>FACEBOOK: DataWeaver@facebook.com</p>
      <p>EMAIL: DataWeavers@gmail.com</p>
      <p>CONTACT NUMBER: 09875385271</p><br>
      <p>If you forgot you're password:</p>
      <ul>
        <li>Step 1: Message us in any contact that we Provided</li>
        <li>Step 2: Just wait until we recieved you're message</li>
        <li>Step 3: After we recieved you're message, we will  send you're NEW or OLD password (depends on you) on you're
          contact that you provide.
       
    </div>
  </div>

</body>
</html>
