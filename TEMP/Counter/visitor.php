<br/><br/><br/><center><?php
$ip = $_SERVER['REMOTE_ADDR']; // Mengambil IP
$tanggal = date("Ymd"); // Mengambil tanggal
$waktu = time(); // mengambil waktu
 
$con = mysqli_connect("localhost", "root", "", "kancakona");
$query1 = mysqli_query($con,"select * from statistik where ip='$ip' and tanggal='$tanggal'");
 
if(mysqli_num_rows($query1)== 0){
 $ins = mysqli_query($con,"insert into statistik(ip,tanggal,hits,online) values('$ip','$tanggal','1','$waktu')");
}else{
 $upd = mysqli_query($con,"update statistik set hits=hits+1, online=$waktu where ip='$ip' and tanggal='$tanggal'");
}
 
// pengunjung hari ini
$query1 = mysqli_query($con,"select * from statistik where tanggal='$tanggal' group by ip");
$pengunjung = mysqli_num_rows($query1);
 
// Total Pengunjung
$query2 = mysqli_query($con,"select count(hits) as total from statistik");
$hasil2 = mysqli_fetch_array($query2);
$totPengunjung = $hasil2['total'];
 
// Hits hari ini
$query3 = mysqli_query($con,"select sum(hits) as jumlah from statistik where tanggal='$tanggal' group by tanggal ");
$hasil3 = mysqli_fetch_array($query3);
$hits = $hasil3['jumlah'];
 
// Total hits
$query4 = mysqli_query($con,"select sum(hits) as total from statistik");
$hasil4 = mysqli_fetch_array($query4);
$totHits = $hasil4['total'];
 
// Pengunjung yang sedang online
$bataswaktu = time()-300;
$pengunjungOnline = mysqli_num_rows(mysqli_query($con,"select * from statistik where online > $bataswaktu"));
 
// angka total pengunjung dalam bentuk gambar
$folder = "counter";
$ext = ".png";
 
// ubah digit angka menjadi enam digit
$totpengunjunggbr = sprintf("%06d",$totPengunjung);
 
// Ganti angka teks menjadi angka gambar
for($i=0; $i<=9; $i++){
 $totpengunjunggbr = str_replace($i,"<img src='$folder/$i$ext' alt='$i'>",$totpengunjunggbr);
}
 
echo"
$totpengunjunggbr <br/><br/>
 
<img src=\"$folder/hariini.png\"> Today : $pengunjung 
<br/>
<img src=\"$folder/total.png\"> All Visitors : $totPengunjung 
<br/>
<img src=\"$folder/hariini.png\"> Hits : $hits
<br/>
<img src=\"$folder/total.png\"> Total Hits : $totHits
<br/>
<img src=\"$folder/online.png\"> Online : $pengunjungOnline";
?></center>