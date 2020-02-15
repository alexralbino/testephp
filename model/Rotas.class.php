<?php

Class Rotas{

	public static $pag;
	private static $pasta_controller = 'controller';
	private static $pasta_view = 'view';
	private static $pasta_ADM = 'adm';



	static function get_SiteHOME(){
		return Config::SITE_URL . '/' .Config::SITE_PASTA;
	}

	static function pag_Cadastro(){
		return Config::SITE_URL . '/cadastro';

	}

	static function get_SiteTEMA(){
		return  self::get_SiteHOME(). '/' .self::$pasta_view;
	}

	static function pag_Logado(){
		return self::get_SiteHOME(). '/logado';
	}

	static function Redirecionar($tempo, $pagina){
		$url = '<meta http-equiv="refresh" content="'.$tempo.'; url='. $pagina .'">';
		echo $url;
	}

	static function get_Pagina(){
		if(isset($_GET['pag'])){

			$pagina = $_GET['pag'];

			self::$pag = explode('/', $pagina);

			//echo '<pre>';
			//var_dump(self::$pag);
			//echo '</pre>';


			$pagina = 'controller/' .self::$pag[0] . '.php';
			//$pagina = 'controller/' .$_GET['pag'] . '.php';

			if(file_exists($pagina)){
				include $pagina;
			}else{
			include 'erro.php';
		}

		}
	}
}

 ?>
