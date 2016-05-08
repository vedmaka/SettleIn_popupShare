<?php

/**
 * Class for popupShare extension
 *
 * @file
 * @ingroup Extensions
 */
class popupShare
{

    /**
     * @param Parser $parser
     * @return array
     */
    public static function render( $parser )
    {
        $html = $parser->insertStripItem('<a class="btn btn-cyanide" id="popupsharebtn"><i class="fa fa-share-alt"></i> '.wfMessage( 'popupshare-action-share' )->plain().'</a>');
        $html .= $parser->insertStripItem('<div style="display: none;" id="popupsharewindow">'
            . '<div class="ssk-group"><a href="" class="ssk ssk-facebook"></a><a href="" class="ssk ssk-twitter"></a><a href="" class="ssk ssk-google-plus"></a><a href="" class="ssk ssk-pinterest"></a><a href="" class="ssk ssk-tumblr"></a>'
            . '</div><a href="#" class="popup-closer">'.wfMessage( 'popupshare-action-cancel' )->plain().'</a></div>');

        $parser->getOutput()->addModules('ext.popupshare.kit');
        $parser->getOutput()->addModules('ext.popupshare.foo');

        return array(
            $html,
            'markerType' => 'nowiki'
        );
    }

}
