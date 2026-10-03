<?php

	$sidebar = 'matematica';
	$conteudo = 'Função Afim';
	$materia = 'Matemática';
	include('Views/includes/header-content.php');

?>
			<hgroup class="title"><h1><span>Função Afim</span></h1></hgroup>
			<br>
			<p><topic>Definição:</topic> Função expressa com <de>y  = ax + b</de> onde o <de>a</de> e o <de>b</de> são constantes.</p>
			<br>
			<center><border>y = ax + b</border></center>
			<br>
			<p><topic>Propriedade:</topic> <de>b ≠ 0</de> pois se b = 0 a função se transforma em uma função linear (y = ax), mas não deixando de ser uma função afim, uma vez que a função linear também é uma função afim.</p>
			<br>
			<subtitle>Representação Gráfica:</subtitle>
			<br>
			<p>É representado por uma <de>reta</de>, uma vez que é composta por vários triângulos retângulos com mesma hipotenusa. Nessa reta o coeficiente  “a” determina a <de>inclinação</de> da reta e o “b” sua <de>posição</de> no plano cartesiano.</p>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>função-afim-grafico.png" alt="função-afim-grafico">
			<br>
			<p><topic>Direção:</topic></p>
			<br>
			<ul>
				<li><b>Crescente</b>: Quando <de>a > 0</de>, as variáveis  <de>x</de> e <de>y</de> aumentam;</li>
				<li><b>Decrescente</b>: Quando <de>a < 0</de>, a variável <de>x</de> aumenta e a variável <de>y</de> diminui.</li>
			</ul>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>reta-crescente-e-reta-decrescente.jpg" alt="reta-crescente-e-reta-decrescente">
			<br>
			<subtitle>Pontos Notáveis:</subtitle>
			<br>
			<p><topic>Coeficiente Linear:</topic> Coeficiente que representa o cruzamento da reta com o <de>eixo das ordenadas</de> (eixo y), nesse caso o coeficiente <de>b</de>.</p>
			<br>
			<p><topic>Coeficiente Angular:</topic> Coeficiente determinado a partir do <de>ângulo</de> ou <de>inclinação</de> da reta, nesse caso o coeficiente <de>a</de>. Podemos descobrí-lo dividindo o <de>deslocamento vertical</de> pelo <de>deslocamento horizontal</de> e colocando um sinal negativo a frente caso a reta seja decrescente.</p>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>calculo-coeficiente-angular.png" alt="calculo-coeficiente-angular">
			</article>
		
	</main>
</body>
</html>