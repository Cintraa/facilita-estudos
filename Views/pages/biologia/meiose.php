<?php

	$sidebar = "biologia";
	$conteudo = "Meiose";
	$materia = "Biologia";
	include("Views/includes/header-content.php");

?>
			<hgroup class="title"><h1><span>Meiose</span></h1></hgroup>
			<br>
			<p><topic>Conceito:</topic> A meiose é um processo de divisão celular dos animais em que uma célula-mãe diploide (2n) dá origem a quatro células-filhas haploides (n), <de>divisão reducional, R!</de>. Ocorre para  a porodução de gametas.</p>
			<br>
			<p><topic>Características Gerais:</topic></p>
			<br>
			<ul>
				<li>Sempre produz 4 células filhas haplóides com metade do número de cromossomos da célula mãe;</li>
				<li>Caracteríza-se pelo emparelhamento dos homólogos, crossing over e posterior separação dos homólogos;</li>
				<li>Só ocorre em células diploides;</li>
				<li>Divisão realizada para produção de gametas em animais;</li>
				<li>Ocorre no testículo do macho ou ovário da fêmea.</li>
			</ul>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>meiose.png" alt="meiose">
			<br>
			<subtitle>Fases da Meiose:</subtitle>
			<br>
			<p>Divididas em <de>meiose I</de> (prófase I, metáfase I, anáfase I e telófase I) e  <de>meiose II</de> (prófase II, metáfase II, anáfase II e telófase II).</p>
			<br>
			<p><topic>Prófase I:</topic> </p>
			<br>
			<ol>
				<li>Após o emparelhamento dos cromossomos homólogos, ocorre o <de>crossing over</de> ou permuta.</li>
				<li>Após o desaparecimento do envoltório nuclear, os cromossomos prendem-se as fibras do fuso pelo centrômero ainda unidos pelo quiasma.</li>
			</ol>
			<br>
			<ul>
				<li><b>Crossing Over</b>: Troca de pedaços entre cromossomos homólogos, gera <de>variabilidade genética</de> (mistura genes), resposável pela evolução e diferença entre irmãos.</li>
			</ul>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>profase-i.png" alt="profase-i">
			<br>
			<p><topic>Metáfase I:</topic> Cromossomos em máxima condensação alinham-se ao equador da célula aos pares, sendo que os cromossomos do par estão presos à fibras de polos diferentes.</p>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>metafase-i.png" alt="metafase-i" class="small">
			<br>
			<p><topic>Anáfase I:</topic> Ocorre a separação dos cromossomos homólogos devido ao encurtamento das fibras do fuso.</p>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>anafase-i.png" alt="anafase-i" class="small">
			<br>
			<p><topic>Telófase I:</topic> Após a citocinese serão produzidas duas células filhas haplóides com cromossomos ligados.</p>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>telofase-i.png" alt="telofase-i" class="small">
			<br>
			<p><topic>Meiose II:</topic> Igual as <de>fases da mitose</de>.</p>
		</article>

	</main>
</body>
</html>