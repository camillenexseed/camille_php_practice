<?php
    // 問2
    for ($i = 100; $i >= 1; $i--) {
        echo $i;
        echo '<br>';
    }

    // 問2
    for ($i = 1; $i <= 9; $i++) {
        echo $i * 3 .' ';
    }

    echo '<br>';

    // 問3
    for ($i = 1; $i <= 100; ++$i) {
        if ($i % 3 === 0 && $i % 5 === 0){
            echo 'FizzBuzz';
        } elseif ($i % 5 === 0){
            echo 'Buzz';
        } elseif ($i % 3 === 0){
            echo 'Fizz';
        } else {
            echo $i;
        }
        echo '<br>';
    }

    // 問4
    for ($i = 1; $i <= 100; $i++) {
        echo $i.' ';

        if ($i % 10 === 0) {
            echo '<br>';
        }
    }

    // 問5
    $alpha = ['E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C'];

    $i = 0;

    foreach ($alpha as $v) {
        //Aに該当するときだけ数を増やす
        if ($v === 'A') {
            $i++;
        }
    }

    echo $i;
    echo '<br>';

    // 問6
    $english = 90; //英語の点数
    $math = 50; //数学の点数
    $total = $english + $math;

    if ($english >= 60 && $math >= 60 && $total >= 140) {
        echo '合格';
    } else {
        echo '残念';
    }

    echo '<br>';

    // 問7
    for ($i=1; $i <= 9; $i++) { 
        for ($j=1; $j <= 9; $j++) { 
            $res = $i * $j . ' ';
            echo $res;
        }
        echo '<br>';
    }

    // 問8
    $primeNumbers = [];

    for ($i = 2; $i < 100; $i++) {
        for ($j = 2; $j <= $i; $j++) {
            if ($i % $j === 0 && $j < $i) {
                break;
            }

            if ($i === $j) {
                $primeNumbers[] = $i;
            }
        }
    }

    print_r($primeNumbers);




