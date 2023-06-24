<?php 

$user = "tanase";
$password = "pieseauto2023";
if($_POST["name"] == $user && $_POST["pass"] == $password) {
	header('Location: ../adminpanel');
} else {
	echo "Ati gresit userul sau parola, va rugam sa reincercati!";
}

?>