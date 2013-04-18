<?php
class Request
{

	public $controller=DEFAULT_CONTROLLER;
	public $action = 'index';
	public $params = array();

	public function __construct()
	{

		// kirjutatud aadressi lisaparameetrid kuvatakse
		if (isset($_SERVER['PATH_INFO'])) {
			// $_SERVER['PATH_INFO'] = /kasutajad/vaatamine/23

			if ($path_info = explode('/', $_SERVER['PATH_INFO'])) {

				// tagastab esimese liikme, reastab numbrid uuesti, kuvab allesjäänud liikmed
				array_shift($path_info);

				// toob klassist vajaliku muutuja välja, mida vaja. kui $path_info-s esimest liiget, kuvatakse 'welcome'
				// kontrollitakse, kas pathinfo [0] -1. liige on olemas. kui on, hakkab kontroller tööle.
				$this->controller = isset($path_info[0]) ? array_shift($path_info) : 'welcome';
				// eelmisest reast ülejäänud massiivist võetakse uuesti esimene path_info[0] liige ning selle olemasolul
				// juhul kui path_info-s pole esimest liiget, kuvatakse 'index'
				$this->action = isset($path_info[0]) && ! empty ($path_info[0]) ? array_shift($path_info) : 'index';
				$this->params = isset($path_info[0]) ? $path_info : NULL;
			}
		}
	}
		//Fn ümbersuunamiseks, parameeter on $destination(väärtuse saab  funktsioon tema väljakutsumisel)
		public function redirect($destination)
		{
			header('Location: '.BASE_URL.$destination);
		}
	}


$request = new Request;