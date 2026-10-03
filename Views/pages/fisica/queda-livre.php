<?php

	$sidebar = 'fisica';
	$conteudo = 'Queda Livre';
	$materia = 'Física';
	include('Views/includes/header-content.php');

?>
			<hgroup class="title"><h1><span>Queda Livre</span></h1></hgroup>
			<br>
			<p><topic>Conceito:</topic> A queda livre é um <de>movimento uniformemente variado</de> que desconsidera o efeito da resistência do ar, onde a aceleração é a <de>aceleração da gravidade</de>. Na queda livre todos os corpos caem com a mesma aceleração constante.</p>
			<br>
			<p><topic>Aceleração da Gravidade:</topic> A gravidade é a aceleração produzida a partir de uma força de atração gravitacional. Depende do lugar, na Terra por exemplo vale <de>10 m/s<sup>2</sup></de>.</p>
			<br>
			<subtitle>Cálculo:</subtitle>
			<br>
			<ul>
				<li><b>V<sub>0</sub> = 0</b>: Velocidade inicial = 0;</li>
				<li><b>a = g ≅ 10m/s<sup>2</sup></b>: Aceleração é a gravidade, que na Terra vale aproximadamente 10 metros por segundo a cada segundo.</li>
			</ul>
			<br>
			<div class="table-container">
				<table>
					<tr>
						<th>Tempo (s)</th>
						<th>Velocidade (m/s)</th>
					</tr>
					<tr>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<td>1</td>
						<td>10</td>
					</tr>
					<tr>
						<td>2</td>
						<td>20</td>
					</tr>
					<tr>
						<td>3</td>
						<td>30</td>
					</tr>
					<tr>
						<td>4</td>
						<td>40</td>
					</tr>
					<tr>
						<td><de>t</de></td>
						<td><de>g × t</de></td>
					</tr>
				</table>
			</div>
			<br>
			<ul>
				<li><b>V = g × t</b>: Velocidade = gravidade × tempo.</li>
			</ul>
			<br>
			<p><topic>Cálculo da Altura:</topic> Para calcularmos a altura da queda devemos desenhar um gráfico e calcular sua área.</p>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>grafico-queda-livre.png" alt="grafico-queda-livre">
			<br>
			<ul>
				<li><b>Cálculo Área do Triângulo:</b> <sup>base × altura</sup>&frasl;<sub>2</sub>;</li>
				<li><b>h = <sup>g × t<sup>2</sup></sup>&frasl;<sub>2</sub></b>: Altura = tempo (base) × Gravidade × tempo (altura) / 2.</li>
			</ul>
			<br>
			<subtitle>Tabela:</subtitle>
			<br>
			<div class="table-container">
				<table>
					<tr>
						<th>t (s)</th>
						<th>V<sub>f</sub> (m/s)</th>
						<th>V<sub>m</sub> (m/s)</th>
						<th>h (m)</th>
					</tr>
					<tr>
						<td>1</td>
						<td>10</td>
						<td>5</td>
						<td>5</td>
					</tr>
					<tr>
						<td>2</td>
						<td>20</td>
						<td>10</td>
						<td>20</td>
					</tr>
					<tr>
						<td>3</td>
						<td>30</td>
						<td>15</td>
						<td>45</td>
					</tr>
					<tr>
						<td>6</td>
						<td>60</td>
						<td>30</td>
						<td>180</td>
					</tr>
					<tr>
						<td><de>t</de></td>
						<td><de>g × t</de></td>
						<td><de><sup>g × t</sup>&frasl;<sub>2</sub></de></td>
						<td><de><sup>g × t<sup>2</sup></sup>&frasl;<sub>2</sub></de></td>
					</tr>
				</table>
			</div>
		</article>

	</main>
</html>