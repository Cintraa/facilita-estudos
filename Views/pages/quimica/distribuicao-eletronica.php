<?php

	$sidebar = 'quimica';
	$conteudo = 'Distribuição Eletrônica';
	$materia = 'Química';
	include('Views/includes/header-content.php');

?>

<hgroup class="title"><h1><span>Distribuição Eletrônica</span></h1></hgroup>
<br>
<ul>
	<p><topic>Conceito:</topic> Forma em que os elétrons se distribuem/organizam na eletrosfera.</p>
	<br>
	<p><topic>Eletrosfera:</topic> Região externa do átomo onde se localizam os elétrons. Ela é dividida em <de>sete camadas eletrônicas</de> (K, L, M, N, O, P e Q) de acordo com a distância do núcleo e o elétron as ocupa de acordo com sua energia, sendo a K a mais próxima e menos energética e a Q a mais afastada e mais energética. Obs: As camadas não são finitas, podem haver mais (o elemento com a camada masi externa possui 8 elétrons na camada Q).</p>
	<br>
	<table>
		<tr>
			<th>Nível</th>
			<th>Camada</th>
			<th>N° max. de elétrons</th>
		</tr>
		<tr>
			<td>1</td>
			<td>K</td>
			<td>2</td>
		</tr>
		<tr>
			<td>2</td>
			<td>L</td>
			<td>8</td>
		</tr>
		<tr>
			<td>3</td>
			<td>M</td>
			<td>18</td>
		</tr>
		<tr>
			<td>4</td>
			<td>N</td>
			<td>32</td>
		</tr>
		<tr>
			<td>5</td>
			<td>O</td>
			<td>32</td>
		</tr>
		<tr>
			<td>6</td>
			<td>P</td>
			<td>18</td>
		</tr>
		<tr>
			<td>7</td>
			<td>Q</td>
			<td>8</td>
		</tr>
	</table>
	<br>
	<p><topic>Fóton:</topic> Partícula de luz liberada quando o elétron, após o salto quântico (mudança de camada, ocorre quando recebe energia), volta para sua camada inicial.</p>
</ul>
<br>
<img src="<?php echo INCLUDE_PATH_IMG; ?>eletrosfera.png" alt="eletrosfera">
<br>
<subtitle>Subníveis:</subtitle>
<br>
<p><topic>Conceito:</topic> Subdivisões das camadas eletrônicas, designados pelas letras minúsculas, s (max 2e), p (max 6e), d (max 10e) e f (max 14e).</p>
<br>
<img src="<?php echo INCLUDE_PATH_IMG; ?>subniveis.jpg" alt="subniveis">
<br>
<div style="width: 100%; overflow: auto;">
	<table>
		<tr>
			<th>Nível</th>
			<th>Camada</th>
			<th>N° max. de elétrons</th>
			<th>Subnível</th>
		</tr>
		<tr>
			<td>1</td>
			<td>K</td>
			<td>2</td>
			<td style="text-align: left;">1s<sup>2</sup></td>
		</tr>
		<tr>
			<td>2</td>
			<td>L</td>
			<td>8</td>
			<td style="text-align: left;">2s<sup>2</sup> 2p<sup>6</sup></td>
		</tr>
		<tr>
			<td>3</td>
			<td>M</td>
			<td>18</td>
			<td style="text-align: left;">3s<sup>2</sup> 3p<sup>6</sup> 3d<sup>10</sup></td>
		</tr>
		<tr>
			<td>4</td>
			<td>N</td>
			<td>32</td>
			<td style="text-align: left;">4s<sup>2</sup> 4p<sup>6</sup> 4d<sup>10</sup> 4f<sup>14</sup></td>
		</tr>
		<tr>
			<td>5</td>
			<td>O</td>
			<td>32</td>
			<td style="text-align: left;">5s<sup>2</sup> 5p<sup>6</sup> 5d<sup>10</sup> 5f<sup>14</sup></td>
		</tr>
		<tr>
			<td>6</td>
			<td>P</td>
			<td>18</td>
			<td style="text-align: left;">6s<sup>2</sup> 6p<sup>6</sup> 6d<sup>10</sup></td>
		</tr>
		<tr>
			<td>7</td>
			<td>Q</td>
			<td>8</td>
			<td style="text-align: left;">7s<sup>2</sup> 7p<sup>6</sup></td>
		</tr>
	</table>
</div>
<br>
<subtitle>Diagrama de Linus Pauling:</subtitle>
<br>
<p>O químico quântico Linus Pauling propôs-se a organizar a distribuição eletrônica através de subníveis de energia, ou seja, a ordem qual a eletrosfera é preenchida (seguindo o sentido do início até a ponta da flecha):</p>
<br>
<img src="<?php echo INCLUDE_PATH_IMG; ?>diagrama-de-pauling.png" alt="diagrama-de-pauling.png">
<br>
<p><topic>Exemplos:</topic></p>
<br>
<p><b><sub>20</sub>Ca</b>: 1s<sup>2</sup> 2s<sup>2</sup> 2p<sup>6</sup> 3s<sup>2</sup> 3p<sup>6</sup> 4s<sup>2</sup></p>
<br>
<p><b><sub>36</sub>Kr</b>: 1s<sup>2</sup> 2s<sup>2</sup> 2p<sup>6</sup> 3s<sup>2</sup> 3p<sup>6</sup> 4s<sup>2</sup> 3d<sup>10</sup> 4p<sup>6</sup></p>
<br>
<p><b><sub>74</sub>W</b>: 1s<sup>2</sup> 2s<sup>2</sup> 2p<sup>6</sup> 3s<sup>2</sup> 3p<sup>6</sup> 4s<sup>2</sup> 3d<sup>10</sup> 4p<sup>6</sup> 5s<sup>2</sup> 4d<sup>10</sup> 5p<sup>6</sup> <de>6s<sup>2</sup></de> 4f<sup>14</sup> <de>5d<sup>4</sup></de></p>
<br>
<p><topic>5d<sup>4</sup>:</topic> <de>Subnível mais energético</de> - Último subnível.</p>
<p><topic>6s<sup>2</sup>:</topic> <de>Camada de valência</de> - Camada mais externa da eletrosfera (maior número grande).</p>
</article>
</main>
</body>
</html>