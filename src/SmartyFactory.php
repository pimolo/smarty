<?php

namespace App;

class SmartyFactory
{
    /**
     * @var \Smarty
     */
    private static $instance;

    /**
     * @return \Smarty
     */
    public static function getInstance(): \Smarty
    {
        if (self::$instance !== null) {
            return self::$instance;
        }

        $smarty = new \Smarty();

        $smarty->setTemplateDir('templates/');
        $smarty->setCompileDir('templates_c/');
        $smarty->setConfigDir('configs/');
        $smarty->setCacheDir('cache/');
        //$smarty->debugging = true;

        self::$instance = $smarty;

        return $smarty;
    }
}