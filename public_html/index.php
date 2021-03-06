<?php
require '../bootloader.php';

use App\App;

$createForm = new \App\Participants\Views\CreateForm();
$updateForm = new \App\Participants\Views\UpdateForm();
$navigation = new \App\Views\Navigation();
$footer = new \App\Views\Footer();

//if (!App::$session->userLoggedIn()) {
//    header('Location: /login.php');
//}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    <div class="bg_img"></div>
    <section class="wrapper nav-color">
        <div class="block">
            <h1></h1>
            <?php print $createForm->render(); ?>
        </div>
        <div class="block">
            <div id="person-table">
                <table>
                    <thead>
                    <tr>
                        <!--                                    <th>Nr.</th>-->
                        <th>Paslaugos Nuotrauka</th>
                        <th>Paslauga</th>
                        <th>Paslaugos Aprašymas</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Rows Are Dynamically Populated -->
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <div>
        <iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.2196022783774!2d25.335696616110763!3d54.72335198029067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96e7d814e149%3A0xdd7887e198efd4c7!2sSaul%C4%97tekio%20al.%2015%2C%20Vilnius%2010221!5e0!3m2!1sen!2slt!4v1581657421446!5m2!1sen!2slt" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>

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

<script defer src="media/js/app.js"></script>
</body>
</html>