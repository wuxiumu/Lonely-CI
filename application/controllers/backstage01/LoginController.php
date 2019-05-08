<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller
{
    public function index()
    {        
        echo date("Y-m-d H:i:s",time());
        echo '<br>'."登陆01";
    }
}
