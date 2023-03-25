<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $fullName = $_POST['fullName'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $phoneNumber = $_POST['phoneNumber'];
  $Sid = 123;
  $batch = $_POST['batch'];
  $session = $_POST['session'];
  $department = $_POST['department'];
  $gender = $_POST['gender'];

  include 'dbcon.php';
  // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO `registration`(`Sid`, `fullName`, `username`, `email`, `phoneNumber`, `batch`, `session`, `department`, `gender`) 
  VALUES (':Sid',':fullName',':username',':email',':phoneNumber',':batch',':session',':department',':gender');";
  // use 
        try {
            $stmt1 = $conn->prepare($sql);
            $stmt1->execute([
                ':Sid'           => $Sid,
                ':fullName' => $fullName,
                ':username' => $username,
                ':email' => $email,
                ':phoneNumber' => $phoneNumber,
                ':batch' => $batch,
                ':session' => $session,
                ':department' => $department,
                ':gender' => $gender
            ]);

            
  echo "New record created successfully";

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        $conn = null;
}
 
?>