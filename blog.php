<?php

require_once 'models/Post.class.php';

require_once 'models/PostManager.class.php';

$postManager = new PostManager();
$postManager->getPostFromDb();

ob_start(); ?>

<h1>Blog</h1>

<?php foreach ($postManager->getPosts() as $post){ ?>

<div class="card mb-3">
    <a href="#" class="post text-body text-decoration-none">

        <h3 class="card-header"><?= $post->getHeader() ?></h3>
        <div class="card-body">
            <h5 class="card-title"> <?= $post->getTitle() ?></h5>
            <h6 class="card-subtitle text-muted"> Par <?= $post->getAuthor() ?></h6>
        </div>
        <img src="<?= $post->getImage() ?>" alt="">
        <div class="card-body">
            <p class="card-text">
                <?php
                $body = $post->getbody();
                $body = str_replace("\n", '<br>', $body);
                echo $body;
                ?>
            </p>
        </div>
        <div class="card-footer text-muted">
            <?= $post->getDate() ?>
        </div>
    </a>
    <div class="card-body">
        <a href="#" class="card-link">Modifier</a>
        <a href="#" class="card-link">Supprimer</a>
    </div>
</div>
<?php } ?>

<a href="#"><button type="button" class="btn btn-secondary">Ajouter un post</button></a>

<?php
$title = 'Blog - Site de Dev\'On-Web';
$content = ob_get_clean();
require_once 'template.php';