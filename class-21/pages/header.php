<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_name; ?></title>
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
               <div class="container">     
                        <a href="" class='navbar-logo'><img src="asset/images/logo.png" alt="" width='100'></a>
                        <ul class="navbar-nav">
                            <li><a href="" class='nav-link'>Home</a></li>
                            <li><a href="" class='nav-link'>About</a></li>
                            <li><a href="" class='nav-link'>Products</a></li>
                            <li class="dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-bs-toggle='dropdown'>Product Category</a>
                                <ul class="dropdown-menu">
                                    <?php foreach($categories as $category){ ?>
                                        <li><a href="" class='dropdown-item'><?php echo $category['name'];?></a></li>
                                    <?php }?>
                                </ul>
                            </li>
                            <li><a href="" class='nav-link'>Contact</a></li>
                        </ul>
                </div>
                 
        </nav>
    </section>