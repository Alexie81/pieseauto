<?php
ini_set("display_errors", "On");

$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = $_SERVER["DOCUMENT_ROOT"]."/srvcol/uploads/"; // upload directory

if($_FILES['file'])   {
    $img = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];
    echo $_POST['email'];

    // get uploaded file's extension
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    // can upload same file using rand function
    $final_image = $_POST['file_name'].$img;
    // check's valid format
    if(in_array($ext, $valid_extensions)) { 
        $path = $path.strtolower($final_image); 

        if(move_uploaded_file($tmp,$path)) {
            echo "<img src='$path' />";
            echo $img;
        }
    }
$db = mysqli_connect("localhost", "root", "", "srvcol");
$sql = "INSERT INTO oferte (nume,email,telefon,filename,mesaj,data,ora,status) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$final_image."','".$_POST['message']."','".$_POST['data']."','".$_POST['ora']."','".$_POST['status']."')";

mysqli_query($db, $sql);

}
?>