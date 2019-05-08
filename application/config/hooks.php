<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$hook = Luthier\Hook::getHooks(
	[
        'modules' => ['auth','debug']
    ]
);