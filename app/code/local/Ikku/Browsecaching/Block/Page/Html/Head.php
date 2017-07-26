<?php
class Ikku_Browsecaching_Block_Page_Html_Head extends Mage_Page_Block_Html_Head
{
    protected function &_prepareStaticAndSkinElements($format, array $staticItems, array $skinItems, $mergeCallback = null){

        $html = parent::_prepareStaticAndSkinElements($format, $staticItems, $skinItems, $mergeCallback);
        $salt = md5(time());
        $html = str_replace('.js', '.js?t='.$salt, $html);
        $html = str_replace('.css', '.css?t='.$salt, $html);

        return $html;
    }
}