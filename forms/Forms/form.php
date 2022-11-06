<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Registration Form</title>
</head>
<body>
    <h1>Registraction Form</h1>
    <form action="submit.php" method="POST">
        <b>Full Name :<b>
        <input type="text" id="name" name="name"><br><br>

        <b>Phone No : <b>
        <input type="integer" id="phoneno" name="phoneno"><br><br>
        
        <b>Course :<b><br> 
        <input type="radio" id="Bachelors" name="course1">Bachelors<br>
        <input type="radio" id="Masters" name="course1">Masters<br><br>
        
        <b>Description :<b><br> 
        <textarea type="textarea" name="description" id="description"></textarea><br><br>
        
        <b>Subject Interest : <b><br>
        <input type="checkbox" id="subject1" name="subject1" value="Artificial Intelligence">Artificial Intelligence<br>
        <input type="checkbox" id="subject2" name="subject2" value="Machine Learning">Machine Learning<br>
        <input type="checkbox" id="subject3" name="subject3" value="Web Development">Web Development<br>
        <input type="checkbox" id="subject4" name="subject4" value="Cloud Computing">Cloud Computing<br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>