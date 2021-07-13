<?php

class SpontanioActivator
{
	public static function activate()
	{
		if ( ! get_option('spontanio') ) {
			add_option( 'spontanio', array( 'uri_room_name' => self::getDefaultRoomName() ) );
		}
		flush_rewrite_rules();
	}

	public static function getDefaultRoomName()
	{
		$defaultRoomName = parse_url( home_url(), PHP_URL_HOST );
		if ( strpos( $defaultRoomName, 'www.' ) !== false ) {
			$defaultRoomName = substr( $defaultRoomName, 4 );
		}
		$defaultRoomNameLength = strlen( preg_replace( '/[^0-9a-z]/', '', $defaultRoomName ) );
		if ($defaultRoomNameLength < 6) {
			$chars = array_merge( range( 0, 9 ) );
			shuffle( $chars );
			$defaultRoomName .= implode( array_slice( $chars, 0, 6 - $defaultRoomNameLength ) );
		}
		return $defaultRoomName;
	}
}