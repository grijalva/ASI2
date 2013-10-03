<?php

class XmlContent {

    public static function headerReportContent($jasper) {
        $content = "<?xml version='1.0' encoding='utf-8'?>";
        $content .= "<pdf creator='DR' subject='' title='" . $jasper->name . "'>";
        $content .= "<stylesheet file='" . getcwd() . "/protected/extensions/JasPHP/style.txt' />";
		//Esta linea cambio... " . substr($jasper->orientation, 0, 1) . " 
        $content .= "<body format='A4' unit='mm' orientation='p' marginleft='" . $jasper->leftMargin . "' marginright='" . $jasper->rightMargin . "' marginbottom='" . $jasper->bottomMargin . "' margintop='" . $jasper->topMargin . "'>";
        //arriba :)
		$content .= "<page>";

        return $content;
    }

    public static function headerSubReportContent($jasper) {
        $content = "";

        return $content;
    }

    public static function footerReportContent($jasper) {
        $content = "</page>";
        $content .= "</body>";
        $content .= "</pdf>";

        return $content;
    }

    public static function footerSubReportContent($jasper) {
        $content = "";

        return $content;
    }

}