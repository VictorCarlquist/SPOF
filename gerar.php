<?php
	// shell_exec('date'); /
	//Victor Carlquist
	//07/11/12
	include 'htmlToLatex.php';
	
	$setor = $_POST['setor'];
	$dia = $_POST['dia'];
	$mes = $_POST['mes'];
	$ano = $_POST['ano'];
	$texto = $_POST['texto'];
	$final = $_POST['final'];
	$nome_des = $_POST['nome_destinatario'];
	$nome_rem = $_POST['nome_remetente'];
	$cargo_rem = $_POST['cargo_remetente'];
	$assunto = $_POST['assunto'];
	
	
	$texto = str_replace_assoc($replace,$texto);

	$s = <<<EOT
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
	system("xelatex memorando.tex");
	chmod ("memorando.log", 0777); 
	chmod ("memorando.pdf", 0777); 
	chmod ("memorando.aux", 0777); 
	chmod ("missfont.log", 0777); 
	echo system("xelatex memorando.tex");
	chmod ("memorando.pdf", 0777); 
	//echo $s;
	echo "<a href='memorando.pdf'>Download</a>";
?>
