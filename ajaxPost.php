<?php
  require 'database.php';

//$name = $_GET['pid'];
$phone = $_POST['phone'];
//echo $name;
//die;


 $output = '';
 $query = "SELECT * FROM phonee where MOBILE_NUMBER = :id";
 $statement = $conn->prepare($query);
 $statement->bindParam(':id', $phone);
 $statement->execute();
 $result = $statement->fetchAll();
 $i = 0;
 $output .= "<table>
<tr>
<td align=center></td>
<td align=center></td></tr>";
 foreach($result as $row)
 {
	 $i++;
   $output .= '<tr><td>Name</td><td>'.$row['HOLDER_NAME'].'</td></tr>';
	 $output .= '<tr><td>ID Card</td><td>'.$row['HOLDER_ID'].'</td></tr>';
	 $output .= '<tr><td>City</td><td>'.$row['HOLDER_CITY'].'</td></tr>';
	 $output .= '<tr><td>Address</td><td>'.$row['ADDRESS_1'].'</td></tr>';

 }
 $output .= '</table>';
if($i == 0)
$output.='Sorry no record found';
 echo $output;
?>
