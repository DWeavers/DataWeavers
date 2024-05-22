<?php

require '../function/function.php'; 

if (isset($_GET['id'])) { 
    $personID = mysqli_real_escape_string($con, $_GET['id']); 

    $query = "SELECT * FROM census WHERE personID='$personID'";
    $run_query = mysqli_query($con, $query);

    if (mysqli_num_rows($run_query) > 0) {
        $person = mysqli_fetch_array($run_query);
        ?>

<style>

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-image: url(table.jpg);
        background-repeat: no-repeat;
        background-size: 100% 2070px;
    }

        .container {
        width: 45%;
        margin: 0 auto;
        padding: 15px;
        backdrop-filter: blur(30px);
        border-radius: 50px;
        box-shadow: 0 0 20px 18px rgba(0, 0, 0, 0.1);
        position: absolute;
        left: 25%;
        top: 10%;
        }

        form {
        display: grid;
        gap: 20px;
        }

            header {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
        color: rgb(0, 0, 0);
         text-align: center;
    }

    label {
      font-weight: bold;
     color: rgb(0, 0, 0);
         font-size: 25px;
    }
        .container input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
        .sex input,.civil input {
      width: 25px;
      margin-right: 20px;
}   
    .sex label,.civil label {
    margin-left: 10px;
}
        input:focus {
     outline: none;
      border-color: #006ef5;
}
    .sex,.civil {
     border: 1px solid rgb(185, 180, 180);
     padding: 20px;
     border-radius: 20px;
}
    select {
     width: 100%;
     padding: 10px;
     border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
}
    button {
     padding: 12px 20px;
     border: none;
     border-radius: 4px;
     background-color: #007bff;
     color: #fff;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }
        button:hover {
        background-color: #0056b3;
    }
    
.nav a:hover {
    color: #11a6fdbd;
}
@media only screen and (max-width: 700px) {
    .container {
        width: 90%;
        left: 2%;
        top: 20%;
    }
    label {
        font-weight: bold;
        color: black;
    }
    .nav a {
        color: #ffffff;
        text-decoration: none;
        font-size: 35px;
        padding-left: 20px;
    }
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-image: url(bg.jpg);
        background-repeat: no-repeat;
        background-size: 100% 2170px;
    }
    .civil label {
        margin-left: 10px;
        font-size: 25px;
    }
    .sex input,.civil input {
        width: 20px;
        margin-right: 20px;
    }
}
</style>

</head>
<body>

<div class="container">
<form action="../function/function.php" method="POST">

    <header>Edit User Information</header><br>

    <input type="hidden" id="personID" name="personID" value="<?= $person['personID']; ?>">
    <div>
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname" value="<?= $person['firstname']; ?>"/>
    </div>
    <div>
        <label for="middlename">Middle Name</label>
        <input type="text" name="middlename" id="middlename" value="<?= $person['middlename']; ?>"/>
    </div>
    <div>
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname" value="<?= $person['lastname']; ?>"/>
    </div>
    <div>
        <label for="suff">Suffix</label>
        <input type="text" name="suff" id="suff" value="<?= $person['suff']; ?>"/>
    </div>
    <div>
        <label for="occupation">Occupation</label>
        <input type="text" name="occupation" id="occupation" value="<?= $person['occupation']; ?>"/>
    </div>
    <div>
        <label for="age">Age</label>
        <input type="number" name="age" id="age" value="<?= $person['age']; ?>"/>
    </div>
    <header>Sex</header>
    <div class="sex">
        <label for="male">Male</label>
        <input type="radio" name="sex" value="male" id="male" <?= ($person['sex'] == 'male') ? 'checked' : ''; ?>>
        <label for="female">Female</label>
        <input type="radio" name="sex" value="female" id="female" <?= ($person['sex'] == 'female') ? 'checked' : ''; ?>>
    </div>
    <header>Civil Status</header>
    <div class="civil">
        <label for="single">Single</label>
        <input type="radio" name="civil" value="single" id="single" <?= ($person['civil'] == 'single') ? 'checked' : ''; ?>>
        <label for="married">Married</label>
        <input type="radio" name="civil" value="married" id="married" <?= ($person['civil'] == 'married') ? 'checked' : ''; ?>>
        <label for="widowed">Widowed</label>
        <input type="radio" name="civil" value="widowed" id="widowed" <?= ($person['civil'] == 'widowed') ? 'checked' : ''; ?>>
        <label for="separated">Separated</label>
        <input type="radio" name="civil" value="separated" id="separated" <?= ($person['civil'] == 'separated') ? 'checked' : ''; ?>>
</div>
    <div>
        <label for="birth">Birthday</label>
        <input type="date" name="birth" id="birth" value="<?= $person['birth']; ?>"/>
       </div>
    <div>
        <label for="religion">Religion</label>
        <input type="text" name="religion" id="religion" value="<?= $person['religion']; ?>"/>
        </div>
        <div>
        <label for="contact">Contact Number</label>
        <input type="digit" name="contact" id="contact" value="<?= $person['contact']; ?>"/>
     </div>
<div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= $person['email']; ?>"/>
      </div>
    <div>
        <label for="region">Region</label>
        <input type="text" name="region" id="region" value="<?= $person['region']; ?>"/>
        </div>
    <div>  
        <label for="province">Province</label>
        <input type="text" name="province" id="province" value="<?= $person['province']; ?>"/>
     </div>
     <div>
        <label for="municipality">Municipality</label>
        <input type="text" name="municipality" id="municipality" value="<?= $person['municipality']; ?>"/>
</div>
     <div>
        <label for="barangay">Barangay</label>
        <input type="text" name="barangay" id="barangay" value="<?= $person['barangay']; ?>"/>
</div>
<div>
        <label for="hns">House Number, Street</label>
        <input type="text" name="hns" id="hns" value="<?= $person['hns']; ?>"/>
        </div>
    <div>
        <label for="housepop">Household Population</label>
        <input type="number" name="housepop" id="housepop" value="<?= $person['housepop']; ?>"/>
    </div>
        <div>
        <header>Educational Attainment</header><br>
</div>
      <div>
        <label for="education"></label>
        <select name="education">
            <option value="None" <?= ($person['education'] == 'None') ? 'selected' : ''; ?>>None</option>
            <option value="Elementary" <?= ($person['education'] == 'Elementary') ? 'selected' : ''; ?>>Elementary</option>
            <option value="Highschool" <?= ($person['education'] == 'Highschool') ? 'selected' : ''; ?>>Highschool</option>
            <option value="Vocational" <?= ($person['education'] == 'Vocational') ? 'selected' : ''; ?>>Vocational Course</option>
            <option value="College" <?= ($person['education'] == 'College') ? 'selected' : ''; ?>>College</option>
        </select>
    </div>
    <button type="submit" name="editperson" id="editperson">Submit</button>
</form>
<?php
    } else {
        echo "<h4>Invalid ID</h4>";
    }
}
?>
