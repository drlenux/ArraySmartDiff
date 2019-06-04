<?php

namespace DrLenux\ArraySmartDiff;

/**
 * Class ArrayDiff
 * @package DrLenux\ArraySmartDiff
 */
class ArrayDiff
{
    /**
     * @param array ...$array
     * @return array
     */
    public static function getDiff(array ...$array)
    {
        $old = array_diff_assoc(...$array);
        $new = array_diff_assoc(...(array_reverse($array)));

        $res = [];
        foreach ($new as $v => $k) {
            $res[$v]['new'] = $k;
        }
        foreach ($old as $v => $k) {
            $res[$v]['old'] = $k;
        }
        return $res;
    }
}