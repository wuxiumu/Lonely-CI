<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexController extends Admin_Controller
{
    public function index()
    {        
        echo date("Y-m-d H:i:s",time());
        echo '<br>'."后台01";
    }
}
