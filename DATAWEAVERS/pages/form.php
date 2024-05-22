<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Weaver</title>

    <style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
   background-image: url(bg.jpg);
   background-repeat: no-repeat;
 background-size: 100% 2060px;
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
  .container input{
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;

}
.sex input,.civil input{
    width: 25px;
    margin-right:20px;

}
.sex label,.civil label{
    margin-left: 10px;
}
input:focus {
    outline: none;
    border-color: #006ef5;
}
.sex,.civil{
    border: 1px solid rgb(185, 180, 180);
    padding: 20px;
   border-radius: 20px;
    
}

select{
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
.nav a{
       color: #ffffff;
       text-decoration: none;
       font-size: 40px;
       padding-left: 20px;
     }
.nav a:hover{
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
    color:black;
}
.nav a{
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
.civil label{
    margin-left: 10px;
    font-size: 25px;
}
.sex input,.civil input{
    width: 20px;
    margin-right:20px;

}
}
</style>

</head>
<body>
    <div class="nav">
        <a href="./login.php">Exit</a>
        
        
        </div>
    <div class="container">
    <form action="../function/function.php" method="POST">
            <header>Data Weaver Form</header><br>

            <div>
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" id="firstname"/>
            </div>
            <div>
                <label for="middlename">Middle Name</label>
                <input type="text" name="middlename" id="middlename"/>
            </div>
            <div>
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname"/>
            </div>
           
            <div>
                <label for="suff">Suffix</label>
                <input type="text" name="suff" id="suff"/>
            </div>
            <div>
                <label for="occupation">Occupation</label>
                <input type="text" name="occupation" id="occupation"/>
            </div>
            <div>
                <label for="age">Age</label>
                <input type="number" name="age" id="age"/>
            </div>
            <header>Sex</header>
            <div class="sex">
                <label for="male">Male</label>
                <input type="radio" name="sex" value="male" id="male">
                <label for="female">Female</label>
                <input type="radio" name="sex" value="female" id="female">
           </div>
           <header>Civil Status</header>
           <div class="civil">
                <label for="single">Single</label>
                <input type="radio" name="civil" value="single" id="single">
                <label for="married">Married</label>
                <input type="radio" name="civil" value="married" id="married">
                <label for="widowed">Widowed</label>
                <input  type="radio" name="civil" value="widowed" id="widowed">
                <label for="separated">Separated</label>
                <input  type="radio" name="civil" value="separated" id="separated">
            </div>
            <div>
                <label for="birth">Birthday</label>
                <input type="date" name="birth" id="birth"/>
            </div>
            <div>
                <label for="religion">Religion</label>
                <input type="text" name="religion">
            </div>
        <div>
                <label for="contact">Contact Number</label>
                <input type="digit" name="contact">
        </div>
        <div>
                <label for="email">Email</label>
                <input type="email" name="email">
        </div>
            <div>
                <label for="region">Region</label>
                <input type="text" name="region">
            </div>

            <div> 
            <label for="province">Province</label>
                <input type="text" name="province" id="province">
            </div>

            <div>
                <label for="municipality">Municipality</label>
                <input type="text" name="municipality" id="municipality">
            </div>
            <div>
                <label for="barangay">Barangay</label>
                <input type="text" name="barangay" id="barangay">
            </div>
            <div>
                <label for="hns">House Number, Street</label><br>
                <input type="text" name="hns" id="hns"/>
            </div>
            <div>
                <label for="housepop">Household Population</label><br>
                <input type="number" name="housepop" required>
            </div>
            <div>
                <header>Educational Attainment</header><br>
            </div>
            <div>
                    <label for="education"></label>
            <select name="education">
                    <option value="None">None</option>
                    <option value="Elementary">Elementary</option>
                    <option value="Highschool">Highschool</option>
                    <option value="Vocational">Vocational Course</option>
                    <option value="College">College</option>
                    </select>
</div>
    <button type="submit" name="save" id="save">Submit</button>
    </form>
    </div>
</body>
</html>