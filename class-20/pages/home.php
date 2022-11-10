<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_name; ?></title>
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="stylesheet" href="asset/style.css">
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h1><?php echo $page_name; ?></h1>
                    <div class="card border-info">
                        <div class="card-header">
                            <h3>All Student Info</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-bordered table-striped">
                                <tr align='center'>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                                <?php foreach($students as $value1){ ?>
                                <tr align='center'>
                                    <?php foreach($value1 as $value2){  ?>
                                        <?php if(is_array($value2)){ ?>
                                            <td> <?php foreach($value2 as $value3){ echo $value3.', '; } ?></td>
                                         <?php }else{ ?>
                                            <td><?php echo $value2; ?></td>
                                        <?php } ?>
                                    <?php }  ?>
                                </tr>
                                <?php }  ?>     
                            </table>

                            <table class="table table-hover table-bordered table-striped">
                                <tr align='center'>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                                     <td>Id</td>  
                                     <td>Name</td>  
                                     <td>Email</td>  
                                     <td>Phone</td>  
                                </tr>
                                  
                            </table>

                            <?php 
                            /* echo '<pre>';
                            var_dump($students); */
                             ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>