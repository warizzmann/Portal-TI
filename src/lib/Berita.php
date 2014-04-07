<style>
	#isi{cursor:pointer;padding:5px;width:100%;border:1px solid lightblue;text-align:justify;}
	#isi:hover{background-color:lightblue;}
</style>

<?php
include 'kon.php';
$sqlber1="SELECT * FROM berita where kategori='ki'";
$resultber1=mysqli_query($con,$sqlber1);
while ($rowber1=mysqli_fetch_array($resultber1)){
$preview=substr($rowber1["isi"],0,260);
	echo '	
		<div id="content-berita">
			<div id="isi" onclick="detailed('.$rowber1["id"].',\''.$rowber1["judul"].'\');">
				<div id="judul"><p><b>'.$rowber1["judul"].'</b></p></div>
				'.$preview.'
			</div>
		</div>
	';
}
?>
