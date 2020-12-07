<div class="titulo">
    Operações Aritméticas
</div>

<?php 

    //calculos simples
    echo 1 + 1, '<br>';
    echo 1 + 2.5, '<br>';
    echo 10 - 2, '<br>';
    echo 2 * 5, '<br>';
    echo 7 / 4, '<br>';

    //resultado inteiro da divisão tirando a parte quebrada
    echo intdiv(7 , 4);

    //arredonda o valor da divisão
    echo round (7 / 4), '<br>';

    //resto da divisão
    echo 7 % 4, '<br>';

    //calculos de potenciação
    echo 4 ** 2, '<br>';

    //precedência de operadores
    echo '<p> Precedência </p>';
    echo 2 + 3 * 4, '<br>';
    echo (2+3) * 4, '<br>';
?>
