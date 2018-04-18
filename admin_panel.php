<html>
<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
<head>
<title>Admin Panel </title>
<link rel="stylesheet" type="text/css" href="styles/style_admin.css">
</head>


<body>



<div id="header">
<center><img src="LOGO.PNG">
<h3> Welcome to COMPETENT WORKS Admin Panel </h3></center>
</div>

<div id="sidemenu">
 <ul>
    <li><a href="add.php" target="_blank"> Add User Contacts </a></li>
	<li><a href="delete.php" target="_blank"> Delete User Contacts </a></li>
	<li><a href="update_users.php" target="_blank"> Update User Contacts </a></li>
	<li><a href="add_products.php" target="_blank"> Add Products </a></li>
	<li><a href="Delete_products.php" target="_blank"> Delete Products </a></li>
	<li><a href="update.php" target="_blank"> Update Products </a></li>
	<li><a href="nosgene.php" target="_blank"> Add Services </a></li>
     <li><a href="nosgene.php" target="_blank"> Delete Services </a></li>
     <li><a href="nosgene.php" target="_blank"> Update Services </a></li>
 </ul>	
</div>

<div id="data">
<br><br>

    <center><h1>Data available</h1></center>
    <centre><h2><u>Data in Contact Table</u></h2></centre>
    

    
<?php
    error_reporting(0);
    include 'connection.php';
	$sql = "SELECT * FROM contact";
	$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
   echo "<table border=1>";
       echo"<tr><td>Name</td><td>Email</td><td>Subject</td><td>Message</td>";
    echo"</tr>";
    while($row = mysqli_fetch_assoc($result)) 
    {
echo "<tr>";
echo "<td>{$row['Name']}</td><td>{$row['Email']}</td><td>{$row['Subject']}</td><td>{$row['Message']}</td>";
echo "</tr>";
}
echo "</table>";
}
else {
echo "<h3><center>No user data found!</center></h3>";
}
?>

   <centre><h2><u>Data in Products Table</u></h2></centre>
    
<?php
    error_reporting(0);
    include 'connection.php';
	$sql = "SELECT * FROM products";
	$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
   echo "<table border=1>";
       echo"<tr><td>ProductID</td><td>Product Name</td><td>Product Discription</td><td>Quantity</td>";
    echo"</tr>";
    while($row = mysqli_fetch_assoc($result)) 
    {
echo "<tr>";
echo "<td>{$row['Product_ID']}</td><td>{$row['Name']}</td><td>{$row['Discription']}</td><td>{$row['Quantity']}</td>";
echo "</tr>";
}
echo "</table>";
}
else {
echo "<h3><center>No data in Products found!<center></h3>";
}
?>
</div>

 -->
</body>
</html>