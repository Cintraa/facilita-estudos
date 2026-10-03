<?php

	$sidebar = "biologia";
	$conteudo = "Genética";
	$materia = "Biologia";
	include("Views/includes/header-content.php");

?>
			<hgroup class="title"><h1><span>Genética</span></h1></hgroup>
			<br>
			<p><topic>Conceito:</topic> A genética é a ciência que estuda a <de>hereditariedade</de>, como as características são passadas do organismo para seus descendentes. Surge a partir dos trabalhos de <de>Gregor Johann Mendel</de>.</p>
			<br>
			<p><topic>Mendel:</topic> Monge austríaco considerado pai da genética por seus estudos e descobertas. Se destacou por trabalhar com <de>ervilhas</de>: fáceis de cultivar, com ciclos de vida curtos e muitos descendentes, podendo ser autofecundadas (cultiva ela mesma, sozinha) ou por fecundação cruzada (par de ervilhas).</p>
			<br>
			<subtitle>Cruzamento de Mendel:</subtitle>
			<br>
			<center><b><d>Ervilhas Lisas</d> x <d2>Ervilhas Rugosas</d2></b></center>
			<br>
			<div class="table">
				<table>
					<tr>
						<th>Gerações</th>
						<th>Lisas</th>
						<th>Rugosas</th>
					</tr>
					<tr>
						<th>P (pais)</th>
						<td>50%</td>
						<td>50%</td>
					</tr>
					<tr>
						<th>F1 (1ª g.)</th>
						<td>100%</td>
						<td>0%</td>
					</tr>
					<tr>
						<th>F2 (2ª g.)</th>
						<td>75%</td>
						<td>25%</td>
					</tr>
				</table>
			</div>
			<br>
			<subtitle>Interpretação de Mendel:</subtitle>
			<br>
			<p><topic>Conclusões:</topic> Ao observar o resultado de suas pesquisas, Mendel propõe a separação dos genes alelos na formação dos gametas, ou seja, se cada característica é um par de genes, só um deles é transmitido para o filho:</p>
			<br>
			<ul>
				<li>As características dos indivíduos são hereditárias (herdadas dos pais);</li>
				<li>As características são transmitidas pelos genes (segmentos de moléculas de DNA, representado por uma letra maiúscula ou minúscula);</li>
				<li>Cada característica de um indivíduo é determinada por um par de genes (RR, Rr ou rr);</li>
				<li>Os indivíduos herdam um gene do pai e um gene da mãe para cada característica (fecundação cruzada).</li>
			</ul>
			<br>
			<p><topic>Gene Dominante:</topic> É aquele que determina uma característica, podendo se manifestar em dose única (<de>Rr</de>) ou em dose dupla (<de>RR</de>). Representado por uma letra maiúscula (<de>R</de>).</p>
			<br>
			<p><topic>Gene Recessivo:</topic> É aquele que só se manifesta em dose dupla (<de>rr</de>). Representado por uma letra minúscula (<de>r</de>).</p>
			<br>
			<p><b>R</b>: Gene para <d>ervilhas lisas</d></p>
			<p><b>r</b>: Gene para <d2>ervilhas rugosas</d2></p>
			<br>
			<border>R > r</border>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>ervilha-mendel.png" alt="ervilha-mendel">
			<br>
			<div class="table">
				<table>
					<tr>
						<th><sup>Rr</sup>&frasl;<sub>Rr</sub></th>
						<th>R</th>
						<th>r</th>
					</tr>
					<tr>
						<th>R</th>
						<td>RR</td>
						<td>Rr</td>
					</tr>
					<tr>
						<th>r</th>
						<td>Rr</td>
						<td>rr</td>
					</tr>
				</table>
			</div>
			<br>
			<p><topic>Primeira Lei de Mendel (Monoibridismo):</topic> Uma característica é condicionada por um par de genes alelos que se separam na formação dos gametas, indo apenas um gene para cada gameta com <de>igual probabilidade</de>.</p>
		</article>
		
	</main>
</body>
</html>