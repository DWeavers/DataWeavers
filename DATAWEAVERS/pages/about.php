<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Data Weavers</title>
  
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
      width: 1000px;
      margin: 0 auto;
      padding: 15px;
      border-radius: 20px;
      box-shadow: 20px 6px 78px rgba(0, 0, 0, 0.1);
      background-color:rgb(196, 192, 192);
      position: absolute;
      top: 10%;
      left: 17%;
    }

    h1 {
      color: #007bff;
      text-align: center;
    }

    p {
      font-size: 22px;
      line-height: 1.6;
      
   
    }

    .about {
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
       background-size: 100% 1050px ;
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
      
      <a style="color: rgb(102, 174, 241);">About</a>
      <a href="contact.php">Contact</a>
    </ul>
  </div>

  <div class="container">
    <h1>About Us</h1>
    <div class="about">
      <p>Welcome to Data Weavers, your trusted data management solution.</p>
      <p>At Data Weavers, we specialize in helping and organizing the efficiently manage and analyze your data. With a team of experienced data scientists and engineers, we provide innovative solutions to extract valuable insights from your data.</p>
      
      <p>Whether you're a small startup or a large enterprise, we tailor our services to meet your specific needs and goals. We are committed to delivering accurate, reliable, and actionable data solutions to help you make informed decisions.</p>
      <p>Contact us today to learn more about how Data Weavers can empower your business with data!</p>
    </div>
  </div>

</body>
</html>
