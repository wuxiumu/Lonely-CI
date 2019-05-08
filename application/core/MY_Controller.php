<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
#前台主父控制器
class Home_Controller extends CI_Controller{
    
    public function __construct(){        
        parent::__construct();  
        //$this->load->database('luthier-ci');       
    } 
}
#前台副父控制器
class Shop_Controller extends CI_Controller{
    public function __construct(){
        parent::__construct();        
    } 
}
#接口父控制器
class Api_Controller extends CI_Controller{
    public function __construct(){
        parent::__construct(); 
        //$this->load->database('default');              
    } 
}
#后台父控制器
class Admin_Controller extends CI_Controller{
    public function __construct(){
        parent::__construct();        
        //$this->load->database('default');       
        if(empty($_SESSION['admin_session'])){
            redirect('admin/login');
        }else{

        }
    } 
} 