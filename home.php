<div class="luar-banner">
	<div class="banner">
		<img width="100%;" src="img/banner.png"/>
	</div>
</div>
<div class="link-daftar-anggota">
	<div class="ldf">
		<?php
			if($_SESSION['username']==""){
		?>
		<span>Not sign up yet?</span><br />
		<a href="?menu=register">Click Here</a> for registration
		<?php
			}else{
			?>
				<span>You're logged in as <?php echo $_SESSION['username'];?>
			<?php
			}
		?>
	</div>
</div>
<div class="luar-kategori-buku">
	<div class="kategori-buku">
		<span class="judulkotak">Books</span><br /><br />
		<div class="">
		<?php
			$myg = mysql_query("select*from kategori order by id asc");
			while($rmyg = mysql_fetch_array($myg)){
				echo "<a href='?menu=cat&cat=$rmyg[id]'>".$rmyg['nama']."</a><br />";
				$s2 = mysql_query("select*from buku where id_kategori='$rmyg[id]'");
				while($es2 = mysql_fetch_array($s2)){
					echo "> <a class='' href='?menu=detail&id=$es2[id]'>".$es2['judul']."</a><br />";
				}
				echo "<br />";
			}
			
		?>
		</div>
	</div>
</div>