<?php

namespace rubencm\storage_flysystem\provider;

use \phpbb\storage\provider\provider_interface;

class azure_blob implements provider_interface
{
	/**
	 * {@inheritdoc}
	 */
	public function get_name()
	{
		return 'azure_blob';
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_adapter_class()
	{
		return \rubencm\storage_flysystem\adapter\azure_blob::class;
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_options()
	{
		return [
			'AccountName' => ['type' => 'text'],
			'AccountKey' => ['type' => 'password'],
			'Container' => ['type' => 'text'],
			'path' => ['type' => 'text'],
			];
	}

	/**
	 * {@inheritdoc}
	 */
	public function is_available()
	{
		return true;
	}
}
