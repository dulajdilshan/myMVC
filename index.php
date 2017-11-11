<?php
/**
 * Created by PhpStorm.
 * User: Dulaj
 * Date: 09-Nov-17
 * Time: 4:27 PM
 */

$url = $_GET['url'];

echo  $url;

require 'controllers/' .$url .'.php';

$controller = new $url;

?>
