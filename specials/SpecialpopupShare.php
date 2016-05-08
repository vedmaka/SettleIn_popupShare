<?php

/**
 * popupShare SpecialPage for popupShare extension
 *
 * @file
 * @ingroup Extensions
 */
class SpecialpopupShare extends SpecialPage
{
    public function __construct()
    {
        parent::__construct( 'popupShare' );
    }

    /**
     * Show the page to the user
     *
     * @param string $sub The subpage string argument (if any).
     *  [[Special:popupShare/subpage]].
     */
    public function execute( $sub )
    {
        $out = $this->getOutput();

        $out->setPageTitle( $this->msg( 'popupshare-helloworld' ) );

        $out->addHelpLink( 'How to become a MediaWiki hacker' );

        $out->addWikiMsg( 'popupshare-helloworld-intro' );
    }

    protected function getGroupName()
    {
        return 'other';
    }
}
