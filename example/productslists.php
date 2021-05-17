<!DOCTYPE html>
<html>
<head>
<style>

</style>
</head>
<body>
<table>
   <tr>
     <th>Product ID</th>
     <th>Product Name</th>
     <th>Product Price</th>
     <th>Product Quanity</th>
   </tr>
   <?php
   $conn = mysqli_connect("localhost", "root", "product");
   if ($conn-> connect_error) {
     die("Connection failed:". $conn-> connect_error);
   }

   $sql = "SELECT product_id, product_name, product_price, product_quanity FROM prod_tbl";
   $result = $conn-> query($sql);

   if ($result-> num_rows > 0){
     while ($row = $result-> fetch_assoc()){
       echo "<tr><td>". $row["product_id"] ."</td><td>". $row["product_name"] ."</td><td>". $row["product_price"] ."</td><td>". $row["product_quanity"]."</td></tr>"
     }
      echo "</table>";
  }
  else {
    echo "0 result";
  }

  $conn-> close();
   ?>
</table>
</body>
</html>
