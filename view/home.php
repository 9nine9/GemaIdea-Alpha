<?php 
$title	= "Road to Gemastik 10";
include "header.php";
?>

<!-- menu -->
<div class="container">
	<button class="btn" id="about-btn">About</button>
	<div class="col-sm-8 col-xs-12 col-sm-offset-2" id="about">
		 <div class="product" style="text-align:left; padding:20px;">
		 	<h2>About</h2>
		 	<p>Merupakan wadah bagi teman-teman yang tertarik mengikuti Gemastik 10 yang kesulitan mencari anggota untuk membentuk sebuah tim..
		 	<br>Teman-teman tidak harus punya kemampuan yang wow di bidang TIK untuk bisa mengikuti peminatan ini, yang penting teman-teman punya ketertarikan untuk membuat sebuah karya
		 	<br>Teman-teman yang punya ide tapi bingung cara mewujudkannya, bisa share ide teman-teman di sini supaya orang lain yang tertarik bisa membentuk sebuah tim bersama-sama..
		 	<br> Dan yang juga hanya ingin menambah teman, relasi, pengalaman, ilmu, gebetan, dll..
		 	<br>Teman-teman bisa mengisi form nya <a href="submit.php">di sini</a> </p>
		 </div>
	</div>
	<div class="col-sm-4 col-xs-12 col-sm-offset-2">
	    <div class="product">
			<h2>Find</h2>
			<a href="submit.php">Yuk daftar peminatan Gemastik!</a>
			<p>Temukan teman yang mempunyai peminatan yang sama di bidang Gemastik, sehingga dapat belajar bersama atau membuat sebuah tim baru untuk berkompeti di Gemastik 10</p>
		</div>
		<button class="btn prd-btn" id="find-btn">Lihat</button>
	</div>
	<div class="col-sm-4 col-xs-12">
	    <div class="product">
			<h2>Idea</h2>
			<a href="submit.php">Punya ide?</a>
			<p>Lihat ide-ide berlian di bidang TIK, dan jika Anda mempunyai kemampuan dan tertarik untuk mewujudkan ide tersebut bersama si penggagasnya, maka tidak ada salahnya membuat sebuah tim baru untuk berkopetisi di Gemastik 10 </p>

		</div>
		<button class="btn prd-btn" id="idea-btn">Lihat</button>
	</div>
</div>

<div class="center">
	<h2 id="cate">Find</h2> 
</div>

<div class="container" id="skill-content"></div>
<div class="container" id="idea-content"></div>

<div class="container">
	<div class="col-sm-12 center">
		<div id="status"></div>
	</div>

	<div class="col-sm-12 col-xs-12" style="margin-top:20px">
		<div class="col-sm-3 col-xs-6 col-sm-push-3" id="skill-more">
			<button class="btn prd-btn" onClick="skill_more()">Muat Lebih skil</button>
		</div>
		<div class="col-sm-3 col-xs-6 col-sm-push-3" id="idea-more">
			<button class="btn prd-btn" onClick="idea_more()">Muat Lebih ide</button>
		</div>
		<div class="col-sm-3 col-xs-6 col-sm-push-3">
			<a href="#top"><button class="btn prd-btn">Ke Atas</button></a>
		</div>
	</div>
</div>

</body>
</html>

<script>

var idea_btn = true; 
var skill_btn = true; 

$('#status').hide();
$('#idea-more').hide();
$('#skill-more').show();
$('#idea-content').hide();
$('#skill-content').show();

$(function(){
	
	$('#find-btn').click(function(){
		$('#cate').html("Find");
		$('#idea-more').hide();
		
		if(skill_btn){
			$('#skill-more').show();
		}

		$('#idea-content').hide();
		$('#skill-content').show();
	});

	$('#idea-btn').click(function(){
		$('#cate').html("Idea");
		
		if(idea_btn){
			$('#idea-more').show();
		}

		$('#skill-more').hide();

		$('#idea-content').show();
		$('#skill-content').hide();
	});

	$('#about-btn').click(function(){
		$('#about').toggle();
	});
});


var idea_min = 0;
var skill_min = 0;

function getAJAX(data, content){
	$('#status').show();
	$('#status').html('Loading...');
	$.ajax({
		type: 'post',
		url: 'content.php',
		data: data,

		success: function(html){
			$(content).append(html);
			$('#status').hide();
		}
	});
}

function idea_more(){
	var data = 'min='+idea_min+'&idea=';
	getAJAX(data, '#idea-content');
	idea_min += 10;
}

function skill_more(){
	var data = 'min='+skill_min+'&skill=';
	getAJAX(data, '#skill-content');
	skill_min += 10;
}

skill_more();
idea_more();
</script>
