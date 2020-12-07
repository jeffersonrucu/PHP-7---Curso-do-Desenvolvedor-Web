<div class="titulo">
    Tipo String
</div>

<?php 

    echo 'Eu sou uma string';
    echo '<br>';

    //ascentos também contam 
    var_dump('Eu também');
    echo '<hr>';

    //concatenação de String
    echo "Nós também" . ' somos';
    echo '<hr>';

    //aspas
    echo " 'Teste' ";
    echo '<br>';

    echo ' "Teste" ';
    echo '<br>';

    echo ' \'Teste\' ';
    echo '<br>';

    echo " \"Teste\" ";
    echo '<hr>';

    //outra função além do echo para imprimir
    print("Também existe a função print");
    echo '<hr>';

    //algumas funções das strings
    echo strtoupper('maximizado') . '<br>';
    echo strtolower('MINIMIZADO') . '<br>';

    //a primeira letra será maiuscula
    echo ucfirst('só a primeira letra sera maiuscula') . '<br>';

    //todas as primeiras letras das palavras sera maiusculas
    echo ucwords('todas as palavras') . '<br>';

    //Quantidade de letras
    echo strlen('Quantas letras?') . '<br>';
    
    //Quantidade de letras sem contar os acentos
    echo mb_strlen('Eu também', "utf-8") . '<br>';

    //Só uma parte da string
    echo substr('Só uma parte mesmo', 7,6) . '<br>';  
    
    //substituindo palavras
    echo str_replace('isso', 'aquilo' , 'troca isso') . '<br>';

?>