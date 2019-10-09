<!DOCTYPE html>
<head>
<title>Insert data to PostgreSQL with php - creating a simple web application</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
li {listt-style: none;}
</style>
</head>
<body>
<h2>Enter information regarding book</h2>
<ul>
<form name="insert" action="server.php" method="POST" >
<li>username:</li><li><input type="text" name="name" /></li>
<li>email:</li><li><input type="text" name="email" /></li>
<li>password:</li><li><input type="text" name="password" /></li>
<li><input type="submit" name="reg_user" /></li>
</form>
</ul>
</body>
</html>
<?php
$db = pg_connect("host=localhost port=5432 dbname=registration user=postgres password=guesswh@t!");
if (isset($_POST['reg_user'])) {
// receive all input values from the form
  $id = pg_escape_string($db, $_POST['username']);

$query = "INSERT INTO book VALUES ('$_POST[id]','$_POST[username]','$_POST[email]','$_POST[password]')";
$result = pg_query($query); 
?>