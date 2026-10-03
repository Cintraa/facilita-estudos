<?php

	$sidebar = 'biologia';
	$conteudo = 'Bioenergética';
	$materia = 'Biologia';
	include('Views/includes/header-content.php');

?>

			<hgroup class="title"><h1><span>Introdução à Bioenergética</span></h1></hgroup>
			<br>
			<p><topic>Conceito:</topic> O termo bioenergética a área da biologia que estuda as transformações de energia, que ocorrem por meio de processos químicos e transformam combustível celular (<de>glicose</de>, lipídeos, frutose etc.) em energia e resíduos usados para o funcionamento das células dos seres vivos.</p>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>conceito-bioenergetica.png" alt="conceito-bioenergetica">
			<br>
			<subtitle>Processos Químicos:</subtitle>
			<br>
			<p><topic>Fermentação (sem O<sub>2</sub>):</topic></p>
			<br>
			<ul>
				<li>Seres unicelulares (composto por uma única célula);</li>
				<li>Gera pouca energia.</li>
			</ul>
			<br>
			<p><de><u>Alcoólica</u></de>:</p>
			<br>
			<ul>
				<li><b>Seres vivos</b>: Leveduras (fungos unicelulares);</li>
				<li><b>Resíduos</b>: Utilizados na fabricação bebidas alcoólicas, alcoól em gel, combustível para veículos (etanol) e na panifiçação (gás carbônico).</li>
			</ul>
			<br>
			<p><b><d2>C<sub>6</sub>H<sub>12</sub>O<sub>6</sub></d2> <i class="fas fa-long-arrow-alt-right"></i> <d>2C<sub>2</sub>H<sub>5</sub>OH + 2CO<sub>2</sub> + energia</d></b></p> 
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>fermentacao-alcoolica.png" alt="fermentacao-alcoolica" class="small">
			<br>
			<p><de><u>Láctica</u></de>:</p>
			<br>
			<ul>
				<li><b>Seres vivos</b>: Células musculares em anaerobiose (sem O<sub>2</sub>, durante o exercício físico) e lactobacilos;</li>
				<li><b>Resíduo</b>: Utilizado para fazer queijo, iogurte e qualhada.</li>
			</ul>
			<br>
			<p><b><d2>C<sub>6</sub>H<sub>12</sub>O<sub>6</sub></d2> <i class="fas fa-long-arrow-alt-right"></i> <d>2C<sub>3</sub>H<sub>6</sub>O<sub>3</sub> + energia</d></b></p>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>fermentacao-lactica.png" alt="fermentacao-lactica" class="small">
			<br>
			<p><topic>Respiração Celular (com O<sub>2</sub>)</topic></p>
			<br>
			<ul>
				<li><b>Seres vivos</b>: Seres aeróbicos (que respiram/utilizam O<sub>2</sub>: bactérias, protozoários, fungos, plantas e animais) e pluricelulares (compostos por mais de uma/várias células);</li>
				<li><b>Resíduos</b>: liberados na atmosfera (gás carbônico) ou reutilizados (água);</li>
				<li>Usa oxigênio da respiração pulmonar e glicose dos alimentos;</li>
				<li>Gera muito mais energia do que a fermentação pois “quebram” completamente a glicose.</li>
			</ul>
			<br>
			<p><b><d2>C<sub>6</sub>H<sub>12</sub>O<sub>6</sub> + 6O<sub>2</sub></d2> <i class="fas fa-long-arrow-alt-right"></i> <d>6CO<sub>2</sub> + 6H<sub>2</sub>O + energia</d></b></p> 
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>respiracao-celular.png" alt="respiracao-celular" class="small">
		</article>
		
	</main>
</body>
</html>			