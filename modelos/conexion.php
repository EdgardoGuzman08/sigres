<?php

	class Conexion{
		static public function conectar(){
			$link = new PDO("mysql:host=192.168.100.20;port=3306;dbname=sifcon","eguzman","Unicah123@");
			$link ->exec("set names utf8");
			return $link;
		}
	}