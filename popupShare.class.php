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
        $html = $parser->insertStripItem('<a class="card-special-skin-link"  id="popupsharebtn"> '.wfMessage( 'popupshare-action-share' )->plain().'</a>');
        $html .= $parser->insertStripItem('<div style="display: none;" id="popupsharewindow">'
            . '<div class="ssk-group"><a href="" class="ssk ssk-facebook"></a><a href="" class="ssk ssk-twitter"></a><a href="" class="ssk ssk-google-plus"></a><a href="" class="ssk ssk-pinterest"></a><a href="" class="ssk ssk-tumblr"></a>'
            . '</div><a href="#" class="popup-closer">'.wfMessage( 'popupshare-action-cancel' )->plain().'</a></div>');

        $html = '<ul class="col-right-social-links ssk-group">';
        $html .= $parser->insertStripItem('<li><a href="#" class="social-link-twitter ssk ssk-twitter"></a></li>');
        $html .= $parser->insertStripItem('<li><a href="#" class="social-link-facebook ssk ssk-facebook"></a></li>');
        $html .= $parser->insertStripItem('<li><a href="#" class="social-link-some ssk ssk-stumbleupon"></a></li>');
        $html .= '</ul>';

        $parser->getOutput()->addModules('ext.popupshare.kit');
        $parser->getOutput()->addModules('ext.popupshare.foo');

        return array(
            $html,
            'markerType' => 'nowiki'
        );
    }

}
