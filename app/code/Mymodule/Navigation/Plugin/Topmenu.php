<?php

namespace Mymodule\Navigation\Plugin;

class Topmenu
{
    public function afterGetHtml(\Magento\Theme\Block\Html\Topmenu $topmenu, $html)
    {
//        $html .= "<li class=\"level0 nav-4 level-top parent ui-menu-item\">";
//        $html .= "<a href=\"" . "helloworld" . "\" class=\"level-top ui-corner-all\" aria-haspopup=\"true\" tabindex=\"-1\" role=\"menuitem\"><span class=\"ui-menu-icon ui-icon ui-icon-carat-1-e\"></span><span>" . __("Helloworld") . "</span></a>";
//        $html .= "<ul class=\"level0 submenu ui-menu ui-widget ui-widget-content ui-corner-all\" role=\"menu\" aria-expanded=\"false\" style=\"display: none; top: 47px; left: -0.4375px;\" aria-hidden=\"true\">";


        $html .= "<li class=\"level0 nav-4 level-top parent ui-menu-item\">";
        $html .= "<a href=\"" . "blog" . "\" class=\"level-top ui-corner-all\" aria-haspopup=\"true\" tabindex=\"-1\" role=\"menuitem\"><span class=\"ui-menu-icon ui-icon ui-icon-carat-1-e\"></span><span>" . __("Blog") . "</span></a>";
        $html .= "<ul class=\"level0 submenu ui-menu ui-widget ui-widget-content ui-corner-all\" role=\"menu\" aria-expanded=\"false\" style=\"display: none; top: 47px; left: -0.4375px;\" aria-hidden=\"true\">";

        //Submenu
        $html .= "<li class=\"level1 nav-5-1 first ui-menu-item\" role=\"presentation\">";
        $html .= "<a href=\"" . "EXTERNAL_URL" . "\" class=\"ui-corner-all\" tabindex=\"-1\" role=\"menuitem\"><span>" . __("EXTERNAL_URL_TITLE") . "</span></a>";
        $html .= "</li>";

//        $html .= "<li class=\"level1 nav-5-1 first ui-menu-item\" role=\"presentation\">";
//        $html .= "<a href=\"" . "EXTERNAL_URL" . "\" class=\"ui-corner-all\" tabindex=\"-1\" role=\"menuitem\"><span>" . __("EXTERNAL_URL_TITLE") . "</span></a>";
//        $html .= "</li>";
//
//        $html .= "<li class=\"level1 nav-5-1 first ui-menu-item\" role=\"presentation\">";
//        $html .= "<a href=\"" . "EXTERNAL_URL" . "\" class=\"ui-corner-all\" tabindex=\"-1\" role=\"menuitem\"><span>" . __("EXTERNAL_URL_TITLE") . "</span></a>";
//        $html .= "</li>";

        $html .= "</ul>";
        $html .= "</li>";

        return $html;
    }
}