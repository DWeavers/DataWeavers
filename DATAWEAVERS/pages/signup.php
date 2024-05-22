<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Data Weavers</title>
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
    top: 5%;

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
  p{
    margin-left: 165px;
   font-size: 20px;
   color: #000000;


  }
  .welcome p{
    color: black;
    margin-left: 10px;
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
       background-size: 100% 1000px ;
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
    visibility:collapse;
   }
   p{
    margin-left: 70px;
   font-size: 20px;
   color: #000000;
   }
   }
  </style>
</head>
      <body>

       
  <div class="nav">
   
      <a href="../index.php">Home</a>
      <a href="about.php">About</a>
      <a href="contact.php">Contact</a>
   
  </div>

  <div class="welcome">
    <h1 class="data">Welcome to Data Weavers!</h1>
    <p>Thank you for visiting our website! <br>
            We are dedicated to providing a secure login experience.<br>
                Your data security is our top priority. <br>
                All information is encrypted for your protection.</p>
  </div>
  <div class="container">

  <form id="signupForm" action="../function/function.php" method="POST" onsubmit="return validateForm()">
  
    
        <h2>Sign Up Form</h2>
        
  <div class="id">
     <label  for="fname">First Name:</label>
       <input  type="text" name="fname" required/>
</div>
  <div class="id">
    <label for="lname">Last Name:</label>
      <input  type="text" name="lname" required/>
    </div>

    <div class="id">
    <label  for="contactnum">Contact Number:</label>
     <input type="number" name="contactnum" required/>
     </div>

    <div class="id">
      <label  for="user">Username:</label>
    <input  type="text" name="user" required/>
  </div>

       <div class="pass">
      <label  for="pass">Password:</label>
    <input type="password" name="pass" id="pass" required/>
    </div>

    

<br>

<button  type="submit" name="signup" id="signupButton">Sign Up</button>


<p>Already have an account? <a href="login.php">Log in</a></p>

    
    </form>
    
    </div>

    <script>
    function validateForm() {
        var allFilled = true;
        var inputs = document.querySelectorAll('input[required]');
        inputs.forEach(function(input) {
            if (!input.value) {
                allFilled = false;
            }
        });

        if (allFilled) {
            alert("CONGRATULATIONS! , You're account Created Sucessfully");
            return true; 
        }
    }
</script>

</body>
</html>
