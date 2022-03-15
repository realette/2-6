<?
include 'db_conn.php';
$user_id=$_POST['id'];
$user_pw=$_POST['pw'];
$sql = "insert into members values ('','$user_id', password('$user_pw'),'$user_name', '$user_email')";
mysqli_query($conn,$sql); $data['sql']=$sql; mysqli_close($conn); echo json_encode($data);
?>