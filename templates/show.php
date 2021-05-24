<?php $title = $post['title']; ?>

<?php ob_start() ?>
    <h1><?= $title ?></h1>

    <div class="date"><?= $post['created_at'] ?></div>
    <div class="body"><?= $post['content'] ?></div>

    <a href="/">Back to List</a>
<?php $content = ob_get_clean(); ?>

<?php include 'layout.php'; ?>