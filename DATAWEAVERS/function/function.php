

<?php

require '../dbcon/dbcon.php';

if(isset($_POST['save'])){

    $firstname = mysqli_real_escape_string($con,$_POST['firstname']);
    $middlename = mysqli_real_escape_string($con,$_POST['middlename']);
    $lastname = mysqli_real_escape_string($con,$_POST['lastname']);
    $suff = mysqli_real_escape_string($con,$_POST['suff']);
    $occupation = mysqli_real_escape_string($con,$_POST['occupation']);
    $age = mysqli_real_escape_string($con,$_POST['age']);
    $sex = mysqli_real_escape_string($con,$_POST['sex']);
    $civil = mysqli_real_escape_string($con,$_POST['civil']);
    $birth = mysqli_real_escape_string($con,$_POST['birth']);
    $religion = mysqli_real_escape_string($con,$_POST['religion']);
    $contact = mysqli_real_escape_string($con,$_POST['contact']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $region = mysqli_real_escape_string($con,$_POST['region']);
    $province = mysqli_real_escape_string($con,$_POST['province']);
    $municipality = mysqli_real_escape_string($con,$_POST['municipality']);
    $barangay = mysqli_real_escape_string($con,$_POST['barangay']);
    $hns = mysqli_real_escape_string($con,$_POST['hns']);
    $housepop = mysqli_real_escape_string($con,$_POST['housepop']);
    $education = mysqli_real_escape_string($con,$_POST['education']);
    
    


    if($firstname != '' || $middlename != '' ||$lastname != '' ||$suff != '' ||$occupation != '' ||$age != ''|| $sex != ''|| 
    $civil != '' || $birth != '' || $religion != '' || $contact != '' || $email != '' || $region != '' || $province != '' || $municipality != '' || $barangay != '' || $hns != '' || $housepop != ''|| $education != '');

    $query = "INSERT INTO census(firstname,middlename,lastname,suff,occupation,age,sex,civil,birth,religion,contact,email,region,province,municipality,barangay,hns,housepop,education)
    VALUES('$firstname','$middlename','$lastname','$suff','$occupation','$age','$sex','$civil','$birth','$religion','$contact','$email','$region','$province','$municipality','$barangay','$hns','$housepop','$education')";

    $result = mysqli_query($con,$query);

    if($result){
        header("Location: ../pages/form.php");
        exit(0);
    }

}

if(isset($_POST['signup'])){

    $fname = mysqli_real_escape_string($con,$_POST['fname']);
    $lname = mysqli_real_escape_string($con,$_POST['lname']);
    $contactnum = mysqli_real_escape_string($con,$_POST['contactnum']);
    $user = mysqli_real_escape_string($con,$_POST['user']);
    $pass = mysqli_real_escape_string($con,$_POST['pass']);


    if($fname != '' || $lname != '' ||$contactnum != '' ||$user  != '' || $pass != '');

    $query = "INSERT INTO signup(fname,lname,contactnum,user,pass)VALUES('$fname','$lname','$contactnum','$user','$pass')";

    $result = mysqli_query($con,$query);

    if($result){
        header("Location: ../pages/signup.php");
        exit(0);
    }
    }

    if(isset($_POST['login'])){
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
    
       
        $query = "SELECT * FROM signup WHERE user = '$username' AND pass = '$password'";
        $result = mysqli_query($con,$query);
    
       
        if(mysqli_num_rows($result) > 0){
            header("Location: ../pages/form.php");
            exit(0);
        } else {
           
           header("Location: ../pages/tryagain.php");
       
        }
    }

    if (isset($_POST['deleteperson'])) {
        $personID = mysqli_real_escape_string($con, $_POST['deleteperson']);
    
        $query = "DELETE FROM census WHERE personID='$personID'";
        $run_query = mysqli_query($con, $query);
    
        if ($run_query) {
            header("Location: ../admin/records.php"); 
           exit(0);
        } 
    }

    if (isset($_POST['editperson'])) { 
        $personID = mysqli_real_escape_string($con, $_POST['personID']);
        $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
        $middlename = mysqli_real_escape_string($con, $_POST['middlename']);
        $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
        $suff = mysqli_real_escape_string($con, $_POST['suff']);
        $occupation = mysqli_real_escape_string($con, $_POST['occupation']);
        $age = mysqli_real_escape_string($con, $_POST['age']);
        $sex = isset($_POST['sex']) ? mysqli_real_escape_string($con, $_POST['sex']) : '';
        $civil = isset($_POST['civil']) ? mysqli_real_escape_string($con, $_POST['civil']) : '';
        $birth = mysqli_real_escape_string($con, $_POST['birth']);
        $religion = mysqli_real_escape_string($con, $_POST['religion']);
        $contact = mysqli_real_escape_string($con, $_POST['contact']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $region = mysqli_real_escape_string($con, $_POST['region']);
        $province = mysqli_real_escape_string($con, $_POST['province']);
        $municipality = mysqli_real_escape_string($con, $_POST['municipality']);
        $barangay = mysqli_real_escape_string($con, $_POST['barangay']);
        $hns = mysqli_real_escape_string($con, $_POST['hns']);
        $housepop = mysqli_real_escape_string($con, $_POST['housepop']);
        $education = mysqli_real_escape_string($con, $_POST['education']);
    
        $query = "UPDATE census SET firstname='$firstname', middlename='$middlename', lastname='$lastname', suff='$suff',
                  occupation='$occupation', age='$age', sex='$sex', civil='$civil',
                  birth='$birth', religion='$religion', contact='$contact', email='$email',
                  region='$region', province='$province', municipality='$municipality', barangay='$barangay',
                  hns='$hns', housepop='$housepop', education='$education' WHERE personID='$personID'";
    
        $run_query = mysqli_query($con, $query);
    
        if ($run_query) {
            header("Location: ../admin/records.php?id=$personID"); 
            exit(0);
        } 
    }

    if (isset($_POST['deleteuser'])) {
        $userID = mysqli_real_escape_string($con, $_POST['deleteuser']);
    
        $query = "DELETE FROM signup WHERE userID='$userID'";
        $run_query = mysqli_query($con, $query);
    
        if ($run_query) {
            header("Location: ../admin/user.php"); 
           exit(0);
        } 
    }
