<style>
	#detail{cursor:default;padding:5px;width:100%;}
</style>

<?php
include 'kon.php';
$sqlber1="SELECT * FROM berita where kategori='ki' and id='1' ";
$resultber1=mysqli_query($con,$sqlber1);
while ($rowber1=mysqli_fetch_array($resultber1)){
	echo '
			<div id="detail">
				<p><b>'.$rowber1["judul"].'</b></p>
				<span style="white-space:pre-wrap;text-align:justify;">'.$rowber1["isi"].'</span>
			</div>
	';
}
?>
