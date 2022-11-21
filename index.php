<?php
	// $mysqli = new mysqli("localhost", "root", "ict315", "db_stu");
	$mysqli = new mysqli("localhost", "root", "passc0de", "db_stu");

	$sql = 'SELECT * FROM form_online';
	$result = mysqli_query($mysqli, $sql);
	// Fetch all
	$rows_student = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

select {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

select:focus {
  background-color: #ddd;
  outline: none;
}


/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}


</style>
</head>
<body>
<div class="container">
<table style="width:100%;">
  <tr style="vertical-align: top;">
    <td width="30%">

      <form action="add_regis.php">
        <div class="container">
          <h1>Register Form: Data Cube Meeting </h1>
          <p>Please fill in this form to join an event.</p>
          <hr>
          <label for="fm_name"><b>Your Name</b></label>
          <input type="text" name="fm_name" id="fm_name" required>

          <label for="fm_tel"><b>Your Tel Number</b></label>
          <input type="text" name="fm_tel" id="fm_tel" >

          <label for="fm_email"><b>Your E-mail</b></label>
          <input type="text" name="fm_email" id="fm_email" >

          <label for="fm_gender"><b>Gender</b></label><br>
					<select class="" name="fm_gender" id="fm_gender">
						<option value="Male">Male</option>
					  <option value="Female">Female</option>
					  <option value="Other">Other</option>
					</select>

					<label for="stu_byear"><b>Would you join this event?</b></label>
					<select class="" name="fm_join" id="fm_join">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>

          <label for="stu_byear"><b>Would you bring your laptop?</b></label>
					<select class="" name="fm_equip" id="fm_equip">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>

          <hr>
          <button type="submit" class="registerbtn">Register</button>
        </div>
      </form>

    </td>
    <td width="70%">
      <div class="">
        <h1>List of DataCube Gang</h1>
        <hr>
      </div>
       <table style="width:100%;" id="customers">
         <tr>
           <th>fm_No.</th>
           <th>fm_name</th>
           <th>fm_tel</th>
           <th>fm_email</th>
           <th>fm_gender</th>
					 <th>fm_join</th>
					 <th>fm_equip</th>
         </tr>
         <?php
				 $i=0;
				 foreach($rows_student as $row):
					$i++;

					 ?>

         <tr>
         <td><?=$i ?></td>
         <td><?=$row['fm_name'] ?></td>
         <td><?=$row['fm_tel'] ?></td>
         <td><?=$row['fm_email'] ?></td>
         <td><?=$row['fm_gender'] ?></td>
				 <td><?=$row['fm_join'] ?></td>
				 <td><?=$row['fm_equip'] ?></td>
         </tr>
         <?php endforeach; ?>
       </table>

    </td>
  </tr>
</table>

  <div class="container signin">
    <p>MR.ANUNTHAWIP CHAIMAO | StuID: 63054088 | ICT315</p>
  </div>

</div>
</body>
</html>
