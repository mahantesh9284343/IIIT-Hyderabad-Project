<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
</head>
<body>

<center>
<h2>INPUT FORM</h2>
<form method="post" action="det.html">
<label for="name" value="name">Name:</label>
<input type="text" id="name" name="name"><br><br>
Phno.:
<input type="number" name="phn"><br><br>
Course/Stream:
<input type="radio" id="cou" name="gen">
<label for="cou" value="Bachelors" checked="false">Bachelors</label>
<input type="radio" id="cou" name="gen">
<label for="cou" value="Masters">Masters</label><br><br>

<textarea name="tarea" placeholder="Describe about Yourself" rows="5" cols="20" style="padding:10px" ></textarea><br><br>
Subject Interests:
<input type="checkbox" id="cb">
<label for="cb" value="fluid mechanics">Fluid Mechanics</label>
<input type="checkbox" id="cb">
<label for="cb" value="Programming">Programming</label>
<input type="checkbox" id="cb">
<label for="cb" value="Finance management">Finance Management</label><br><br>
<input type="submit" value="SUBMIT">
<input type="submit" formaction="action.php"value="click here for details" ></form>
<center>
</body></html>