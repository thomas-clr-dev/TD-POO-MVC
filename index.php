<?php ob_start();?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Accueil</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro alias quae adipisci praesentium nemo ea ipsa voluptatum quo inventore, saepe deserunt et cum pariatur rem, sunt quisquam consectetur. Totam, quibusdam!</p>
        </div>
    </div>
</div>

<?php
$title = 'Accueil - Site de Dev\'On-Web';
$content = ob_get_clean();
require_once 'template.php';