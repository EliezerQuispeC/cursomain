<?php define ("SITE_ROOT","http://localhost/cursomain");

function mensaje($texto,$opc=1){
  switch ($opc) {
    case 1:
      $cadena='<div class="alert alert-success"> <strong>'.$texto.'</strong></div>';
    break;
    case 2:
      $cadena='<div class="alert alert-info"> <strong>'.$texto.'</strong></div>';
    break;
    case 3:
      $cadena='<div class="alert alert-warning"> <strong>'.$texto.'</strong></div>';
    break;
    case 4:
      $cadena='<div class="alert alert-danger"> <strong>'.$texto.'</strong></div>';
    break;   
  }
	echo $cadena;
}
function obtenerExtensionFichero($str){ return end(explode(".", $str)); }
function urls_amigables($url) { 
      // Tranformamos todo a minusculas 
      $url = strtolower($url);
      //Rememplazamos caracteres especiales latinos 
      $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ'); 
      $repl = array('a', 'e', 'i', 'o', 'u', 'n'); 
      $url = str_replace ($find, $repl, $url); 
      // Añadimos los guiones 
      $find = array(' ', '&', '\r\n', '\n', '+');
      $url = str_replace ($find, '-', $url); 
      // Eliminamos y Reemplazamos otros carácteres especiales 
      $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/'); 
      $repl = array('', '-', ''); 
      $url = preg_replace ($find, $repl, $url); 
      return $url; 
}
function recortar_texto($texto, $limite=100){   
    $texto = trim($texto);
    $texto = strip_tags($texto);
    $tamano = strlen($texto);
    $resultado = '';
    if($tamano <= $limite){
        return $texto;
    }else{
        $texto = substr($texto, 0, $limite);
        $palabras = explode(' ', $texto);
        $resultado = implode(' ', $palabras);
        $resultado .= '...';
    }   
    return $resultado;
}
function generarcodigo($longitud){  
    $exp_reg="[^A-Z0-9]";  
    return substr(eregi_replace($exp_reg, "", md5(rand())) .  
       eregi_replace($exp_reg, "", md5(rand())) .  
       eregi_replace($exp_reg, "", md5(rand())),  
       0, $longitud);  
}
function Security($_Cadena) {  
  $_Cadena = htmlspecialchars(trim(addslashes(stripslashes(strip_tags($_Cadena)))));  
  $_Cadena = str_replace(chr(160),'',$_Cadena);  
  //mysql_real_escape_string($_Cadena);  
  return $_Cadena;  
}
function obtenervideo($url){	
    $url = explode('=', $url);
    $url = $url[1];
	return $url;
}
function debug($var){

  echo '<pre>';
  print_r($var);
  echo '</pre>';
}
?>