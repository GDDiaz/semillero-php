<?php
/**
 * Created by PhpStorm Hurrem Hsn
 * User: Diaz
 * Date: 25/11/2018
 * Time: 9:41 PM
 */

/**
 *
 */
function listAction()
{
    $posts = getAllPost();
    require 'templates/list.php';
}

/**
 * @param $id
 */
function showAction($id)
{
    $post = getPostById($id);
    require 'templates/show.php';
}