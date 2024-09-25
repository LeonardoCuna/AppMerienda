<?php
	class Conectar{
		
		
		public static function conexion(){
			$conexion = new mysqli("localhost", "root", "", "meriendatecno");
			
			$conexion->query("SET NAMES 'utf8'"); 
			//Devuelve la conexion
			return $conexion;
		}
		
	}
?>