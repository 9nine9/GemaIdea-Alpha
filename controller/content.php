<?php
require_once "config.php";

class content extends db{
	public $id, $name, $category, $skill, $departement, $batch, $contact, $created, $arr, $temp;
	public $project, $description, $need;
	public $result;

	function __construct(){
	}
	
	use common_control;

	public function get_skill_content(){

		$this->result = $this->db("
									SELECT *
									FROM gema_category
									ORDER BY id ASC
								");
		while($data = mysqli_fetch_assoc($this->result)){
			$this->arr[] = $data['category'];
		}

		$min = $_POST['min'];

		$this->result = $this->db("
									SELECT *, DATE_FORMAT(created, '%d-%m-%Y') AS created
									FROM gema_skill
									ORDER BY created DESC
									LIMIT 10 OFFSET $min
								");

		while($data = mysqli_fetch_assoc($this->result)){
			$this->temp  = explode(",", $data['category']);
			
			$category = '';
			for($i=0 ; $i<count($this->temp) ; $i++){
				 $category .= $this->arr[$this->temp[$i]]."<br>";
			}

			$this->category[] 	= $category;
			$this->id[] 		= $data['id'];
			$this->name[]	 	= $data['name'];
			$this->skill[] 		= $data['skill'];
			$this->departement[]= $data['departement'];
			$this->batch[]	 	= $data['batch'];
			$this->contact[] 	= $data['contact'];
			$this->created[] 	= $data['created'];

		}
	}

	public function get_idea_content(){
		$min = $_POST['min'];

		$this->result = $this->db("
									SELECT *, DATE_FORMAT(created, '%d-%m-%Y') AS created
									FROM gema_ide
									ORDER BY created DESC
									LIMIT 10 OFFSET $min
								");

		while($data = mysqli_fetch_assoc($this->result)){
			$this->id[] 		= $data['id'];
			$this->name[]	 	= $data['name'];
			$this->project[]	= $data['project'];
			$this->description[]= $data['description'];
			$this->need[]	 	= $data['need'];
			$this->contact[] 	= $data['contact'];
			$this->created[] 	= $data['created'];

		}
	}




}
