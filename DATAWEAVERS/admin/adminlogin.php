<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Weavers</title>

<style>
body {
font-family: Arial, sans-serif;
margin: 0;
padding: 0;
background: url(mountain.jpg);
background-size: 100% 900px;
background-repeat: no-repeat
}


.container {
max-width: 600px;
margin: 0 auto;
padding: 15px;

backdrop-filter: blur(25px);
border-radius: 50px;
box-shadow: 0 0 20px 18px rgba(0, 0, 0, 0.1);
position: absolute;
left: 28%;
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
    text-decoration-style: line;
    font-size: 40px;
    padding-left: 40px;
  }
  .nav a:hover{
    color: #93978ebd;
}

@media only screen and (max-width: 500px) {

.container {
max-width: 395px;
backdrop-filter: blur(20px);
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


body {
font-family: Arial, sans-serif;
background: url(mountain.jpg);
background-size: 100% 800px ;
background-repeat: no-repeat;
margin: 0;
padding: 0;

}

}
</style>
</head>
<body>

    <div class="nav">
        <a href="../index.php">Home</a>
        
      </div>
        <form method="POST" onsubmit="admin(event)">
        <div class="container">
        <h2>Admin Login Form</h2>

        <div class="id">
        <label for="adminuser">Username:</label>
        <input type="text" id="adminuser" name="adminuser"  required>
    </div>

      <div class="pass">
        <label for="adminpass">Password:</label>
        <input type="password" id="adminpass" name="adminpass"  required>
    </div>

          <button  type="submit">Login</button>




      </form>
      <script>
        function admin(event) {
          event.preventDefault(); 

            var user = document.getElementById("adminuser").value;
            var pass = document.getElementById('adminpass').value;

            if (user === 'user' && pass === 'admin') {
                alert("LOG IN SUCCESS!");
                window.location.href = "admin.php";
            } else {
                alert("Invalid Username or Password");
            }
        }
    </script>
    </body>
  </html>
