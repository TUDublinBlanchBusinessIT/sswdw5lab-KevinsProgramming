<?php 

include("dbcon.php");

$sql = "SELECT * from member";
$result = mysqli_query($conn, $sql);

echo "<select name = 'memberID'>";

while($row = mysqli_fetch_assoc($result)) {
    $id=$row['id'];
    $fn=$row['firstname'];
    $sn=$row['surname'];
    echo "<TR><TD>$id</TD><TD>$fn</TD><TD>$sn</TD></TR>";
}
echo "</select>";

mysqli_close($conn); 
?>