<?php 
 
$conn = mysqli_connect("localhost","nandohidayat", "", "penjualan"); 
 
$nm_brg = $_GET['brg'];
 
$query = "insert into jual (user_id, total, bayar) values ('".$puser."',".$ptotal.",".$pbayar.")"; 
 
$data = array();

if(mysqli_query($conn, $query)) {      
    $data[0]['status'] = 'success';
} else {
    $data[0]['status'] = 'failed'; 
}

$data[0]['pdf'] = 'http://ayam-ku-nandohidayat.c9users.io/api/jual/pdf.php?username='.$puser.'&total='.$ptotal.'&bayar='.$pbayar.'';

echo json_encode($data);

mysqli_close($conn); 
 
?> 