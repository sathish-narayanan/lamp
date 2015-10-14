<?php
function __autoload($User){
require_once($User.'.php');
}
