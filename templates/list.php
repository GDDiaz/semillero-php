<?php
/**
 * Created by Hurrem Hsn
 * User: Diaz
 * Date: 25/11/2018
 * Time: 5:54 PM
 */
?>
<?php $title = 'Lista de Posts' ?>
<?php ob_start() ?>
    <h1>Lista de Posts</h1>
    <ul class="list-group">
        <?php foreach($posts as $post): ?>
            <li class="list-group-item">
                <a href="/blog_tecnologias_web/index.php/show?id=<?php echo $post['id'] ?>">
                    <?php echo $post['title'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php $content = ob_get_clean() ?>

<?php require 'layout.php' ?>
