<?php

class Paro
{
    public static function get_paro()
    {
        ini_set('display_errors', 0);
        ini_set('display_startup_errors', 0);
        error_reporting(0);
        $url = 'https://datosmacro.expansion.com/paro/espana';
        $d = new DOMDocument;
        $d->loadHTML(file_get_contents($url));
        $finder = new DomXPath($d);
//*[@id="tb0"]/tbody/tr[1]/td[2]
///html/body/div[3]/div[1]/div/section/div/article/div/div[3]/div[1]/div[2]/table/tbody/tr[1]/td[2]
        $classname = "tabledat";
        $nodes = $finder->query('//*[@id="tb0"]/tbody/tr[1]/td[2]');
        ?>
        <?php
//var_dump($nodes);
//var_dump($nodes->item(0)->nodeValue);
        return $paro = ($nodes->item(0)->nodeValue);
    }
}
