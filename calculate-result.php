<!DOCTYPE html>
<html>
<head>
  <title>Result</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="row">
    


<?php 
  
  //แบบที่1.รับค่ามาจากหน้าที่แล้ว
  //ส่งค่ามาเป็น POST
  //$thb = $_POST['attribute name'];
  $thb = $_POST['thb'];
  $type = $_POST['type'];

 

  if ($type=="USD") {
    $result = $thb/31.2273;
  } elseif ($type=="JPY") {
    $result = $thb/28.9814;
  } elseif ($type=="KRW") {
    $result = $thb/0.0293;
  } elseif ($type=="GBP") {
    $result = $thb/43.3292;
  } elseif ($type=="EUR") {
    $result = $thb/38.2737;
  }
?>
  <br>
  <br>
  <h1 class="text-center"><b> Result Exchange rate </b></h1>

  <br>
<div class="col-md-12">
  <a class="btn btn-primary col-md-3 col-md-offset-9" href="index.php">Back to exchange rate
  </a>
</div>
  <br><br>
  <br>

<div class=" col-md-12 well">
<h4 class=" text-center">
<?php 
  echo "ค่าที่กรอก คือ ".$thb;
  echo "<br>";
  echo "<br>";
  echo "สกุลเงินที่ใช้คำนวน ".$type;
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<b>"."Result = ".$result;
?>
</h4>
</div>
<?php 
  require 'connect.php';

  $sql = "INSERT INTO exch002_history(thb, calculated, currency) VALUES($thb, $result, '$type')";
  $sql_exe=$conn -> query($sql);
?>

<?php 
     $sql = "SELECT * FROM exch002_history ORDER BY dateRecord DESC";
     $sql_exe = $conn -> query($sql);
    ?>

  <table class="table table-striped table-hover">
   <thead>
    <tr>
     <th class="text-center" colspan="5"><h2><b>History</b></h2> </th>
    </tr>
    <tr>
     <th>You money</th>
     <th>Currency</th>
     <th>Calculated</th>
     <th>Time Record</th>
     <th>Delete</th>
    </tr>
   </thead>

  <?php 
   

   while ($row = mysqli_fetch_assoc($sql_exe)) {
         // $array['key/field name'];
    echo "<tr>
          <td>".$row['thb']."</td>
          <td>"." exchage to ".$row['currency']."</td>
          <td>".$row['calculated']."</td>
          <td>".$row['dateRecord']."</td>";

  ?>
  <td><a class="btn btn-danger"  href="delete.php?id=<?php echo $row['recordID']?> &thb=<?php echo $row['thb'] ?>">Delete</a></td>
  </tr>
  <?php

   }
   $conn->close();
  ?>
  </table>
  </div>
</div>
</body>
</html>





