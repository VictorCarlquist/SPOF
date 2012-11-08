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
		'<i>'=>'\textit{',
		'</i>'=>'}',
		'<strong>'=>'\textbf{',
		'</strong>'=>'}',
		'<span style="text-decoration: underline;">'=>'\underline{',
		'</span>'=>'}',
		'&'=>''
	);

	echo str_replace_assoc($replace,$string);


	function str_replace_assoc(array $replace, $subject) {
	   return str_replace(array_keys($replace), array_values($replace), $subject);   
	}
 
	 

?>
