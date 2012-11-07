<?php
	
	$replace = array(
		'<ol>' => '\\begin{enumerate} ',
		'</ol>' => '\\end{enumerate} ',
		'<ul>' => '\\begin{itemize} ',
		'</ul>' => '\\end{itemize} ',
		'<li>' => '\\item ',
		'</li>' => '',
		'</p>'=>' \\ \\ ',
		'<p>'=>'',
	);

	echo str_replace_assoc($replace,$string);


	function str_replace_assoc(array $replace, $subject) {
	   return str_replace(array_keys($replace), array_values($replace), $subject);   
	}
 
	 

?>
