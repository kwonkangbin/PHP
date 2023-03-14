<?php
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $height = $_POST['height'];
    $conn = mysqli_connect('localhost', 'root', '', 'example1');
    $query = "insert into table1(name, age, gender, height) values('$name',$age,'$gender',$height);";

    $result = mysqli_query($conn, $query);

    if($result){
        echo "저장에 성공했습니다";
    }else{
        echo "실패";
    }
?>