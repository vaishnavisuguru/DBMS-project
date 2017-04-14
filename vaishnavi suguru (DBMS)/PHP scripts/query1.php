<!DOCTYPE html>
<html>
<head>
<title>Test</title>
<script>
</script>

<style type="text/css">

body {
	
    background: #348F50;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #56B4D3, #348F50);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to left, #56B4D3, #348F50); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}


.center1 {
	position: relative;
        top: 0px;
        float: center;
        width: 1200px;
	margin: auto;
        padding: 50px;
        border: 3px solid red;
}


h1 {
	position: relative;
    top: -70px;
	right: -600px;
	align:center;
}

h3 {
	position: relative;
	width: 72px;
	left: -2px;
    top: -25px;
	background-color: yellow;
}

h4 {
	width: 300px;
	position: relative;
	right: -15px;
	
}

h5 {
	width: 120px;
	position: relative;
	right: -15px;
	
}



#sq1:hover { 
    background-color: yellow;
	cursor: pointer;
}


.tftable {
position:relative;
float:left;
top=-100px;
right:-500px;
font-size:12px;
color:#333333;
width:20%;
border-width: 1px;
border-color: #9dcc7a;
border-collapse: collapse;
}
.tftable th {font-size:12px;background-color:#abd28e;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
.tftable tr {background-color:#ffffff;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;}
.tftable tr:hover {background-color:#ffff99;}


</style>

</head>

<body>

<div id="">   
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbms phase2";
$qz = $_GET['q'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT DISTINCT cuisines.CU_type,restaurant.R_name,restaurant.R_city
FROM restaurant INNER JOIN foodstyle ON restaurant.R_ID=foodstyle.R_ID INNER JOIN cuisines ON cuisines.CU_ID=foodstyle.CU_ID
WHERE restaurant.R_city='".$qz."'";

$result = mysqli_query($conn,$query);
echo "<table class=\"tftable\" border=\"1\">
<tr>
<th>Cuisine Type</th>
<th>Restaurent Name</th>
<th>Location</th>
</tr>";


while($row = mysqli_fetch_array($result))
{
//echo "<tr onmouseover=\"hilite(this)\" onmouseout=\"lowlite(this)\"><td>$row[0]</td>
echo "<tr>";
echo "<td>" . $row['CU_type'] . "</td>";
echo "<td>" . $row['R_name'] . "</td>";
echo "<td>" . $row['R_city'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($conn);  
?>
</div>



</body>
</html>