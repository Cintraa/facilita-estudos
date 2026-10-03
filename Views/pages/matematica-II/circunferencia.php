<?php

	$sidebar = 'matematica-II';
	$conteudo = 'Circunferência';
	$materia = 'Matemática II';
	include('Views/includes/header-content.php');

?>
			<hgroup class="title"><h1><span>Circunferência</span></h1></hgroup>
			<br>
			<p><topic>Conceito:</topic> Circunferência é uma figura geométrica com formato circular em que todos os seus pontos são igualmente distantes do centro.</p>
			<br>
			<subtitle>Elementos:</subtitle>
			<br>
			<ul>
				<li><b>Raio</b>: Distância do centro a um ponto qualquer da circunferência;</li>
				<li><b>Corda</b>: Qualquer segmento de reta que liga dois de seus pontos;</li>
				<li><b>Diâmetro</b>: Maior corda, passa pelo centro da figura e é o dobro do raio;</li>
				<li><b>Arco</b>: Parte do comprimento de uma circunferência, delimitado por dois pontos que pertencem à circunferência.</li>
			</ul>	
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>elementos-circunferencia.png" alt="elementos-circunferencia">
			<br>
			<subtitle>DIFERENÇA ENTRE CIRCUNFERÊNCIA E CÍRCULO:</subtitle>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>circunferencia-circulo.jpg" alt="circunferencia-circulo">
			<br>
			<subtitle>Ângulos na Circunferência:</subtitle>
			<br>
			<ol>
				<li>Ângulo Central:</li>
				<br>
				<p>Corresponde a todo ângulo que possui o vértice (ponta) no <de>centro da circunferência</de> e seus lados são raios. Sua medida é igual a medida do ângulo do arco correspondente (que enxerga).</p>
				<br>
				<img src="<?php echo INCLUDE_PATH_IMG; ?>angulo-central.png" alt="angulo-central.png">
				<br>
				<li>Ângulo Inscrito:</li>
				<br>
				<p>Corresponde a todo ângulo que possui o vértice (ponta) na <de>circunferência</de> e seus lados são cordas. Sua medida é igual a medida da metade do ângulo do arco correspondente (que enxerga).</p>
				<br>
				<img src="<?php echo INCLUDE_PATH_IMG; ?>angulo-inscrito.png" alt="angulo-inscrito.png">
			</ol>
		</article>
		
	</main>
</body>
</html>			