<?php
/**
 * Created by PhpStorm Hurrem Hsn.
 * User: Diaz
 * Date: 22/11/2018
 * Time: 10:43 PM
 */

require_once 'model.php';

require_once 'controllers.php';

// encamina la petición internamente
$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/blog_tecnologias_web/index.php') {
    listAction();
} elseif ($uri == '/blog_tecnologias_web/index.php/show?id='.$_GET['id'] && isset($_GET['id'])) {
    showAction($_GET['id']);
} else {
    header('Status: 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}