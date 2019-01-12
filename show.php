<?php
/**
 * Created by PhpStorm Hurrem Hsn
 * User: Diaz
 * Date: 25/11/2018
 * Time: 8:49 PM
 */

require_once 'model.php';

$post = getPostById($_GET['id']);

require 'templates/show.php';