<?php  

class Config extends model
{
	
	public function getConfig(){
		$array = array();
		$sql= "SELECT * FROm config";
		$sql=$this->db->query($sql);

		if($sql->rowCount() >0){
			foreach ($sql->fetchAll() as $c) {
				$array[$c['name']]= $c['valor'];
				//name é a chave do array e recebe o campo valor, 				
			}
		}
		return $array;
	}
}
?>