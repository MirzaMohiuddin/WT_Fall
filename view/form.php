<?php
include("../control/process.php");
?>
<html>
    <head>
        <title> Form </title>

</head>
<body>
    <h1> Registration Form </h1>


    <form action="" method="post">
        <table>
            <tr><td>Name</td>
            <td><input type="text" name="name" placeholder="enter your name"></td>

            <td><td><?php echo  $nameError; ?></td></td></tr>

            <tr><td>Father's Name</td>
            <td><input type="text" name="fName" placeholder="enter your father's name"></td><tr>

            <tr><td>Mother's Name</td>
            <td><input type="text" name="mName" placeholder="enter your mother's name"></td><tr>

            <tr><td>Date of Birth</td>
            <td><input type="date" name="dob"></td></tr>

            <tr><td>NID No</td>
            <td><input type="text" name="nId"></td>

            <td><td><?php echo  $nidError; ?></td></td></tr>

            <tr><td>Gender</td>
            <td> Male <input type="radio" name="gender">
            Female <input type="radio" name="gender"> </td>

            <td><td><?php echo  $genderError; ?></td></td></tr>

            <tr><td>Email ID</td>
            <td><input type="text" name="eId"></td><tr>

            <tr><td>Mobile No</td>
            <td><input type="text" name="mNo"></td></tr>


            <tr><td>Present Address</td>
            <td><input type="text" name="preAddress"></td><tr>

            <tr><td>Permanent Address</td>
            <td><input type="text" name="perAddress"></td><tr>

            <tr><td>Zip Code</td>
            <td><input type="text" name="zCode"></td>

            <td><td><?php echo  $zcError; ?></td></td></tr>

            <tr><td>User Name</td>
            <td><input type="text" name="uName"></td></tr>


            <tr><td>Password</td>
            <td><input type="text" name="password"></td>

            <td><td><?php echo  $passError; ?></td></td></tr>

            <tr><td><td><input type="submit" name="enter"></td></td></tr>

</table>
</form>
</body>
    </html>