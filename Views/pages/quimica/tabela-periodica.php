<?php

	$sidebar = 'quimica';
	$conteudo = 'Tabela Periódica';
	$materia = 'Química';
	include('Views/includes/header-content.php');

?>
			<hgroup class="title"><h1><span>Tabela Periódica</span></h1></hgroup>
			<br>
			<p><topic>Conceito:</topic> Uma forma de organizar e apresentar algumas informações sobre todos elementos químicos que existem com base no número atômico, configuração eletrônica dos átomos dos elementos e propriedades químicas semelhantes.</p>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>tabela-periodica.png" alt="tabela-periodica">
			<br>
			<subtitle>Organização:</subtitle>
			<br>
			<p><topic>Elementos:</topic> Conjunto dos átomos com o mesmo número atômico (<b>118</b>).</p>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>elementos-tabela.png" alt="elementos-tabela" class="small">
			<br>	
			<p><topic>Períodos:</topic> Colunas horizontais nas quais os elementos químicos estão organizados (<de>7</de>).</p>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>períodos-da-tabela-periodica.jpg" alt="períodos-da-tabela-periodica" class="small">
			<br>
			<p><de>Relativo a <u>camada de valência</u>.</de></p>
			<br>
			<table>
				<tr>
					<th>Período</th>
					<th>Camada de Valência</th>
				</tr>
				<tr>
					<td>1º</td>
					<td>1</td>
				</tr>
				<tr>
					<td>2º</td>
					<td>2</td>
				</tr>
				<tr>
					<td>3º</td>
					<td>3</td>
				</tr>
				<tr>
					<td>4º</td>
					<td>4</td>
				</tr>
				<tr>
					<td>5º</td>
					<td>5</td>
				</tr>
				<tr>
					<td>6º</td>
					<td>6</td>
				</tr>
				<tr>
					<td>7º</td>
					<td>7</td>
				</tr>
			</table>
			<br>
			<p><topic>Grupos/Famílias:</topic> Colunas verticais nas quais os elementos químicos estão organizados (<de>18</de>).</p>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>grupos-da-tabela-periodica.jpg" alt="grupos-da-tabela-periodica" class="small">
			<br>
			<p><de>Relativo ao <u>subnível mais energético</u>.</de></p>
			<br>
			<table>
				<tr>
					<th>Subnível</th>
					<th>Família</th>
					<th>Número</th>
				</tr>
				<tr>
					<td>s ou p</td>
					<td>A</td>
					<td>nº de elétrons da camada de valência</td>
				</tr>
				<tr>
					<td>d</td>
					<td>B</td>
					<td>2 + nº de elétrons do subnível mais energético</td>
				</tr>
				<tr>
					<td>f</td>
					<td>B</td>
					<td>III</td>
				</tr>
			</table>
			<br>
			<p><topic>Exemplo:</topic></p>
			<br>
			<p><de><sub>12</sub>M</de>: 1s<sup>2</sup> 2s<sup>2</sup> 2p<sup>6</sup> 3s<sup>2</sup></p>
			<br>
			<p><de>Subnível mais energético:</de> 3s<sup>2</sup></p>
			<br>
			<p><de>Camada de Valência:</de> 3</p>
			<br>
			<p><de>Portanto</de>: Família II A (grupo 2)</p>
		</article>
	</main>
</body>
</html>