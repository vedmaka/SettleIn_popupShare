<?php

/**
 * Hooks for popupShare extension
 *
 * @file
 * @ingroup Extensions
 */
class popupShareHooks
{

	public static function onExtensionLoad()
	{
		
	}

	public static function onNameOfHook()
	{
		
	}

	/**
	 * @param Parser $parser
	 */
	public static function onParserFirstCallInit( $parser )
	{
		$parser->setFunctionHook('popupshare', 'popupShare::render');
	}

}
