    <!DOCTYPE html>
          <html lang="en">
          <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Log In Data Weavers</title>

      <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: url(mountain.jpg);
    background-size: 100% 1000px ;
       background-repeat: no-repeat;
}



.welcome {
   
    color: black;
    margin-top: 6%;
    font-size: 30px;
    position: absolute;
    top: 10%;
    left: 30px;
}
.welcome p{
   font-size: 25px;
   font-style: italic;
  
position: absolute;
top: 55%;
   
}
.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 15px;
  
    backdrop-filter: blur(25px);
    border-radius: 50px;
    box-shadow: 0 0 20px 18px rgba(0, 0, 0, 0.1);
    position: absolute;
    left: 55%;
    top: 20%;

}



.container h2 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 30px;
}

.id,
.pass {
    margin-bottom: 15px;
}



.id label,
.pass label {

    font-size: 25px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
   
}

input::placeholder{
    color: gray;
}
.id input,
.pass input {
    width: 560px;
   padding: 5px;
   border: none;
   outline: none;
   border-bottom: 3px solid black;
   text-decoration-line: underline;
   background-color: transparent;
font-size: 25px;

  text-decoration: none;

}

button {
    width: 100%;
    padding: 10px;
    background-color: #45994c;
    color: rgb(2, 2, 2);
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 20px;
    text-transform: uppercase;
}

button:hover {
    background-color: green;
    color: #fff;
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
  p{
    margin-left: 150px;
   font-size: 20px;
   color: #000000;
   }
   .welcome p{
color: #000000;
margin-left: 10px;
  }
  @media only screen and (max-width: 500px) {
   
   .container {
       max-width: 395px;
       backdrop-filter: blur(25px);
       border-radius: 50px;
       box-shadow: 0 0 20px 18px rgba(0, 0, 0, 0.1);
       position: absolute;
       left: 5%;
       top: 25%;
       
   
   }
   .id input,
   .pass input {
       width: 400px;
   }
   
       
   .nav a{
    color: #5f5f5f;
       text-decoration: none;
       font-size: 20px;
       padding-left: 20px;
     }
       
     
   body {
       font-family: Arial, sans-serif;
       background: url(mountain.jpg);
       background-size: 100% 800px ;
       background-repeat: no-repeat;
       margin: 0;
       padding: 0;
   
     }
   
     .data{
     visibility: visible;
     font-size: 30px;
     color: black;
     margin-top: 5px;
     
     
    }
   .welcome{
     visibility: collapse;
   }
   p{
       margin-left: 50px;
      font-size: 20px;
      color: #000000;
      }
   }
</style>
</head>
<body>

 

<div class="welcome">

  <h1 class="data">Welcome to Data Weavers!</h1>
  <p>Thank you for visiting our website!<br>
  We are dedicated to providing a secure login experience.<br>
  Your data security is our top priority.<br>
  All information is encrypted for your protection.</p>
</div>
<div class="nav">
<a href="../index.php">Home</a>
<a href="about.php">About</a>
<a href="contact.php">Contact</a>

</div>
<form action="../function/function.php" method="POST">
  <div class="container">
    <h2>Login Form</h2>
    
    <div class="id">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"  required>
    </div>

    <div class="pass">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"  required>
    </div>

    <button name="login" id="login" type="submit">Login</button>


  <p>Don't have an account? <a href="signup.php">Sign up</a></p>
  <p>Forgot Password? <a href="contact.php">Click Here</a></p>
</form>

</body>
</html>
