<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('KelimeBol'))
{
    function ImageCompres($image)
    {
		$key = "qagfqyfyQVjd4ysFUpbgjyshRbjm0bP6";
		$input = $image;
		$output = $image;

		$request = curl_init();
		curl_setopt_array($request, array(
		  CURLOPT_URL => "https://api.tinypng.com/shrink",
		  CURLOPT_USERPWD => "api:" . $key,
		  CURLOPT_POSTFIELDS => file_get_contents($input),
		  CURLOPT_BINARYTRANSFER => true,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_HEADER => true,
		  /* Uncomment below if you have trouble validating our SSL certificate.
		     Download cacert.pem from: http://curl.haxx.se/ca/cacert.pem */
		  // CURLOPT_CAINFO => __DIR__ . "/cacert.pem",
		  CURLOPT_SSL_VERIFYPEER => true
		));

		$response = curl_exec($request);
		if (curl_getinfo($request, CURLINFO_HTTP_CODE) === 201) {
		  /* Compression was successful, retrieve output from Location header. */
		  $headers = substr($response, 0, curl_getinfo($request, CURLINFO_HEADER_SIZE));
		  foreach (explode("\r\n", $headers) as $header) {
		    if (substr($header, 0, 10) === "Location: ") {
		      $request = curl_init();
		      curl_setopt_array($request, array(
		        CURLOPT_URL => substr($header, 10),
		        CURLOPT_RETURNTRANSFER => true,
		        /* Uncomment below if you have trouble validating our SSL certificate. */
		        // CURLOPT_CAINFO => __DIR__ . "/cacert.pem",
		        CURLOPT_SSL_VERIFYPEER => true
		      ));
		      file_put_contents($output, curl_exec($request));
		    }
		  }
		} else {
		    print(curl_error($request));
		  /* Something went wrong! */
		  print("Compression failed");
		}
	}
    
    
	function KelimeBol($kelime, $str = 10)
		{
			$k = strip_tags($kelime);
			$f = explode(" ",$k);
			if (count($f) > $str)
			{
				$text = "";
				for($i = 0; $i < $str; $i++){
					$text .= $f[$i]." ";
				}
			}
			else
				$text = $k;
			return $text;
		}
}	
	function HeceBol($kelime, $str = 10)
		{
			$k = strip_tags($kelime);			
			if (count($k) > $str)
			{
				$text = "";	
				$text =substr($k,0,$str);
			}
			else
				$text = $k;
			return $text;
		}
	
	function captcha()
	{
		$CI =& get_instance();
		$CI->load->helper("captcha");
		$sifre = substr(md5(rand(0,999999999999)), -6);
		$vals = array(
			'word'	 => $sifre,
			'img_path'  => './captcha/',  
			'img_url'  => './captcha/',  
			'font_path'  => './system/fonts/texb.ttf',
			'img_width'  => '150',
			'img_height' => 40,
			'expiration' => 7200  
		    ); 
		$cap = create_captcha($vals);
		$CI->session->set_userdata('captcha_word',$cap['word']);  
		return $cap;
	}
		
	function ayarlar()
		{
			$CI =& get_instance();
			$ayar = $CI->xdb->query_array("SELECT * FROM settings");
			return $ayar[0];
		}
	
	function go($par, $time = 0){
		if($time == 0){
			header("Location: {$par}");
				}else{
					header("Refresh: {$time}; url={$par}");
		}
	}
	function entiti($string,$type=1)
	{
		$entities = array(
		'À'=>'&Agrave;',
		'à'=>'&agrave;',
		'Á'=>'&Aacute;',
		'á'=>'&aacute;',
		'Â'=>'&Acirc;',
		'â'=>'&acirc;',
		'Ã'=>'&Atilde;',
		'ã'=>'&atilde;',
		'Ä'=>'&Auml;',
		'ä'=>'&auml;',
		'Å'=>'&Aring;',
		'å'=>'&aring;',
		'Æ'=>'&AElig;',
		'æ'=>'&aelig;',
		'Ç'=>'&Ccedil;',
		'ç'=>'&ccedil;',
		'?'=>'&ETH;',
		'?'=>'&eth;',
		'È'=>'&Egrave;',
		'è'=>'&egrave;',
		'É'=>'&Eacute;',
		'é'=>'&eacute;',
		'Ê'=>'&Ecirc;',
		'ê'=>'&ecirc;',
		'Ë'=>'&Euml;',
		'ë'=>'&euml;',
		'Ì'=>'&Igrave;',
		'ì'=>'&igrave;',
		'Í'=>'&Iacute;',
		'í'=>'&iacute;',
		'Î'=>'&Icirc;',
		'î'=>'&icirc;',
		'Ï'=>'&Iuml;',
		'ï'=>'&iuml;',
		'Ñ'=>'&Ntilde;',
		'ñ'=>'&ntilde;',
		'Ò'=>'&Ograve;',
		'ò'=>'&ograve;',
		'Ó'=>'&Oacute;',
		'ó'=>'&oacute;',
		'Ô'=>'&Ocirc;',
		'ô'=>'&ocirc;',
		'Õ'=>'&Otilde;',
		'õ'=>'&otilde;',
		'Ö'=>'&Ouml;',
		'ö'=>'&ouml;',
		'Ø'=>'&Oslash;',
		'ø'=>'&oslash;',
		'Œ'=>'&OElig;',
		'œ'=>'&oelig;',
		'ß'=>'&szlig;',
		'?'=>'&THORN;',
		'?'=>'&thorn;',
		'Ù'=>'&Ugrave;',
		'ù'=>'&ugrave;',
		'Ú'=>'&Uacute;',
		'ú'=>'&uacute;',
		'Û'=>'&Ucirc;',
		'û'=>'&ucirc;',
		'Ü'=>'&Uuml;',
		'ü'=>'&uuml;',
		'?'=>'&Yacute;',
		'?'=>'&yacute;',
		'Ÿ'=>'&Yuml;',
		'ÿ'=>'&yuml;',
		' '=>'&nbsp;',
		'–'=>'&ndash;',
		'’'=>'&rsquo;'
		);
		htmlspecialchars_decode($string);
		foreach ($entities as $key => $value)
		{
			$ent[] = $key;
			$html_ent[] = $value;
		}
		if ($type==1)
			$new_string = str_replace( $ent, $html_ent, $string );
		else
			$new_string = str_replace( $html_ent, $ent, $string );
		return $new_string;
	}
	