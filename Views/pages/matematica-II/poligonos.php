<?php

	$sidebar = 'matematica-II';
	$conteudo = 'Polígonos';
	$materia = 'Matemática II';
	include('Views/includes/header-content.php');
?>

			<hgroup class="title"><h1><span>Polígonos</span></h1></hgroup>
			<br>			
			<p><topic>Conceito:</topic> Polígono é toda a figura fechada formada por lados.</p>
			<br>
			<subtitle>Elementos:</subtitle>
			<br>
			<ul>
				<li><b>Lados</b>: Segmentos de reta;</li>
				<li><b>Vértices</b>: Intersecções entre cada dois lados;</li>
				<li><b>Ângulos internos</b>: Ângulos formados entre cada dois lados;</li>
				<li><b>Ângulos externos</b>: Ângulos adjacentes (vértice e lado comum) e suplementares (somados = 180°) aos ângulos internos;</li>
				<li><b>Diagonais</b>: Segmentos que unem dois vértices não consecutivos (triângulo não possui).</li>
			</ul>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>elementos-poligonos.jpg" alt="elementos-poligonos">
			<br>
			<subtitle>Classificação:</subtitle>
			<br>
			<p><topic>Convexo:</topic>É todo polígono em que todos os ângulos internos são <de>menores</de> que 180°.</p>
			<br>
			<p><topic>Côncavo:</topic>É todo polígono em que pelo menos um ângulo interno é <de>maior</de> que 180°.</p>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>poligono-convexo-e-concavo.png" alt="elementos-poligonos">
			<br>
			<subtitle>Nomenclatura:</subtitle>
			<br>
			<p>O nome do polígono está relacionado ao número de lados (ou ângulos) que ele possui. Os demais polígonos podem ser nomeados como n-gono, sendo n o número de lados (ou ângulos) do polígono.</p>
			<br>
			<table>
				<tr>
					<th>N°de lados (ou ângulos)</th>
					<th>Nome do polígono</th>
				</tr>
				<tr>
					<td>3</td>
					<td>Triângulo</td>
				</tr>
				<tr>
					<td>4</td>
					<td>Quadrilátero</td>
				</tr>
				<tr>
					<td>5</td>
					<td>Pentágono</td>
				</tr>
				<tr>
					<td>6</td>
					<td>Hexágono</td>
				</tr>
				<tr>
					<td>7</td>
					<td>Heptágono</td>
				</tr>
				<tr>
					<td>8</td>
					<td>Octógono</td>
				</tr>
				<tr>
					<td>9</td>
					<td>Eneágono</td>
				</tr>
				<tr>
					<td>10</td>
					<td>Decágono</td>
				</tr>
				<tr>
					<td>11</td>
					<td>Undecágono</td>
				</tr>
				<tr>
					<td>12</td>
					<td>Dodecágono</td>
				</tr>
				<tr>
					<td>13</td>
					<td>Tridecágono</td>
				</tr>
				<tr>
					<td>14</td>
					<td>Tetradecágono</td>
				</tr>
				<tr>
					<td>15</td>
					<td>Pentadecágono</td>
				</tr>
				<tr>
					<td>20</td>
					<td>Icoságono</td>
				</tr>
				<tr>
					<td>n</td>
					<td>n-gono</td>
				</tr>
			</table>
			<br>
			<subtitle>Ângulos em Polígonos Convexos:</subtitle>
			<br>
			<ol>
			<li>Soma dos Ângulos Internos:</li>
			<br>
			<p>Todo polígono pode ser decomposto em triângulos quando traçamos as diagonais que partem de um único vértice.</p>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>soma-dos-angulos-internos.png" alt="soma-dos-angulos-internos">
			<br>
			<p>Portanto, para n lados, teremos (n – 2) triângulo</p>
			<br>
			<p><border>Si = (n –2) × 180°</border></p>
			<br>
			<li>Soma dos Ângulos Externos:</li>
			<br>
			<p>Observe que <d2>ângulo externo</d2> = <d>180°- ângulo interno</d>, em qualquer vértice.</p>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>soma-dos-angulos-externos.png" alt="soma-dos-angulos-externos">
			<br>
			<p>Se = n × 180° - Si</p>
			<p>Se = n × 180° - (n – 2) × 180°</p>
			<p>Se = <s>n × 180°</s> - <s>n × 180°</s> + 360°</p>
			<br>
			<border>Se = 360°</border>
			</ol>	
		</article>
		
	</main>
</body>
</html>		