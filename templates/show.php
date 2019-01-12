<?php
/**
 * Created by PhpStorm Hurrem Hsm
 * User: Diaz
 * Date: 25/11/2018
 * Time: 8:52 PM
 */
?>

<?php $title = $post['title'] ?>

<?php ob_start() ?>
<h1><?php echo $post['title'] ?></h1>

<div class="date"><?php echo date('Y-m-d') ?></div>
<div class="body">
    <?php echo $post['description'] ?>
</div>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
