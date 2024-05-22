<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  rel="stylesheet" href="../css/datatables.min.css">
    <link  rel="stylesheet" href="../css/datatables.css">
    <style>

      *{
          font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
          
          
      }

     
        body {
          
             background: url(table.jpg);
            background-repeat:no-repeat ;
            background-size: 140% 900px;
        }
        .nav a{
            
            color: black;
            text-decoration: none;
            font-size: 30px;
            padding-left: 20px;
          }
          .table{
             backdrop-filter: blur(25px);
            border-radius: 20px;
            box-shadow: 0 0 20px 18px rgba(0, 0, 0, 0.1);
            
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
             .user {
          font-size: 30px;
          position: absolute;
          top:5%;
          left: 50%;
          color: black; 
      }
      table button{
       font-weight:bold;
        font-size: 15px;
        font-family:arial;
        border-radius:5px;
       background-color:rgb(244, 103, 82);
       margin:10px;
       border:none;
       }
             @media only screen and (max-width: 500px) {
     
                .user {
          font-size: 30px;
          position: absolute;
          top:5%;
          left: 300px;
          color: black; 
      }
       
           .nav a{
            color: #ffffff;
            text-decoration: none;
            font-size: 30px;
            padding-left: 20px;
          }
          
     
     body {
     
     background: url(table.jpg);
     background-size: 500% 1000px ;
     background-repeat: no-repeat;
     
     
     }
             }
</style>
</head>
<body>
<h1 class="user" >USERS</h1>
    <div class="navbar">
        <a href="admin.php">Dashboard</a>
        <a href="records.php">Records</a>
        <a style="background-color: rgb(129, 125, 125);">Users</a>
        
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
<table class="table" id="user"> 
    <thead class="thead">
    <tr>
   
        <th>Acount ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Contact Number</th>
        <th>Username</th>
        <th>Password</th>
        <th>Action</th>
        
      
    </tr>
    </thead>
    <tbody class="tbody">
    <?php
       $con = mysqli_connect("localhost", "root", "", "project");
       $query = "SELECT * FROM signup";
       $query_result = mysqli_query($con, $query);

    if (mysqli_num_rows($query_result) > 0) {
        foreach ($query_result as $data) {
            ?>
            <tr>
            <td><?= $data['userID']; ?></td>
                <td><?= $data['fname']; ?></td>
                <td><?= $data['lname']; ?></td>
                <td><?= $data['contactnum']; ?></td>
                <td><?= $data['user']; ?></td>
                <td><?= $data['pass']; ?></td>
                
               
                <td>
                 
               
     
                 <form action="../function/function.php" method="POST">

                     <button  type="submit" name="deleteuser" value="<?= $data['userID']; ?>">Delete</button>
                     
                 </form>
             </td>
            </tr>
            <?php
        }
    } 
    else {
      
        echo "";
        
    }
    ?>
   </tbody>
      </table>

      <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

      <script src="../js/datatables.js"></script>

<script src="../js/datatables.min.js"></script>
      <script>

       $(document).ready(function(){
        $('#user').DataTable();
       });

      </script>
</body>
</html>