<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Bower Module
 *
 * @package		Bower Module
 * @author		Peter Varga
 * @copyright	Copyright (c) 2015, Peter Varga
 * @license		MIT
 * @link		http://www.vargapeter.com
 */
class Module_Bower extends Module {

	public $version = '1.0';

	public function info()
	{
		return array(
			'name' => array(
				'en' => 'Bower'
			),
			'description' => array(
				'en' => 'Use bower assets in your theme.'
			),
			'frontend' => false,
			'backend' => false,
		);
	}

	public function install()
	{	
		
		$this->db->insert('settings', array(
    			'slug' => 'bower_folder',
    			'title' => 'Bower Folder',
    			'description' => 'You can rename your bower components folder here. theme_folder/<bower folder>',
    			'`default`' => 'bower_components',
    			'`value`' => 'bower_components',
    			'type' => 'text',
    			'options'=>'',
    			'is_required' => 1,
    			'is_gui' => 1,
    			'module' => 'bower'
    		));

		
		return TRUE;
		
	}

	public function uninstall()
	{
		
		$this->db->delete('settings', array('module' => 'bower'));

		return TRUE;
		
	}


	public function upgrade($old_version)
	{
		return TRUE;
	}

	public function help()
	{
	
		return "It's just works.";
	}
}
/* End of file details.php */
