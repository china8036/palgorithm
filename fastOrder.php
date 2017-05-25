<?php

/**
 * 快速排序算法
 * @author zh wang china8036@126.com
 * @since 2017/0524
 */

/**
 * 
 * @param array $data
 */
function fastOrder(array &$data) {
    if (count($data) < 2) {//当数组中元素少于两个时候终止递归操作
        return;
    }
    //选一个基准 随便的话 就选第一个
    $pivot = current($data);
    $left = $right = [];
    foreach ($data as $v) {
        if ($v > $pivot) {//大于基准的放右边
            $right[] = $v;
        }
        else if ($v < $pivot) {//小于等于基准的放左边 
            $left[] = $v;
        }
        else {//等于的
            $medium[] = $v;
        }
    }
    fastOrder($left);
    fastOrder($right);
    $data = array_merge($left, $medium, $right);
}
