<?php

	$sidebar = 'quimica';
	$conteudo = 'Propriedades Periódicas';
	$materia = 'Química';
	include('Views/includes/header-content.php');

?>

			<hgroup class="title"><h1><span>Propriedades Periódicas</span></h1></hgroup>
			<br>
			<p><topic>Conceito:</topic> Propriedades do átomo que variam de acordo com o número atômico</p>
			<br>
			<subtitle>Raio Atômico:</subtitle>
			<br>
			<p><topic>Conceito:</topic> Distancia entre núcleo e a eletrosfera.</p>
			<br>
			<p><topic>Variação:</topic> Quanto <de>mais externa a camada</de> e quanto <de>menos prótons</de> (atraem os elétrons pois possuem carga positiva, portanto o raio diminui) maior o raio. O maior raio é do frâncio (fr), localizado no canto inferior esquerdo da tabela periódica.</p>
			<br>
			<ul>
				<li><b>Em um mesmo grupo:</b> o raio aumenta de cima para baixo;</li>
				<li><b>Em um mesmo período:</b> aumenta da direita para a esquerda.</li>
			</ul>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>variacao-raio-atomico.jpg" alt="variacao-raio-atomico">
			<br>
			<p><topic>Cálculo:</topic> Medir distância do núcleo de átomos adjacentes (encostados) e dividir por 2.</p>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>raio-atomico-calculo.jpg" alt="raio-atomico-calculo">
			<br>
			<p><topic>Raio Iônico:</topic></p>
			<br>
			<ul>
				<li>Raio do cátion < Raio do átomo neutro (Menos uma camada da eletrosfera);</li>
				<br>
				<img src="<?php echo INCLUDE_PATH_IMG; ?>raio-cation.png" alt="raio-cation" class="small">
				<br>
				<li>Raio do ânion > Raio do átomo neutro (Menor atração núcleo, mais elétrons);</li>
				<br>
				<img src="<?php echo INCLUDE_PATH_IMG; ?>raio-anion.png" alt="raio-anion" class="small">
				<br>
				<li><b>Isoeletrônicos</b>: Maior número atômico <i class="fas fa-long-arrow-alt-right"></i> Menor Raio (Maior atração núcleo/eletrosfera).</li>
				<br>
				<img src="<?php echo INCLUDE_PATH_IMG; ?>raio-isoeletronicos.png" alt="raio-isoeletronicos" class="small">
			</ul>
			<br>
			<subtitle>Energia ou Potencial de ionização:</subtitle>
			<br>
			<p><topic>Conceito:</topic> É a energia usada para <de>remover um elétron da eletrosfera</de>, ou seja, <de>transformar em um cátion</de>.</p>
			<br>
			<p><topic>Variação:</topic> Quanto <de>menor raio</de> (mais perto do núcleo), <de>maior a energia</de> necessária para retirar (dificuldade para retirar elétron).</p>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>variacao-energia-ionizacao.jpg" alt="variacao-energia-ionizacao">
			<br>
			<p><topic>Cálculo:</topic></p>
			<br>
			<p><d2>Átomo neutro + Energia de Ionização</d2><i class="fas fa-long-arrow-alt-right"></i><d>Cátion + elétron</d></p>
			<br>
			<p><d2>X<sub>(g)</sub> + EI</d2><i class="fas fa-long-arrow-alt-right"></i><d>X<sup>+</sup><sub>(g)</sub> + e<sup>-</sup></d></p>
			<br>
			<p>Observe na tabela abaixo que a energia necessária para retirar um elétron (kj/mol) aumenta quando a camada de valência se altera.</p>
			<br>
			<p>Quando é retirado um elétron o raio diminui e a energia necessária aumenta e quando a energia aumenta significadamente quer dizer que os elétrons da camada mais externa acabaram e estamos retirando de uma camada mais próxima do núcleo.</p>
			<br>
			<p><de>Exemplo:</de> Sódio (Na) possui 1 elétron na camada de valência, pois para retirar o segundo elétron a energia  aumenta significadamente</p>
			<br>
			<div class="table-container">
				<table>
					<tr>
						<th></th>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
						<th>6</th>
						<th>7</th>
						<th>8</th>
					</tr>
					<tr>
						<th>Na</th>
						<td>496</td>
						<td>4563</td>
						<td>6913</td>
						<td>9544</td>
						<td>13352</td>
						<td>16611</td>
						<td>20115</td>
						<td>25491</td>
					</tr>
					<tr>
						<th>Mg</th>
						<td>738</td>
						<td>1451</td>
						<td>7733</td>
						<td>10541</td>
						<td>13629</td>
						<td>17995</td>
						<td>21704</td>
						<td>25657</td>
					</tr>
					<tr>
						<th>Al</th>
						<td>578</td>
						<td>1817</td>
						<td>2745</td>
						<td>11578</td>
						<td>14831</td>
						<td>18378</td>
						<td>23296</td>
						<td>29253</td>
					</tr>
					<tr>
						<th>Si</th>
						<td>789</td>
						<td>1577</td>
						<td>3232</td>
						<td>4356</td>
						<td>16091</td>
						<td>19785</td>
						<td>23787</td>
						<td>29253</td>
					</tr>
					<tr>
						<th>P</th>
						<td>1012</td>
						<td>1903</td>
						<td>2912</td>
						<td>4957</td>
						<td>6274</td>
						<td>21269</td>
						<td>25398</td>
						<td>29855</td>
					</tr>
					<tr>
						<th>S</th>
						<td>1000</td>
						<td>2251</td>
						<td>3361</td>
						<td>4564</td>
						<td>7012</td>
						<td>8496</td>
						<td>27107</td>
						<td>31671</td>
					</tr>
					<tr>
						<th>Cl</th>
						<td>1251</td>
						<td>2297</td>
						<td>3822</td>
						<td>5158</td>
						<td>6542</td>
						<td>9362</td>
						<td>11018</td>
						<td>33606</td>
					</tr>
					<tr>
						<th>Ar</th>
						<td>1521</td>
						<td>2666</td>
						<td>3931</td>
						<td>5771</td>
						<td>7238</td>
						<td>8781</td>
						<td>11996</td>
						<td>13842</td>
					</tr>
				</table>
			</div>	
			<br>
			<subtitle>Afinidade eletrônica ou eletroafinidade:</subtitle>
			<br>
			<p><topic>Conceito:</topic> É a energia liberada quando o átomo <de>ganha um elétron</de>, ou seja, quando se <de>transforma em um ânion</de>.</p>
			<br>
			<p><topic>Variação:</topic> Quanto <de>menor o raio</de> (perto do núcleo), <de>maior a tendência</de> para se transformar em ânion (ganhar elétrons).</p>
			<br>
			<p><topic>Cálculo:</topic></p>
			<br>
			<p><d2>Átomo neutro + Elétron </d2> <i class="fas fa-long-arrow-alt-right"> </i><d>Ânion + Eletroafinidade</d></p>
			<p><d2>X<sub>(g)</sub> + e<sup>-</sup></d2> <i class="fas fa-long-arrow-alt-right"> </i><d>X<sup>-</sup><sub>(g)</sub> + EA</d></p>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>variacao-afinidade-eletronica.jpg" alt="variacao-afinidade-eletronica">
			<br>
			<subtitle>Eletronegatividade:</subtitle>
			<br>
			<p><topic>Conceito:</topic> É a capacidade de um átomo de <de>atrair elétrons</de> em uma ligação química.</p>
			<br>
			<p><topic>Variação:</topic> Quanto <de>menor o átomo</de> (menor o raio), <de>maior a tendência</de> de atrair os elétrons.</p>
			<br>
			<p><de>NÃO SE APLICA A GASES NOBRES</de>, pois esses não fazem ligações químicas.</p>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>variacao-eletronegatividade.png" alt="variacao-eletronegatividade">
			<br>
			</article>
		
	</main>
</body>
</html>