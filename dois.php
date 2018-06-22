<?php
    // Em Javascript, qual a diferença entre == e ===?
    include_once('load_fontes.php');
    include('voltar.php');

?>
Ambos são comparadores, porém == converte caso haja a necessidade de tipos diferentes e === não converte, comparando os operadores literalmente.
<br>
Exemplo:
<br>
<code>
1 == '1' // dará verdadeiro<br>
1 === '1' // dará falso