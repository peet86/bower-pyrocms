<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Bower Events Class
 * 
 * @package        PyroCMS
 * @subpackage    Bower Module
 * @category    events
 * @author        Peter Varga
 * @website        http://vargapeter.com
 */
class Events_Bower {
    
    protected $ci;
    
    public function __construct()
    {
        $this->ci =& get_instance();
        
        //register the public_controller event
        Events::register('public_controller', array($this, 'run'));
		
    }
    
    public function run()
    {
	    		
	    $this->ci->load->model('settings_m');
		$setting = $this->ci->settings_m->get_by(array('slug' => 'bower_folder'));

		$theme= $this->ci->theme_m->get();	
		
		Asset::add_path('bower', array(
		     'path' => $theme->web_path.'/'.$setting->value,
		     'js_dir' => '/',
		     'css_dir' => '/',
		));
		

    }
    
}
/* End of file events.php */