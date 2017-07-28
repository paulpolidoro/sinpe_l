<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 17/07/2017
 * Time: 08:33
 */

namespace App\Sinpe;


class Mask
{
    public static $MASK_CNPJ = "##.###.###/####-##";
    public static $MASK_TEL10 = "(##) ####-####";
    public static $MASK_TEL11 = "(##) #####-####";
    public static $MASK_CPF = "###.###.###-##";
    public static $MASK_CEP = "#####-###";

    /**
     * @param mixed $val
     * @param string $mask
     * @return string
     */
    public static function create($val, $mask)
    {
        $maskared = '';
        $k = 0;
        for($i = 0; $i<=strlen($mask)-1; $i++)
        {
            if($mask[$i] == '#')
            {
                if(isset($val[$k]))
                    $maskared .= $val[$k++];
            }
            else
            {
                if(isset($mask[$i]))
                    $maskared .= $mask[$i];
            }
        }
        return $maskared;
    }
}