<div class="titulo">
    Desafio Precedência
</div>

<?php 

    echo '<p> 1. Qual o valor será impresso? </p>';
    echo 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3);
    
    echo '<br>';

    echo '<p> 2. Qual expressão imprime o valor 100? </p>';
    echo '<div errado>  a)',    (1 + 2) * 20 -15,      '</div>';
    echo '<div correto> b)',     4 * 5 ** 2,           '</div>';
    echo '<div errado>  c)',     2 ** 3 ** 7 / 1e25,   '</div>';
    echo '<div errado>  d)',     3 + (3 * 8) / 2 - 3,  '</div>';

?>

<style>
    [correto] {
        color: green;
    }

    [errado] {
        color: red;
    }
</style>