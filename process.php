<?php
    if($_POST['name'] != "" && $_POST['myage'] !=""){
        echo $_POST['name'] . "<br>";
        echo $_POST['myage'] . "<br>";
    }
    else{
        echo "값이 없잖아 임마!!";
        // echo "<script>alert('값을 입력해주세요') history.back();</script>";
    }
?>