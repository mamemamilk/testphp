<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDB2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset ต้องเซตในโค้ดด้วยไม่งั้นมันจะไม่อ่านภาษาไทย
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// define variables and set to empty values
$name = $email = $gender = $comment = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  //$name = trim($_POST["name"]);
  $email = test_input($_POST["email"]);
  $age = test_input($_POST["age"]);
  $address = test_input($_POST["address"]);
  $gender = test_input($_POST["gender"]);
  $comment = test_input($_POST["comment"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $firstname."<br>".$lastname."<br>".$email."<br>".$age."<br>".$address."<br>".$gender."<br>".$comment."<br>";

//insert data ผ่าน php ข้างล่างนี่คือ sybtex มัน
$sql = "INSERT INTO userprofile1 (firstname,lastname, email, age, address, gender,comment) 
VALUES ('$firstname','$lastname', '$email', '$age', '$address', '$gender','$comment')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {//เป็นคำสั่งในการรันquery
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);//ทุกครั้งต้องปิดconection เสมอ

?>