<?php

	$sidebar = 'biologia';
	$conteudo = 'ATP';
	$materia = 'Biologia';
	include('Views/includes/header-content.php');

?>

			<hgroup class="title"><h1><span>ATP: moeda energética universal</span></h1></hgroup>
			<br>
			<p><topic>Adenosina de trisfofato (ATP):</topic> Molécula que converte energia não utilizável (gerada pela fermentação, respiração celular ou qualquer combustível celular) em energia utilizável (trabalho celular), possuímos cerca de 50g em nosso organismo.</p>
			<br>
			<subtitle>Estrutura:</subtitle>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>estrutura-atp.png" alt="estrutura-atp">
			<br>
			<p><topic>Adenosina (A):</topic> Conjunto de adenina (base nitrogenada) e ribose (pentose).</p>
			<br>
			<p><topic>AMP (Monofosfato de adenosina):</topic> Adenosina + fosfato.</p>
			<br>
			<p><topic>ADP (Duofosfato de adenosina):</topic>  Adenosina + 2 fosfatos.</p>
			<br>
			<p><topic>ATP (Trifosfato de adenosina):</topic> Adenosina + 3 fosfatos.</p>
			<br>
			<subtitle>Processo Químico:</subtitle>
			<br>
			<ol>
				<li>É rompida a última ligação de fosfato por meio da quebra por hidrólise, liberando energia de trabalho celular (utilizável) e térmica;</li>
				<br>
				<p><topic>Hidrólise:</topic> Romper moléculas usando água.</p>
				<br>
				<p><de>Toda a energia gasta em um ser vivo é proveniente da reação de hidrólise do ATP.</de></p>
				<br>
				<p><b><d2>ATP</d2> <i class="fas fa-long-arrow-alt-right"></i> <d> ADP + P + energia de trabalho celular (utilizável)</d></b></p>
				<br>
				<img src="<?php echo INCLUDE_PATH_IMG; ?>rompimento.png" class="small inline">
				<img src="<?php echo INCLUDE_PATH_IMG; ?>reconstrucao.png" class="small inline">
				<br>
				<li>Utiliza da energia proveniente da fermentação, respiração celular ou qualquer outro combustível celular para refazer a ligação;</li>
				<br>
				<p><b><d>ADP + P + energia não utilizável</d> <i class="fas fa-long-arrow-alt-right"></i> <d2>ATP</d2></b></p>
				<br>
				<img src="<?php echo INCLUDE_PATH_IMG; ?>reconstrucao.png" alt="reconstrucao" class="small inline">
				<img src="<?php echo INCLUDE_PATH_IMG; ?>atp.png" alt="atp" class="small inline">
				<br>
				<li>O processo é repetido até o ser vivo morrer.</li>
				<br>
				<p><de>Enquanto o restante da célula está hidrolisando o ATP, a mitocôndria consome glicose para obter energia para refazer ATP.</de></p>
				<br>
				<img src="<?php echo INCLUDE_PATH_IMG; ?>formula-atp.png" alt="formula-atp">
				<br>
				<p>A energia produzida pela hidrólise do ATP (trabalho celular, utilizável) pode ser convertida em diversas energias como sonora (fala), mecânica (movimento) etc.</p>
			</ol>
			<br>
			<subtitle>Portanto:</subtitle>
			<br>
			<p><topic>Fermentação Alcoólica:</topic></p>
			<br>
			<p><b><d2>C<sub>6</sub>H<sub>12</sub>O<sub>6</sub></d2> <i class="fas fa-long-arrow-alt-right"></i> <d>2C<sub>2</sub>H<sub>5</sub>OH + 2CO<sub>2</sub> + 2ATP</d></b></p> 
			<br>
			<p><topic>Fermentação Láctica:</topic></p>
			<br>
			<p><b><d2>C<sub>6</sub>H<sub>12</sub>O<sub>6</sub></d2> <i class="fas fa-long-arrow-alt-right"></i> <d>2C<sub>3</sub>H<sub>6</sub>O<sub>3</sub> + 2ATP</d></b></p> 
			<br>
			<p><topic>Respiração Celular:</topic></p>
			<br>
			<p><b><d2>C<sub>6</sub>H<sub>12</sub>O<sub>6</sub> + 6O<sub>2</sub></d2> <i class="fas fa-long-arrow-alt-right"></i> <d>6CO<sub>2</sub> + 6H<sub>2</sub>O + 38ATP</d></b></p>
		</article>
		
	</main>
</body>
</html>			