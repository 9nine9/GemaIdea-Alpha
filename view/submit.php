<?php 
$title	= "Submit";
include "header.php";
?>

<div class="container">

	<div class="col-sm-6 col-xs-12">
		<!-- submit the skill -->
        <form class="form-horizontal" method="post" autocomplete="off">
	    	<div class="col-sm-12 regist">
				
				<h2>Peminatan</h2>
				<h5>Punya keahlian? Bingung karena belum ada ide?<br> Atau pengen ikut Gemastik tapi gak ada tim? <br> Submit peminatan kamu di sini supaya orang lain dapat melihat dan tertarik untuk membuat tim bersama kamu..</h5>

	    		<h2><button id="btn-skill" class="btn">Open Form</button></h2>

				<div class="skill">
			 		<div class="form-group">
		                <input type="text" name="name" placeholder="Nama Pengirim" required class="form-control center" minlength="4" maxlength="50">
		            </div>
		            <div class="form-group">
		                <textarea name="skill" placeholder="Keahlian/pengalaman" required class="form-control center"></textarea>
		            </div>
		            <div class="form-group">
		        		 <input type="text" name="departement" placeholder="Departemen" required class="form-control center">
		            </div>
		            <div class="form-group">
		        		 <input type="number" name="batch" placeholder="Tahun Angkatan" required class="form-control center" min="2012">
		            </div>
		            <div class="form-group">
		               <textarea name="contact" placeholder="Kontak yang Dapat Dihubungi" required class="form-control center"></textarea>
		            </div>
		            <div class="form-group">
		        		<div><label>Bidang yang Diminati</label></div>
		        		<div class="col-sm-6 left">
			            	<div>
			            		<input type="checkbox" name="categoty[]" value="0">Pemrograman
			            	</div>
			            	<div>
			            		<input type="checkbox" name="categoty[]" value="1">Pengembangan Aplikasi Permainan
			            	</div>
			            	<div>
			            		<input type="checkbox" name="categoty[]" value="2">Pengembangan Perangkat Lunak
			            	</div>
			            	<div>
			            		<input type="checkbox" name="categoty[]" value="3">Data Mining
			            	</div>
			            	<div>
			            		<input type="checkbox" name="categoty[]" value="4">Keamanan Jaringan
			            	</div>
			            </div>
			            <div class="col-sm-6 left">
			            	<div>
			            		<input type="checkbox" name="categoty[]" value="5">Animasi
			            	</div>
			            	<div>
			            		<input type="checkbox" name="categoty[]" value="6">Piranti Cerdas
			            	</div>
			            	<div>
			            		<input type="checkbox" name="categoty[]" value="7">Desain UI/UX
			            	</div>
			          
			            	<div>
			            		<input type="checkbox" name="categoty[]" value="8">Pengembangan Bisnis TIK
			            	</div>
			            	<div>
			            		<input type="checkbox" name="categoty[]" value="9">E-Government
			            	</div>
		            	</div>
		            </div>
				</div>
			</div>
			<div class="form-group skill">
				<button name="regist" type="submit" class="btn regist-btn">Submit</button>
			</div>
		</form>
	</div>

	
	<div class="col-sm-6 col-xs-12">

		<!-- submit the idea -->
        <form class="form-horizontal" method="post" autocomplete="off">
	    	<div class="col-sm-12 regist">
				
				<h2>Punya Ide?</h2>
				<h5>Punya ide? Bingung karena belum ada tim? <br> Submit ide kamu di sini supaya orang lain dapat melihat dan tertarik untuk membuat tim bersama kamu..</h5>

	    		<h2><button id="btn-idea" class="btn">Open Form</button></h2>

				<div class="idea">
			 		<div class="form-group">
		                <input type="text" name="name" placeholder="Nama Pengirim" required class="form-control center" minlength="4" maxlength="50">
		            </div>
		            <div class="form-group">
		                <input type="text" name="project" placeholder="Nama Ide/Project" required class="form-control center">
		            </div>
		            <div class="form-group">
		                <textarea name="description" placeholder="Deskripsi Ide/Project" required class="form-control center"></textarea>
		            </div>
		            <div class="form-group">
		        		 <textarea name="need" placeholder="Sumber Daya Manusia yang Dibutuhkan (contoh : programming, desainer, dll)" required class="form-control center"></textarea>
		            </div>
		            <div class="form-group">
		               <textarea name="contact" placeholder="Kontak yang Dapat Dihubungi" required class="form-control center"></textarea>
		            </div>
		           
				</div>
			</div>
			<div class="form-group idea">
				<button name="regist" type="submit" class="btn regist-btn">Submit</button>
			</div>
		</form>
	</div>
</div>

</body>
</html>