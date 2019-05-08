<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexController extends Api_Controller
{
    public function index()
    {        
        echo date("Y-m-d H:i:s",time());
        echo '<br>'."接口01";
    }
}
