<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','ajax');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

// mysqli_select_db($con);
$sql="SELECT * FROM user WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Ad</th>
<th>Soyad</th>
<th>Yas</th>
<th>Adres</th>
<th>Is</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['ad'] . "</td>";
    echo "<td>" . $row['soyad'] . "</td>";
    echo "<td>" . $row['yas'] . "</td>";
    echo "<td>" . $row['adres'] . "</td>";
    echo "<td>" . $row['is'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>