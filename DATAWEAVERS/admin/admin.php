<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            margin: 0;
            padding: 0;
            background: url(mountain.jpg);
            background-repeat: no-repeat;
            background-size: 100% 900px;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

     
       
        .text {
            font-size: 30px;
           position: absolute;
           top: 30%;
           left:20%; 
           
        }
        .text p{
            
            font-size: 30px;
            position: absolute;
           top: 55%;
           left:5%;
           width: 1000px;
           
      
        }
        @media only screen and (max-width: 500px) {

            .text p{
            
            font-size: 20px;
          
            position: absolute;
           top: 95%;
           left:1%; 
           
           width: 500px;
           
      
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 499px;
            z-index: 1000;
        }
        .text {
            font-size: 20px;
           position: absolute;
           top: 15%;
           left:1%; 
           
        }
}
    </style>
</head>
<body>
  
    <div class="navbar">
        <a style="background-color: rgb(129, 125, 125);">Dashboard</a>
        <a href="records.php">Records</a>
        <a href="user.php">Users</a>
        <a href="adminlogin.php">Log out</a>
    </div>

 
    <div class="text">
        <h1>Welcome to the Admin Dashboard</h1>
        <p>This is the main content area where you can see various information.</p>
    </div>

</body>
</html>
