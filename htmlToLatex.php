<?php
	//Victor Carlquist
	//07/11/12
	$replace = array(
		'<ol>' => '\\begin{enumerate} ',
		'</ol>' => '\\end{enumerate} ',
		'<ul>' => '\\begin{itemize} ',
		'</ul>' => '\\end{itemize} ',
		'<li>' => '\\item ',
		'</li>' => '',
		'</p>'=>'',
		'<p>'=>'',
		'<em>'=>'\textit{',
		'</em>'=>'}',
		'<u>'=>'\underline{',
		'</u>' => '}',
		'<strong>'=>'\textbf{',
		'</strong>'=>'}',
		'<span style="text-decoration: underline;">'=>'\underline{',
		'</span>'=>'}',
		'&nbsp;'=>'\\\\',
		'<br />'=>'\\\\',
		
		'&eacute;'=>'é',
		'&Eacute;'=>'É',
		'&ecirc;'=>'ê',
		'&Ecirc;'=>'Ê',
		'&Egrave;'=>'È',
		'&egrave;'=>'è',
		'&Euml;'=>'Ë',
		'&euml;'=>'ë',
		'&etilde;'=>'ẽ',
		'&Etilde;'=>'Ẽ',
		
		'&aacute;'=>'á',
		'&Aacute;'=>'Á',
		'&acirc;'=>'â',
		'&Acirc;'=>'Â',
		'&Agrave;'=>'À',
		'&agrave;'=>'à',
		'&Auml;'=>'Ä',
		'&auml;'=>'ä',
		'&atilde;'=>'ã',
		'&Atilde;'=>'Ã',
		
		'&iacute;'=>'í',
		'&Iacute;'=>'Í',
		'&icirc;'=>'î',
		'&Icirc;'=>'Î',
		'&Igrave;'=>'Ì',
		'&igrave;'=>'ì',
		'&Iuml;'=>'Ï',
		'&iuml;'=>'ï',
		'&itilde;'=>'ĩ',
		'&Itilde;'=>'Ĩ',
		
		'&oacute;'=>'ó',
		'&Oacute;'=>'Ó',
		'&ocirc;'=>'ô',
		'&Ocirc;'=>'Ô',
		'&Ograve;'=>'Ò',
		'&ograve;'=>'ò',
		'&Ouml;'=>'Ö',
		'&ouml;'=>'ö',
		'&otilde;'=>'õ',
		'&Otilde;'=>'Õ',
		
		'&uacute;'=>'ú',
		'&Uacute;'=>'Ú',
		'&ucirc;'=>'û',
		'&Ucirc;'=>'Û',
		'&Ugrave;'=>'Ù',
		'&ugrave;'=>'ù',
		'&Uuml;'=>'Ü',
		'&uuml;'=>'ü',
		'&utilde;'=>'ũ',
		'&Utilde;'=>'Ũ',
	);


	function str_replace_assoc(array $replace, $subject) {
	   return str_replace(array_keys($replace), array_values($replace), $subject);   
	}
 
	 

?>
