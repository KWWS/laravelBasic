<?php
	namespace App\Http\Controllers;
	use Request; 
	class ClienteController extends Controller{
		public function listar(){
			$data = date("Y-m-d");
			if($data>='2018-05-12'){
				$msg = "Inscrição finalizada";
			}else{
				$msg = "Inscrição em aberto";
			}			
			return view("listar")->with("msg", $msg);
		}	
		
		public function listar2(){
			$nomes = array(1=>"joao",2=>"maria",3=>"pedro");
			return view("listar2")->with("nomes",$nomes); 
		}	
		
		public function editar(){
			if(Request::has('id')){
				$id = Request::input("id");
			}else{
				$id=0;
			}	
			return view("editar")->with("id",$id); 
		}	
		
		public function novo(){
			if(view()->exists('novo')){
				return view("novo");
			}else{
				return view("welcome");
			}		
		}	
	}

?>