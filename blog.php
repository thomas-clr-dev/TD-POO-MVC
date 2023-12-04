<?php

require_once 'models/Post.class.php';

$post1 = new Post(
    1,
    'Les nouvelles les plus étranges de la semaine',
    'Avec des extraterrestres, des pingouins et des poissons-rouges',
    'Par Professeur Zorglub',
    'https://picsum.photos/319/180',
    'Des chercheurs découvrent que les chats peuvent communiquer en morse.
    Une ville construite entièrement en bonbons attire des milliers de visiteurs.
    Un homme se réveille après 10 ans de coma et découvre que sa femme l\'a quitté pour un extraterrestre.
    Un poisson-rouge se fait passer pour un requin et terrorise les autres poissons.
    Un pingouin est arrêté en état d\'ivresse dans un bar de Bretagne.',
    'Il y a 1 jour'
);

$post2 = new Post(
    2,
    'Les nouvelles du monde, ce qui s\'est passé cette semaine',
    'Des marins à la dérive, des pirates et des naufragés',
    'Capitaine Haddock',
    'https://picsum.photos/318/180',
    'Des marins se sont échoués sur une île déserte.
    Des pirates ont attaqué un navire de croisière.
    Un naufragé a été retrouvé sur une île déserte.',
    'Il y a 9 jour'
);

require_once 'models/PostManager.class.php';

$postManager = new PostManager();
$postManager->addPost($post1);
$postManager->addPost($post2);

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
                $body = $post->getContent();
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