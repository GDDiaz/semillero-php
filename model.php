<?php
/**
 * Created by PhpStorm Hurrem Hsn
 * User: Diaz
 * Date: 25/11/2018
 * Time: 6:34 PM
 */

/**
 *  Este metodo crea una conexion a la base de datos
 * @return mysqli (link)
 */
function openDatabaseConnection() {
    return mysqli_connect('localhost', 'root', '', 'blog_db');
}

/**
 * Este metodo cierra la conexion a la base de datos
 * @param $link
 */
function closeDatabasesConnection($link) {
    mysqli_close($link);
}

/**
 * Este metodo retorna todos los post
 * @return array
 */
function getAllPost()
{
    $link = openDatabaseConnection();
    $query = mysqli_query($link, 'SELECT id, title FROM post');
    $posts = [];

    while ($row = mysqli_fetch_assoc($query)) {
        $posts[] = $row;
    }

    return $posts;
}

/**
 * Este metodo consulta la informacion de un post por medio de un id
 * @param $id
 * @return array|null
 */
function getPostById($id) {
    $link = openDatabaseConnection();
    $id = mysqli_real_escape_string($link, $id);
    $query = mysqli_query($link,"SELECT title, description FROM post WHERE id = {$id}");
    $row = mysqli_fetch_assoc($query);
    closeDatabasesConnection($link);
    return $row;
}