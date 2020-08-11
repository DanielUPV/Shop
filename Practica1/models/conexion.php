<?php
	class Conexion{
		public static function conectar(){
			$link = new PDO("mysql:host=localhost;port=3307;dbname=basedatos","root","");
			return $link;
		}
	}
?>