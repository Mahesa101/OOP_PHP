<?php
//adalah cara auto untuk melakukan require 
spl_autoload_register(function($class){
require_once 'Autoloading/' .$class.'.php';
});