<?php
if(!isset($_POST['min'])){
	echo "Something wrong!";
	die();
}

require_once "../controller/content.php";

if(isset($_POST['skill'])){
	$skill_content = new content;
	$skill_content->get_skill_content();

			
		for($i=0 ; $i<count($skill_content->id) ; $i++){
			$id 		= $skill_content->id[$i];
			$name 		= $skill_content->name[$i];
			$category 	= $skill_content->category[$i];
			$skill 		= $skill_content->skill[$i];
			$departement= $skill_content->departement[$i];
			$batch 		= $skill_content->batch[$i];
			$contact 	= $skill_content->contact[$i];
			$created 	= $skill_content->created[$i];

			echo '
				<div class="col-sm-4 col-xs-12 col-sm-push-2">
					<div class="content">
			';


			echo "<h3>$name</h3>";

			echo "<label>Keahlian/pengalaman</label>";
			echo "<br>$skill";
			
			echo "<div style='border-bottom:2px solid black; margin-top:20px'></div>";
			echo "<label>Minat di Bidang</label>";
			echo "<br>$category";

			echo "<div style='border-bottom:2px solid black; margin-top:20px'></div>";
			echo "<label>Contact</label>";
			echo "<br>$contact";
			
			echo "<div style='border-bottom:2px solid black; margin-top:20px'></div>";
			echo "<h6>$departement - $batch</h6>";
			echo "<h6>Created : $created #$id</h6>";

			echo '
					</div>
				</div>
				
			';

			if(($i+1)%2 == 0){
				echo '
					<div class="col-sm-12"></div>
				';
			}
		}
		
		if($i == 0){
			echo '<div class="col-sm-12 center"><div>No Record More</div></div>';
			echo '<script>$("#skill-more").hide(); skill_btn=false;</script>';
		}

	$skill_content = null;
}

if(isset($_POST['idea'])){
	$idea_content = new content;
	$idea_content->get_idea_content();

			
		for($i=0 ; $i<count($idea_content->id) ; $i++){
			$id 		= $idea_content->id[$i];
			$name 		= $idea_content->name[$i];
			$project 	= $idea_content->project[$i];
			$description= $idea_content->description[$i];
			$need 		= $idea_content->need[$i];
			$contact 	= $idea_content->contact[$i];
			$created 	= $idea_content->created[$i];

			echo '
				<div class="col-sm-4 col-xs-12 col-sm-push-2">
					<div class="content">
			';


			echo "<h3>$project</h3>";

			echo "<label>Deskripsi ide/project</label>";
			echo "<br>$description";
			
			echo "<div style='border-bottom:2px solid black; margin-top:20px'></div>";
			echo "<label>SDM yang dibutuhkan</label>";
			echo "<br>$need";

			echo "<div style='border-bottom:2px solid black; margin-top:20px'></div>";
			echo "<label>Contact</label>";
			echo "<br>$contact";
			
			echo "<div style='border-bottom:2px solid black; margin-top:20px'></div>";
			echo "<h6>Created : $created #$id</h6>";

			echo '
					</div>
				</div>
				
			';

			if(($i+1)%2 == 0){
				echo '
					<div class="col-sm-12"></div>
				';
			}
		}
		
		if($i == 0){
			echo '<div class="col-sm-12 center"><div>No Record More</div></div>';
			echo '<script>$("#idea-more").hide(); idea_btn=false;</script>';
		}

	$idea_content = null;
}
?>



