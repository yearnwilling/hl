<?php
namespace AppBundle\Service\Common;

class StringToolkit
{
    public static function plain($text, $length = 0)
    {
        $text = strip_tags($text);

        $text = str_replace(array("\n", "\r", "\t"), '', $text);
        $text = str_replace('&nbsp;', ' ', $text);
        $text = trim($text);

        $length = (int)$length;
        if (($length > 0) && (mb_strlen($text) > $length)) {
            $text = mb_substr($text, 0, $length, 'UTF-8');
            $text .= '...';
        }

        return $text;
    }

    public static function createRandomString($length)
    {
        $start = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $code  = null;
        for ($i = 0; $i < $length; $i++) {
            $rand = rand(0, 61);
            $code = $code . $start[$rand];
        }
        return $code;
    }

    /**
     * 生成变量的首字母缩写，支持下划线和小驼峰变量名
     */
    public static function abbr($variable)
    {
        $variable = self::camel2Underline($variable);
        $arr = explode('_', $variable);
        $abbr = '';
        foreach ($arr as $str) {
            $abbr .= $str{0};
        }
        return $abbr;
    }

    public static function camel2Underline($camel)
    {
        return preg_replace_callback("/([A-Z])/", function($match){
            return '_'.strtolower($match[1]);
        }, $camel);
    }

    public static function underline2Camel($underline)
    {
        return preg_replace_callback("/\_([a-z])/", function($match){
            return strtoupper($match[1]);
        }, $underline);
    }

    public static function base64Encryption($string)
    {
        $string = str_replace('_', '~', $string);
        // todo Encryption logic
        return base64_encode($string);
    }

    public static function base64Decryption($string)
    {
        $string = base64_decode($string);
        // todo Decryption logic
        return str_replace('~', '_', $string);
    }
}