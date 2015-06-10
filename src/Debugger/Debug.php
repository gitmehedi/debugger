<?php

namespace Debugger;

class Debug
{

    public static function error($string, $flag = 0)
    {

        echo "<pre><b>";
        switch ($flag) {
            case 0:
                print_r($string);
                break;
            case 1:
                var_dump($string);
                break;
            case 2:
                foreach ($string as $value) {
                    echo "<pre>";
                    print_r($value);
                    echo "</pre>";
                }
                break;

            default:
                break;
        }
        die();
    }

    public static function debug($string, $flag = 0)
    {

        echo "<pre><b>";
        switch ($flag) {
            case 0:
                print_r($string);
                break;
            case 1:
                var_dump($string);
                break;
            case 2:
                foreach ($string as $value) {
                    echo "<pre>";
                    print_r($value);
                    echo "</pre>";
                }
                break;

            default:
                break;
        }
    }

}
