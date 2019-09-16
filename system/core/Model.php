<?php 

	class Model
	{
		protected $db;
		
		public function __construct()
		{
			/* $this->db = new PDO('mysql:host=' . HOST . ';dbname=' . DB . ';charset=utf8', USER, PASS); */
			$this->db = new mysqli(HOST, USER, PASS, DB);
			$this->db->set_charset('utf8');
		} 

	}                                                                                                                                                                                                                                                                                

 ?>