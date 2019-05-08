<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexController extends Home_Controller
{
    public function index()
    {        
        echo date("Y-m-d H:i:s",time());
        echo '<br>'."前台01";
    }
}
