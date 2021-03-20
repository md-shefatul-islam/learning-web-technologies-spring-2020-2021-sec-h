<?php
$conn = mysqli_connect('localhost', 'root' , '1234' , 'users');
if($conn)
{
	echo "success";
}else{
	echo "fail";
	// die('db error');
}
// $sql = 'select * from users';
// $result = mysqli_query($conn, $sql);

// $row = mysqli_fetch_assoc($result);
// print_r($row);
// print_r($row1);
// print_r($row2);-

// echo "<table>
// 			<tr>
// 				<td>id</td>
// 				<td>username</td>
// 				<td>email</td>
// 				<td>password</td>
// 				<td>type</td>
// 			</tr>";

// while ($row = mysqli_fetch_assoc($result)
// {
	// print_r($row);
	// echo "<br>";

// 	echo "
// 			<tr>
// 				<td>{$row['id']}</td>
// 				<td>{$row['username']}</td>
// 				<td>{$row['email']}</td>
// 				<td>{$row['password']}</td>
// 				<td>{$row['type']}</td>
// 			</tr>";
// }
// echo "</table>";

// $sql = "select * from users where username='' and password=''";
// $sql = "insert into users values('' , 'xyz' , 'xyz' , 'ab@gmail.com' , '')";
// mysqli_close();
 ?>