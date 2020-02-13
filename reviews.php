<?php
require '../bootloader.php';

use App\App;

$createForm = new \App\Reviews\Views\CreateForm();
$updateForm = new \App\Reviews\Views\UpdateForm();
$navigation = new \App\Views\Navigation();
$footer = new \App\Views\Footer();

if (!App::$session->userLoggedIn()) {
    header('Location: /login.php');
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    <link rel="stylesheet" href="media/css/normalize.css">
    <link rel="stylesheet" href="media/css/milligram.min.css">
    <link rel="stylesheet" href="media/css/style.css">
    <link rel="shortcut icon" href="taxi.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
</head>
<body>
<header>
    <?php print $navigation->render(); ?>
</header>

<main>
    <section class="wrapper">
        <?php if (App::$session->userLoggedIn()): ?>
            <div class="block" id="review-form">
                <h1>Feedback:</h1>
                <?php print $createForm->render(); ?>
            </div>
        <?php endif; ?>
        <div class="review-block">
            <div id="person-table">
                <table class="">
                    <thead>

                    </thead>
                    <tbody>
                    <!-- Rows Are Dynamically Populated -->
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Update Modal -->
    <div id="update-modal" class="modal">
        <div class="wrapper">
            <span class="close">&times;</span>
            <?php print $updateForm->render(); ?>
        </div>
    </div>
</main>

<!-- Footer -->
<footer>
    <?php print $footer->render(); ?>
</footer>

<script defer src="media/js/reviews.js"></script>
</body>
</html>