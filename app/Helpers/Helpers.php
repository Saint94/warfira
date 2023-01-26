<?php

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

    if(!function_exists('set_active_route'))
    {
        function set_active_route($route)
        {
            //return Route::is($route) ? 'active' : '';
        }
    }
?>

<?php

//formater montant fr

    if(! function_exists('formater_montant'))
    {
        function formater_montant($val)
        {
            if ($val != 0)
            {
                return strrev(wordwrap(strrev($val), 3, ' ', true)).' FCFA'; // 12 345 678
            }
            else
            {
                return '0 FCFA';
            }
        }
    }


//Formater date en français

    if(! function_exists('formater_date'))
    {
        function formater_date_fr($date)
        {
            setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
            return strftime('%A %d/%m/%Y',strtotime($date));

        }

    }


//Pour le crypatage et décryptage

function array_isomorphe_complexe(){
    $array=range(0, 66);
    $alphabet=range("a", "z");
    $ALPHABET=range("A", "Z");
    $digit=array('0','1','2','3','4','5','6','7', '8','9');
    $array_letters=array_merge(array(" ","_","-","*"),$alphabet,$ALPHABET,$digit);
    $arr['ensemble']=$array;
    $arr['iso']=$array_letters;
    return $arr;
}
function array_isomorphe(){
    $array=range(0, 55);
    $alphabet=range("a", "z");
    $ALPHABET=range("A", "Z");
    $array_letters=array_merge(array("_","-","*"),$alphabet,$ALPHABET);
    $arr['ensemble']=$array;
    $arr['iso']=$array_letters;
    return $arr;
}

//Crypter

if(! function_exists('crypter'))
{
    function crypter($chaine)
    {
        $array_letters=array_isomorphe_complexe()['iso'];
        $array=array_isomorphe_complexe()['ensemble'];
        $char='';
        $j=0;
        $crypt=array();
        $ch=str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz");
        $ch=str_shuffle(substr($ch, 45));
        $chaine.=$ch;
        for($i=0;$i<strlen($chaine);$i++) {
            foreach ($array_letters as $key => $value) {
                if($chaine[$i]==$value){
                    $mod=intval($key)-(strlen($chaine)+$j);
                    if(intval($mod)<0)
                        $mod=count($array_letters)+intval($mod);
                    if(intval($mod)<0)
                        $mod=count($array_letters)+intval($mod);
                    array_push($crypt, $mod);
                    $j++;
                }
            }
        }
        foreach ($crypt as $k => $v){
            foreach ($array_letters as $key => $value) {
                if($v==$key){
                    $char.="".$value;
                }
            }
        }
        return $char;
    }

}

//Décrypter

if(! function_exists('decrypter'))
{
    function decrypter($chaine)
    {
        $array_letters=array_isomorphe_complexe()['iso'];
        $array=array_isomorphe_complexe()['ensemble'];
        $char='';
        $j=0;
        $crypt=array();
        for($i=0;$i<strlen($chaine);$i++) {
            foreach ($array_letters as $key => $value) {
                if($chaine[$i]==$value){
                    $mod=intval($key)+(strlen($chaine)+$j);
                    if($mod>count($array_letters))
                        $mod=$mod-count($array_letters);
                    if($mod>count($array_letters))
                        $mod=$mod-count($array_letters);
                    if($mod==count($array_letters))
                        $mod=0;
                    array_push($crypt, $mod);
                    $j++;
                }
            }
        }
        foreach ($crypt as $k => $v){
            foreach ($array_letters as $key => $value) {
                if($v==$key){
                    $char.=$value;
                }
            }
        }
        $ch=substr($char, strlen($char)-7);
        $char=str_replace($ch, "", $char);
        return $char;
    }
}


//Fin fonction cryptage et décryptage

?>


