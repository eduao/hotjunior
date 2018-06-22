<?php
    // Gerador da lista de questões

    // Requer a lista de questões
    require("lista_questoes.php");

    // Método para criarBotão 
    // @params $string - action para onde será redirecionado
    // @description Imprime um formulário com um botão de redirecionamento da página para o @param
    function criarBotao($string) {
        
        echo '<form action="'.$string.'.php" method="get">'
            . '<input type="submit" value="resposta">'
            . '</form>';
    }


    // Caso haja algum enunciado na lista_questoes 
    if (isset($array_lista) && count($array_lista) > 0) {

        echo '<ol>';

        foreach ($array_lista as $questao) {

            $tem_alem_enunciado = false;

            // Imprime o padrão de cada enunciado
            echo '<h3><li>';
            echo $questao['enunciado'];
            echo '</li></h3>';

            // Caso haja requisitos no enunciado
            if (isset($questao['requisitos'])) {
                
                // Seta a flag para caracterizar que tem algo além do enunciado
                $tem_alem_enunciado = true;

                // Inicia uma nova listagem 
                echo '<ol>';
                
                // Imprime cada requisito
                foreach ($questao['requisitos'] as $requisito) {
                    echo '<li>';
                    echo $requisito;
                    echo '</li>';
                }
                // Fim da listagem de requisitos
                echo '</ol>';
            }
            
            // Caso haja codigo 
            if (isset($questao['codigo'])) {

                // Seta que possui além do enunciado
                $tem_alem_enunciado = true;

                // Imprime código
                echo '<code>';
                echo $questao['codigo'];
                echo '</code>';

            }

            // Caso tiver algo além do enunciado
            // Imprime uma quebra de linha
            if ($tem_alem_enunciado) {
                echo '<br>';
            }

            // Caso tenha um botão
            if(isset($questao['botao'])) {

                // Chama o método para criar botão
                criarBotao($questao['botao']);
            }


        } // Fim foreach array_lista

        echo '</ol>';
    } // Fim Se Tem array_lista e size > 0

    
?>