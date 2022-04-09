<?php
if (!isset($_POST['category'])){
    die("can not edit the record");
}else{
    $c =$_POST['category'];
    $i = $_POST['iconclass'];
    $id= $_POST['id'];
    include('connect.php');
    $query="UPDATE category SET title='$c',iconImage='$i'WHERE id='$id'";
    if(mysqli_query($conn,$query)){
        header('Location:../category.php?msg=successfully updated');
    }else{
        header('Location:../category.php?errmsg' . mysqil_error($conn));
    }
}
?>