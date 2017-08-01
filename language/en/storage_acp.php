<?php

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(

	// AWS S3
	'STORAGE_ADAPTER_AWS_S3_NAME'						=> 'Amazon Web Services S3',
	'STORAGE_ADAPTER_AWS_S3_OPTION_KEY'					=> 'Key',
	'STORAGE_ADAPTER_AWS_S3_OPTION_SECRET'				=> 'Secret',
	'STORAGE_ADAPTER_AWS_S3_OPTION_REGION'				=> 'Region',
	'STORAGE_ADAPTER_AWS_S3_OPTION_VERSION'				=> 'Version',
	'STORAGE_ADAPTER_AWS_S3_OPTION_BUCKET'				=> 'Bucket',
	'STORAGE_ADAPTER_AWS_S3_OPTION_PATH'				=> 'Path',
	'STORAGE_ADAPTER_AWS_S3_OPTION_HOTLINK'				=> 'Hotlink',
	'STORAGE_ADAPTER_AWS_S3_OPTION_HOTLINK_EXPLAIN'		=> 'The file will be linked directly.',

	// Dropbox
	'STORAGE_ADAPTER_DROPBOX_NAME'							=> 'Dropbox',
	'STORAGE_ADAPTER_DROPBOX_OPTION_ACCESS_TOKEN'			=> 'Access Token',
	'STORAGE_ADAPTER_DROPBOX_OPTION_PATH'					=> 'Path',
	'STORAGE_ADAPTER_DROPBOX_OPTION_HOTLINK'				=> 'Hotlink',
	'STORAGE_ADAPTER_DROPBOX_OPTION_HOTLINK_EXPLAIN'		=> 'The file will be linked directly.',

	// Google Drive
	'STORAGE_ADAPTER_GOOGLE_DRIVE_NAME'							=> 'Google Drive',
	'STORAGE_ADAPTER_GOOGLE_DRIVE_OPTION_APP_CLIENT_ID'			=> 'App client id',
	'STORAGE_ADAPTER_GOOGLE_DRIVE_OPTION_CLIENT_SECRET'			=> 'Client secret',
	'STORAGE_ADAPTER_GOOGLE_DRIVE_OPTION_REFRESH_TOKEN'			=> 'Refresh token',
	'STORAGE_ADAPTER_GOOGLE_DRIVE_OPTION_ROOT'					=> 'Root folder',

	// Ftp
	'STORAGE_ADAPTER_FTP_NAME'					=> 'Ftp',
	'STORAGE_ADAPTER_FTP_OPTION_HOST'			=> 'Host',
	'STORAGE_ADAPTER_FTP_OPTION_USERNAME'		=> 'Username',
	'STORAGE_ADAPTER_FTP_OPTION_PASSWORD'		=> 'Password',
	'STORAGE_ADAPTER_FTP_OPTION_PORT'			=> 'Port',
	'STORAGE_ADAPTER_FTP_OPTION_PATH'			=> 'Root path',
	'STORAGE_ADAPTER_FTP_OPTION_PASSIVE'		=> 'Passive',
	'STORAGE_ADAPTER_FTP_OPTION_SSL'			=> 'Ssl',

));
