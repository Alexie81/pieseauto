<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
	<section class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="#!">Admin</a>
    </div>
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a href="#!">Noi</a>
        </li>
        <li>
          <a href="#!">Raspunse</a>
        </li>
      </ul>
    </nav>
  </div>
</section>

<ol style="--length: 5" role="list">
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "srvcol";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nume, email, telefon, filename, mesaj, data, ora, status FROM oferte";
$result = $conn->query($sql);
$used = false;

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row["status"] !== "old"){
      echo "<li style='--i: ".$row["id"]."'  data-id=".$row["id"]." data-email=".$row["email"]." data-name=".$row["nume"].">
    <h3>".$row["nume"]."</h3>
    <p>Email: ".$row["email"]."</p>
    <p>Telefon: ".$row["telefon"]."</p>
    <p>Mesaj: ".$row["mesaj"]."</p>
    <p>Data: ".$row["data"]."</p>
    <p>Ora: ".$row["ora"]."</p>
    <p>Talon: <a href='../../uploads/".$row["filename"]."'>Vezi imagine</a></p>
    <button onclick='sendMessage(".$row["id"].", `".$row['email']."`, `".$row['nume']."`, `".$row['filename']."`)' class='raspunde' >Raspunde</button>
  </li>";
} else {
  if(!$used){
    echo "<h3 style='position:absolute; top:50%; left:50%; transform:translate(-50%, -50%);'>Nu ai niciun email nou!</h3>";
    $used = true;
  }
}
}
} else {
  echo "0 results";
}
$conn->close();
?>
  
</ol>



<script src="../js/jquery.min.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="js/main.js"></script>
</body>
</html>