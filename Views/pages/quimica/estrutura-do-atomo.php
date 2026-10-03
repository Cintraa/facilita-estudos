<?php

	$sidebar = 'quimica';
	$conteudo = 'Estrutura do Átomo';
	$materia = 'Química';
	include('Views/includes/header-content.php');

?>
			<hgroup class="title"><h1><span>Estrutura do Átomo</span></h1></hgroup>
			<br>
			<subtitle>Conceitos Fundamentais:</subtitle>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>estrutura-do-atomo.jpg" alt="estrutura-do-atomo">
			<br>
				<p><topic>Número Atômico</u> (Z):</topic> Corresponde ao número de prótons do átomo, não existemelementos com o mesmo número atômico. Se for neutro: <de>n° de prótons = n° de elétrons(Z = E)</de>.</p>
				<br>
				<p><topic>Número de massa</u> (A):</topic> Corresponde a soma do número de prótons e nêutrons (não somamos elétrons pois seu peso é insignificante): <de>n° de massa = n° atômico/de prótons + n° de neutrons (A = Z + N)</de>.</p>
			<br>
			<subtitle>Íons:</subtitle>
			<br>
			<p><topic>Elétron:</topic> Partículas de <de>carga negativa</de> (-) que compõem o átomo.</p>
			<br>
			<p><topic>Conceito:</topic> Átomos eletricamente carregados (<de>número de prótons ≠ número de elétrons</de>).</p>
			<br>
			<p><topic>Tipos:</topic></p>
			<br>
			<ul>
				<li><b>Cátions</b>: Perdem elétrons, carga positiva (+), mais prótons do que elétrons;</li>
				<li><b>Ânions</b>: Ganham elétrons, carga negativa (-), mais elétrons do que prótons.</li>
			</ul>
			<br>
			<img src="<?php echo INCLUDE_PATH_IMG; ?>estrutura-ion.png" alt="estrutura-ion">
			<br>
			<subtitle>Relações Entre os Átomos:</subtitle>
			<br>
			<ul>	
				<p><topic>Isótopos:</topic> Átomos que apresentam o mesmo número de prótons (mesmo número atômico, portanto mesmo símbolo);</p>
				<br>
				<img src="<?php echo INCLUDE_PATH_IMG; ?>isotopos.png" alt="isotopos" class="small left">
				<br>
				<p><topic>Isóbaros:</topic> Átomos que apresentam o mesmo número de massa;</p>
				<br>
				<img src="<?php echo INCLUDE_PATH_IMG; ?>isobaros.png" alt="isobaros" class="small">
				<br>
				<p><topic>Isótonos:</topic> Átomos que apresentam o mesmo número de nêutrons;</p>
				<br>
				<img src="<?php echo INCLUDE_PATH_IMG; ?>isotonos.png" alt="isotonos" class="small">
				<br>
				<p><topic>Isoeletrônicos:</topic> Átomos e/ou íons que apresentam o mesmo número de elétrons.</p>
				<br>
				<img src="<?php echo INCLUDE_PATH_IMG; ?>isoeletronicos.png" alt="isoeletronicos" class="small">
			</ul>
		</article>
		
	</main>
</body>
</html>	