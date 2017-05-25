<?php

/**
 * 测试算法复杂度
 * @author zh wang china8036@126.com
 * @since 2017/05/25
 */

/**
 * 
 * @param type $num
 * @return type
 */
function getRandomData($num = 100) {
    $data = [];
    for ($i = 0; $i < $num; $i++) {
        $data[] = rand(1, $num);
    }
    return $data;
}

require 'bubblingOrder.php';

require 'fastOrder.php';

for ($i = 10; $i < 1000000; $i *= 10) {
    $data = getRandomData($i);
    $b = microtime(true);
    fastOrder($data);
    echo 'fast ' . $i . ':' . (microtime(true) - $b) . PHP_EOL;
    $data = getRandomData($i);
    $b = microtime(true);
    bubblingOrder($data);
    echo 'bubbling ' . $i . ':' . (microtime(true) - $b) . PHP_EOL;
}

