<?php

	$sidebar = 'quimica';
	$conteudo = 'Ligações Químicas';
	$materia = 'Química';
	include('Views/includes/header-content.php');

?>
			<hgroup class="title"><h1><span>Ligações Químicas</span></h1></hgroup>
			<br>
			<p><topic>Conceito:</topic> As ligações químicas são as interações que ocorrem entre átomos para se tornarem uma molécula ou substância básica de um composto. Tal onde os átomos ganham, perdem ou compartilham elétrons.</p>
			<br>
			<p><topic>Teoria do Octeto:</topic> Ao realizar uma ligação química, os átomos buscam <de>estabilizar-se eletronicamente</de>, ou seja, <de>apresentar 8 elétrons na camada de valência</de> (2 no caso do hélio e hidrogênio, mesma estabilidade dos gases nobres).</p>
			<br>
			<subtitle>Regra Geral:</subtitle>
			<br>
			<p><topic>Metais:</topic> Átomos que possuem até 3 elétrons em sua camada de valência (com excessão do hidrogênio e hélio), <de>Tendem a perder elétrons</de>.</p>
			<br>
			<p><topic>Ametais:</topic> Átomos que possuem de 4 a 7 elétrons em sua camada de valência, <de>Tendem a ganhar elétrons</de>.</p>
			<br>
			<p><topic>Gases Nobres:</topic> Átomos que possuem 8 elétrons (com excessão do hélio que possui 2) em sua camada de valência (eletricamente estáveis), <de>não fazem ligações químicas</de>.</p>
			<br>
			<p><topic>Lógica</topic>: Os metais tendem a perder elétrons pois é <de>mais fácil perder</de> 1, 2 ou 3 elétrons do que ganhar 5, 6 ou 7 elétrons, o mesmo vale para os ametais, que <de>prefere ganhar</de> 3, 2 ou 1 elétron do que perder 5, 6 ou 7. Os gases nobres não fazem ligações pois já estão de acordo com a teoria do octeto, ou seja, eletricamente estáveis.</p>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>organizacao-metais-e-ametais.png" alt="organizacao-metais-e-ametais">
			<br>
			<subtitle>Ligação Iônica:</subtitle>
			<br>
			<p><topic>Conceito:</topic> Ligações químicas baseadas na perda e o ganho de elétrons, forma um cátion e um ânion.</p>
			<br>
			<p><topic>Ocorre entre:</topic></p>
			<br>
			<ol>
				<li>metal + ametal</li>
				<li>metal + Hidrogênio (H)</li>
			</ol>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>ligacao-ionica.png" alt="ligacao-ionica">
			<br>
			<p><topic>Exemplo:</topic></p>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>ligacao-ionica-exemplo.png" alt="ligacao-ionica-exemplo" class="small">
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>ligacao-ionica-exemplo2.png" alt="ligacao-ionica-exemplo2" class="small">
			<br>
			<p><topic>Estrutura:</topic> Sempre o cátion virá antes do ânion na representação. <d2>Cátion</d2><d>Ânion</d>.</p>
			<br>
			<p><topic>Propriedades:</topic> Temperatura média de fusão e ebulição, conduzem eletricidade quando acosos (na água) ou fundidos.</p>
			<br>
			<subtitle>Ligação Covalente:</subtitle>
			<br>
			<p><topic>Conceito:</topic> Ligações químicas baseadas no “compartilhamento” de elétrons, todos querem ganhar elétrons.</p>
			<br>
			<p><topic>Ocorre entre:</topic></p>
			<br>
			<ol>
				<li>ametal + ametal</li>
				<li>ametal + Hidrogênio (H)</li>
				<li>Hidrogênio (H) + Hidrogênio (H)</li>
			</ol>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>ligacao-covalente.jpg" alt="ligacao-covalente">
			<br>
			<p><topic>Representação:</topic></p>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>formulas-ligacoes-covalentes.png" alt="formulas-ligacoes-covalentes">
			<br>
			<p><topic>Ligação Covalente Coordenada ou Dativa:</topic> Uma ligação covalente entre dois átomos, na qual os dois elétrons compartilhados provêm do mesmo átomo. Ocorre entre um átomo estável e um instável.</p>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>ligacao-coordenada.png" alt="ligacao-coordenada">
			<br>
			<p><topic>Propriedades:</topic> Baixa temperatura de ebulição, fusão e condução de eletricidade.</p>
			<br>
			<subtitle>Ligação Metálica</subtitle>
			<br>
			<p><topic>Conceito:</topic> Ligações químicas baseada no fluxo de eletrons (“mar de elétrons”), todos querem perder elétrons.</p>
			<br>
			<p><topic>Ocorre entre:</topic> metal + metal.</p>
			<br>
			<p>Por ocorrer entre átomos que querem perder elétrons, é um <a>aglomerado de cátions, elétrons e átomos neutros</a>, processo contínuo onde elétrons são perdidos, o átomo vira cátion e os elétrons voltam. Portanto é uma ligação dinâmica, mais forte que as outras e não possui representação (fórmula).</p>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>ligacao-metalica.png" alt="ligacao-metalica">
			<br>
			<p><topic>Propriedades:</topic> Alta temperatura de ebuliçãoe e fusão, alta condução de eletricidade quando no estado sólido, brilho caracteristico, maleáveis, ductibilidade (podem fazer fios).</p>
		</article>
	</main>
</body>
</html>