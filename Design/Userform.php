
    <form action="Userform.php" method="get">
        <h1> USER INFORMATION </h1>
        <br>
        <h3>Enter your Name:-<br></h3>
        <input type="text" name="sname" placeholder="NAME" required>
        <br><br>
        Enter your Date of Birth:-
        <br>
        <input type="date" required name="dob">
        <br><br>
        Select your Gender:-
        <br>
        <input type="radio" name="gender"<?php if (isset($gender) && $gender=="male") echo "checked";?>value="male">Male
        <input type="radio" name="gender"<?php if (isset($gender) && $gender=="female") echo "checked";?>value="female">Female</br>
        <br>
        Enter your Phone No:-
        <br>
        <input type="phoneno" name="phone" required placeholder="Phone No" maxlength="10">
        <br><br>
        Select your Favourite Sports:-
        <br>
        <input type="checkbox" name="cricket">Cricket
        <input type="checkbox" name="football">Football
        <input type="checkbox" name="boxing">Boxing
        <input type="checkbox" name="basketball">Basketball
        <br><br>
        Enter your Address:- 
        <br>
        <textarea rows="5" cols="20" name="address" placeholder="Address" required></textarea>
        <br><br>
        Select your Department:-
        <br>
        <select name="branch">
            <option selected>Select</option required>
            <option>Civil Engineering</option>
            <option>Mechanical Engineering</option>
            <option>Computer Engineering</option>
            <option>Information Technology</option>
            <option>Chemical Engineering</option>
        </select>
        <br><br><br>
        <input type="submit" name="submit" value="Submit"> 
    </form>

    
<?php

echo "NAME IS:- ";
$name = $_GET['sname'];
echo $name;

echo"<br>";
echo "DOB IS:- ";
$date = $_GET['dob'];
echo $date;

echo"<br>";
echo "GENDER IS:- ";
$gender = $_GET['gender'];
echo $gender;

echo"<br>";
echo "Phone NO IS:- ";
$phone = $_GET['phone'];
echo $phone;

echo"<br>";
echo "ADDRESS IS:- ";
$address = $_GET['address'];
echo $address;

echo"<br>";
echo "DEPARTMENT IS:- ";
$branch = $_GET['branch'];
echo $branch;

?>