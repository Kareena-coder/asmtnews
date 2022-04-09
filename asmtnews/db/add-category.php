<?php
include('connect.php');
if(isset($_POST['category'])){
    $category = $_POST['category'];
    $iconclass = $_POST['iconclass'];
    if($category!=''){
        $query = "INSERT INTO category(title,iconImage) VALUES('$category','$iconclass')";
         if(mysqli_query($conn,$query)){
             $msg = "successfully inserted";

         }else{
             $msg = mysqli_error($conn);
         }
         header('location:../category.php?msg='.$msg);

    }else{
        $msg = "category name required";
        header('Location:../category.php?errmsg='.$msg);
    }
}
?>