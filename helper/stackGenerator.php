<?php
/**
 * Stack Generator Helper
 * Created by: Nilesh Sadarangani
 * Date: 04/07/14
 */

class stackGenerator {

    const CARD_FACE_COUNT = 13;
    const MAX_CARD_FACE_VALUE = 11;
    const CARD_VARIANT_COUNT = 4;

    public function __construct()
    {

    }
    protected static function _getStack()
    {
        $stack = array();
        for ($count = 1; $count <= static::MAX_CARD_FACE_VALUE; $count++) {
            switch ($count) {
                case ($count <= 9):
                    $stack[$count] = $count;
                    break;
                case ($count == 10):
                    $stack['J'] = $count;
                    $stack['Q'] = $count;
                    $stack['K'] = $count;
                    break;
                case (count == 11):
                    $stack['A'] = $count;
            }
        }
        return $stack;
    }

    protected static function _getCardVariants()
    {
        return array(
            'S', 'C', 'D', 'H'
        );
    }

    public static function generateStack()
    {
        $variants = self::_getCardVariants();
        $stack = self::_getStack();
        $mergedStack = array();
        foreach ($variants as $variant) {
            foreach ($stack as $key => $value) {
                $mergedStack[$key . '-' . $variant] = $value;
            }
        }
        return $mergedStack;
    }
}