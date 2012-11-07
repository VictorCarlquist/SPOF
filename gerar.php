<?php
	// shell_exec('date'); /
	
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
\\documentclass[12pt,a4paper]{article}
\\usepackage[brazil]{babel} % Habilita o uso do idioma português do brasil (PT-BR).
\\usepackage[T1]{fontenc} 
%\\usepackage{fontspec} % Habilita maior variedade de acentos. Pode ser necessario adicionar outros pacotes.
\\usepackage{lmodern} % Habilita o uso da font Latin Modern.
\\begin{document}
	Mem. 00/$setor \\\\
	 $dia de $mes de $ano.
	
	$nome_des\\
	$assunto\\
	$texto\\
	
	\\begin{center}
		$final\\
		$nome_remetente\\
		$cargo_remetente\\
	\\end{center}
\\end{document}
EOT;
	$nome_arq = "memorando.tex";
	$fh = fopen($nome_arq, 'w') or die("can't open file");
	fwrite($fh, $s);
	fclose($fh);
	shell_exec("xelatex memorando.tex");
	chmod ("memorando.log", 0777); 
	chmod ("memorando.pdf", 0777); 
	chmod ("memorando.aux", 0777); 
	echo shell_exec("xelatex memorando.tex");
	chmod ("memorando.pdf", 0777); 
	echo $s;
	echo "<a href='memorando.pdf'>Download</a>";
?>
