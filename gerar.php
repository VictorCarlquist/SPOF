<?php
	// shell_exec('date'); /
	//Victor Carlquist
	//07/11/12
	ini_set('error_reporting', E_ALL);
	//header("Content-Type: text/html; charset=ISO-8859-1", true); 
	include 'htmlToLatex.php';
	
	$setor = str_replace_assoc($replace,$_POST['setor']);
	$dia = str_replace_assoc($replace,$_POST['dia']);
	$mes = str_replace_assoc($replace,$_POST['mes']);
	$ano = str_replace_assoc($replace,$_POST['ano']);
	$texto = str_replace_assoc($replace,$_POST['texto']);
	$final = str_replace_assoc($replace,$_POST['final']);
	$nome_des = str_replace_assoc($replace,$_POST['nome_destinatario']);
	$nome_rem =str_replace_assoc($replace, $_POST['nome_remetente']);
	$cargo_rem = str_replace_assoc($replace,$_POST['cargo_remetente']);
	$assunto = str_replace_assoc($replace,$_POST['assunto']);
	
	echo $_POST['assunto'];
	if($_POST['assunto'] == 'ã')
		echo "ola";
	
	
	//$texto = str_replace_assoc($replace,$texto);

	$s = <<<EOT
\\nonstopmode
\\documentclass[12pt,a4paper]{report}
\\usepackage[brazil]{babel} % Habilita o uso do idioma português do brasil (PT-BR).
\\usepackage[T1]{fontenc}
\\usepackage[latin1]{inputenc}
\\usepackage{lmodern} % Habilita o uso da font Latin Modern.

\\begin{document}
	Mem. 00/$setor \\\\
	\\begin{flushright} $dia de $mes de $ano.\\end{flushright}
	$nome_des\\\\ \\\\
	$assunto\\\\ \\\\
	$texto\\\\ \\\\
	\\begin{center}
		$final\\\\
		$nome_rem\\\\
		$cargo_rem\\\\
	\\end{center}
\\end{document}
EOT;
	$nome_arq = "memorando.tex";
	$fh = fopen($nome_arq, 'w') or die("can't open file");
	fwrite($fh, $s);
	fclose($fh);
	exec("xelatex memorando.tex");
	chmod ("memorando.log", 0777); 
	chmod ("memorando.pdf", 0777); 
	chmod ("memorando.aux", 0777); 
	chmod ("missfont.log", 0777); 
	exec("xelatex memorando.tex");
	chmod ("memorando.pdf", 0777); 
	//echo $s;
	echo "<a href='memorando.pdf'>Download</a>";
?>
