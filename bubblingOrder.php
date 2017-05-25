<?php

/**
 * 冒泡算法
 * @author zh wang china8036@126.com
 * @since 2017/05/25
 */
function bubblingOrder(array &$data) {
    if (empty($data)) {
        return;
    }
    $change = true; //标记一下是否有调整顺序 没有调整的话排序结束
    while ($change) {
        $change = false;
        foreach ($data as $k => $v) {//比较相邻的两个如果前面的比后面的大 交换两个顺序
            if (!isset($data[$k + 1])) {//循环到尾部
                break;
            }
            if ($v <= $data[$k + 1]) {
                continue;
            }
            $change = true;
            list($data[$k], $data[$k + 1]) = [$data[$k + 1], $v]; //交换顺序
        }
    }
}
