<?php
include("config.php");
$name="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["search"];
}

$query = "SELECT name,image,content,author FROM project where name=?";

if ($stmt = $db->prepare($query)) {
 $stmt->bind_param("s",$name);
 $stmt->execute();
 $stmt->bind_result($name,$image,$content,$author);
 $table1 = <<< TABLE
<table border="1">
  <thead><tr>
   <th>Name</th><th>Content</th>
  </tr></thead>
  <tbody>
TABLE;
$table2=<<< TABLE
<table border="1">
  <thead><tr>
   <th>Author</th>
  </tr></thead>
  <tbody>
TABLE;
$table3=<<< TABLE
<table border="1">
  <thead><tr>
   <th>Coverpage</th>
  </tr></thead>
  <tbody>
TABLE;
 while ($stmt->fetch()) {

  $table1 .= "<tr><td width='200' height='100'>$name</td><td width='100' height='100'>$content</td></tr>";
  $table2 .= "<tr><td width='200' height='100'>$author</td>";
  $table3 .= "<tr><td><img src='$image' style='width:300px; height:400px;'</td></tr>";
 }
 $table1 .= "</tbody></table>";
 $table2 .= "</tbody></table>"; 
 $table3 .= "</tbody></table>";
 $stmt->close();
} else {
  printf("Prepared Statement Error: %s\n", $db->error);
}

?>

<!DOCTYPE html>
<html>
<head>
<title>DIY Projects</title>
<link rel="stylesheet" type="text/css" href="css/search.css">
</head>

<body>

<h1>DIY Project Search</h1>


  <input type="submit" name="Home" value="Home" >
</form>
 

<form method="post" action="search.php">
  <input type="text" name="search" placeholder="Search..">
  <input type="submit" name="Search" onClick="show()" >

</form>

<div id='div1' style.display="none">

<?php echo $table1;
      echo $table2;
      printf($table3);

 ?>
</div>


<script>
function show(){
  document.getElementById('div1').style.display = 'block';
}
</script>


</body>
</html> 