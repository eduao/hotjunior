<?php
// Em sudoku, o objetivo é preencher uma grade 9x9
include_once('load_fontes.php');
include('voltar.php');

function imprimirSudoku($f){

    $final = $f;

    echo '<table style="border:1px solid black;">';
    
    for ($i=0; $i < 9; $i++) {
        if ($i%3 == 0) {
            echo '<tr >';
        }
        echo '<tr style="border:1px solid black;">';
        for ($j=0; $j < 9; $j++) { 
            if ($j%3 == 0) {
                echo '<td>';
            }
            echo '<td style="border:1px solid black;">';
            if (isset($final[$i][$j])) {
                echo $final[$i][$j];
            }
            if ($j%3 == 0) {
                echo '</td>';
            }
            echo '</td>';
        }
        if ($i%3 == 0) {
            echo '</tr>';
        }
        echo '</tr>';
    }
    echo '</table>';

}

$final = array();

$vetores = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);

shuffle($vetores);

for ($linha=0; $linha < 9; $linha++) { 

    $linha_resto = $linha % 3;
    $linha_dividido = floor($linha / 3);

    for ($coluna=0; $coluna < 9; $coluna++) { 

        $coluna_resto = $coluna % 3;
        $coluna_dividido = floor($coluna / 3);

        $item_vetores = ($linha_dividido + $coluna_resto) % 3;
        $index_vetores = ($coluna_dividido + $linha_resto) % 3;

        $final[$linha][$coluna] = $vetores[$index_vetores][$item_vetores];

    }
    
}

imprimirSudoku($final);
?>

