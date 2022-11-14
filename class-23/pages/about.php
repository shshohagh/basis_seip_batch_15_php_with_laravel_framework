<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_name; ?></title>
</head>
<body>
<?php require_once('pages/header.php'); ?>
    <section class='mt-5'>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php echo $page_name; ?></h1>
                </div>
            </div>
        </div>
    </section>
    <?php require_once('pages/footer.php'); ?>
</body>
</html>