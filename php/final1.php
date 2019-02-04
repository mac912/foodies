<?php
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db($connection, "final"); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['username'];
$phoneno = $_POST['phone'];
$food1 = $_POST['food1'];
$food2 = $_POST['food2'];
$food3 = $_POST['food3'];
$address = $_POST['address'];
if($name !=''||$phoneno !=''){
//Insert Query of SQL
$query = mysqli_query($connection, "insert into finaldata (name, phone, food1, food2, food3, address) values ('$name', '$phoneno', '$food1', '$food2', '$food3', '$address')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($connection); // Closing Connection with Server
?>