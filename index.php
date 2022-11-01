<?php
spl_autoload_register(function ($class_name)
{
    include $class_name.'.php';
});

use \SRC\Funcoes;
$f = new Funcoes();

// Teste 1
    $ano = 2001;
    echo "<h5>Teste 1</h5>";
    echo "Ano {$ano} = século ".$f->SeculoAno($ano);

    echo '<hr>';

// Teste 2
    $num = 29;
    echo "<h5>Teste 2</h5>";
    echo "Numero = {$num} resposta = ".$f->PrimoAnterior($num);

    echo '<hr>';

// Teste 3
    $multidimensional = array (
        array(25,22,18),
        array(10,15,13),
        array(24,5,2),
        array(80,17,15)
    );
    echo "<h5>Teste 3</h5>";
    echo "resposta = ".$f->SegundoMaior($multidimensional);

    echo '<hr>';

// Teste 4
    echo "<h5>Teste 4</h5>";
    echo "[1, 3, 2, 1] ";
    echo $f->SequenciaCrescente([1, 3, 2, 1]) ? 'true' : 'false';
    echo "<br>";
    echo "[1, 3, 2] ";
    echo $f->SequenciaCrescente([1, 3, 2]) ? 'true' : 'false';
    echo "<br>";
    echo "[1, 2, 1, 2] ";
    echo $f->SequenciaCrescente([1, 2, 1, 2]) ? 'true' : 'false';
    echo "<br>";
    echo "[3, 6, 5, 8, 10, 20, 15] ";
    echo $f->SequenciaCrescente([3, 6, 5, 8, 10, 20, 15]) ? 'true' : 'false';
    echo "<br>";
    echo "[1, 1, 2, 3, 4, 4]  ";
    echo $f->SequenciaCrescente([1, 1, 2, 3, 4, 4] ) ? 'true' : 'false';
    echo "<br>";
    echo "[1, 4, 10, 4, 2] ";
    echo $f->SequenciaCrescente([1, 4, 10, 4, 2]) ? 'true' : 'false';
    echo "<br>";
    echo "[10, 1, 2, 3, 4, 5] ";
    echo $f->SequenciaCrescente([10, 1, 2, 3, 4, 5]) ? 'true' : 'false';
    echo "<br>";
    echo "[1, 1, 1, 2, 3] ";
    echo $f->SequenciaCrescente([1, 1, 1, 2, 3]) ? 'true' : 'false';
    echo "<br>";
    echo "[0, -2, 5, 6] ";
    echo $f->SequenciaCrescente([0, -2, 5, 6]) ? 'true' : 'false';
    echo "<br>";
    echo "[1, 2, 3, 4, 5, 3, 5, 6] ";
    echo $f->SequenciaCrescente([1, 2, 3, 4, 5, 3, 5, 6]) ? 'true' : 'false';
    echo "<br>";
    echo "[40, 50, 60, 10, 20, 30] ";
    echo $f->SequenciaCrescente([40, 50, 60, 10, 20, 30]) ? 'true' : 'false';
    echo "<br>";
    echo "[1, 1] ";
    echo $f->SequenciaCrescente([1, 1]) ? 'true' : 'false';
    echo "<br>";
    echo "[1, 2, 5, 3, 5] ";
    echo $f->SequenciaCrescente([1, 2, 5, 3, 5]) ? 'true' : 'false';
    echo "<br>";
    echo "[1, 2, 5, 5, 5] ";
    echo $f->SequenciaCrescente([1, 2, 5, 5, 5]) ? 'true' : 'false';
    echo "<br>";
    echo "[10, 1, 2, 3, 4, 5, 6, 1] ";
    echo $f->SequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1]) ? 'true' : 'false';
    echo "<br>";
    echo "[1, 2, 3, 4, 3, 6] ";
    echo $f->SequenciaCrescente([1, 2, 3, 4, 3, 6]) ? 'true' : 'false';
    echo "<br>";
    echo "[1, 2, 3, 4, 99, 5, 6] ";
    echo $f->SequenciaCrescente([1, 2, 3, 4, 99, 5, 6]) ? 'true' : 'false';
    echo "<br>";
    echo "[123, -17, -5, 1, 2, 3, 12, 43, 45] ";
    echo $f->SequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45]) ? 'true' : 'false';
    echo "<br>";
    echo "[3, 5, 67, 98, 3] ";
    echo $f->SequenciaCrescente([3, 5, 67, 98, 3]) ? 'true' : 'false';
    echo "<br>";
