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

      table button{
       font-weight:bold;
        font-size: 15px;
        font-family:arial;
        border-radius:5px;
       background-color:rgb(244, 103, 82);
       margin:10px;
       border:none;
       }

       table a{
            font-size: 15px;
            color:black;
            text-decoration: none;
            font-family:arial;
            font-weight:bold;
            background-color:lightgreen;
            border-radius:5px;
            padding:5px 10px 5px;
            margin:10px;
            margin-left:15px;
        }
        .nav a{
            
       color: black;
       text-decoration: none;
       font-size: 35px;
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
        .records {
          font-size: 30px;
          position: absolute;
          top:5%;
          left: 45%;
          color: black; 
      }

        @media only screen and (max-width: 500px) {

          
  
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
<h1 class="records" >RECORDS</h1>
<div class="navbar">
        <a href="admin.php">Dashboard</a>
        <a style="background-color: rgb(129, 125, 125);">Records</a>
        <a href="user.php">Users</a>
        
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
<table class="table" id="library"> 
    <thead class="thead">
    <tr>
   
        <th>ID</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Suffix</th>
        <th>Occupation</th>
        <th>Age</th>
        <th>Sex</th>
        <th>Civil Status</th>
        <th>BirthDay</th>
        <th>Religion</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Region</th>
        <th>Province</th>
        <th>Municipality</th>
        <th>Barangay</th>
        <th>House Number, Street</th>
        <th>House Population</th>
        <th>Educational Attainment</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody class="tbody">
    <?php
       $con = mysqli_connect("localhost", "root", "", "project");
       $query = "SELECT * FROM census";
       $query_result = mysqli_query($con, $query);

    if (mysqli_num_rows($query_result) > 0) {
        foreach ($query_result as $data) {
            ?>
            <tr>
                <td><?= $data['personID']; ?></td>
                <td><?= $data['firstname']; ?></td>
                <td><?= $data['middlename']; ?></td>
                <td><?= $data['lastname']; ?></td>
                <td><?= $data['suff']; ?></td>
                <td><?= $data['occupation']; ?></td>
                <td><?= $data['age']; ?></td>
                <td><?= $data['sex']; ?></td>
                <td><?= $data['civil']; ?></td>
                <td><?= $data['birth']; ?></td>
                <td><?= $data['religion']; ?></td>
                <td><?= $data['contact']; ?></td>
                <td><?= $data['email']; ?></td>
                <td><?= $data['region']; ?></td>
                <td><?= $data['province']; ?></td>
                <td><?= $data['municipality']; ?></td>
                <td><?= $data['barangay']; ?></td>
                <td><?= $data['hns']; ?></td>
                <td><?= $data['housepop']; ?></td>
                <td><?= $data['education']; ?></td>
                <td>
                 
               
                    <a href="../admin/adminedit.php?id=<?= $data['personID']; ?>">Edit</a>
        
                    <form action="../function/function.php" method="POST">

                        <button  type="submit" name="deleteperson" value="<?= $data['personID']; ?>">Delete</button>
                        
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
        $('#library').DataTable();
       });

      </script>

    </body>
</html>
