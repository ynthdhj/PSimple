<?php
 /*
 ¶Îºé½Ü  qq:19512448
 
 */
namespace util;
if (!defined('DOCUMENT_ROOT')) {
    exit("No permission resources");
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author abc
 */
class Util {
    public static function copyProperties($srcBean, $toBean) {
        foreach ($srcBean as $key => $value) {
            if (is_string($value)) { //·ÀÖ¹×¢Èë¹¥»÷
                if (is_array($toBean)) {
                    $toBean[$key] = $value;
                } else if (is_object($toBean)) {
                    if (property_exists($toBean, $key)) {
                        $toBean->$key = $value;
                    }
                }
            }
        }
        return $toBean;
    }
}
