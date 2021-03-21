<!DOCTYPE html>
<html lang="en">
<head>
    <title>FORM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div class="container is-max-desktop my-4">
    <div class="card is-radiusless">
        <?php
        $current_path = $_FILES['resume']['tmp_name'];
        $filename = $_FILES['resume']['name'];
        $new_path = dirname(__FILE__) . '/uploads/' . $filename;

        move_uploaded_file($current_path, $new_path);
        ?>
        <div class="card-image">
            <figure class="image is-2by1">
                <img src="uploads/<?php echo($filename)?>" alt=" ">
            </figure>
        </div>
        <div class="card-content">
            <div class="media">
                <div class="media-content">
                    <?php if (isset($_POST)){ $_POST['url'];} ?>
                    <a target="_blank" href="<?php print("https://" . $_POST['url']) ?>"><?php print($_POST['url']) ?></a>
                    <?php if (isset($_POST)) { print("<h1 class=\"title is-4 mt-2\">" . $_POST['title'] . "</h1>"); } ?>
                </div>
            </div>
            <div class="content">
                <?php if (isset($_POST)){ print($_POST['article']); } ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>