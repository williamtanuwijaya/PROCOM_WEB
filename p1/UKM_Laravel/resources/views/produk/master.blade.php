@include('produk.header');

<h1>Ini Halaman Produk</h1>
<?php 
$host = "localhost";
$user = "root";
$pass = "";
$database = "UKM_Programming";

$conn = mysqli_connect("$host", "$user", "$pass", "$database");
$procom = mysqli_query($conn, "SELECT * FROM produk");
$no = 1;
foreach($procom as $row){
echo"
<tr>
  <td>Makanan</td>
  <td>".$row['nama']."</td>
  <td>".$row['harga']."</td>
</tr>
<tr>
  <td>Minuman</td>
  <td>".$row['nama']."</td>
  <td>".$row['harga']."</td>
</tr>
";
$no++;
};

?>
<!-- <h2>makanan: {{$makanan}}</h2>
<h2>minuman: {{$minuman}}</h2> -->
@include('produk.footer');