<?php require_once('header.php');?>
    <section class='mt-5 d-none'>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-info">
                        <div class="card-header">
                            <h3 class='p-5'>All Student Info</h3>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover table-bordered table-striped">
                                <tr align='center'>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                                <?php foreach($students as $value1){ ?>
                                <tr align='center'>
                                    <td><?php echo $value1['id']?></td>
                                    <td><?php echo $value1['name']?></td>
                                    <td><?php echo $value1['email']?></td>
                                    <td>
                                        <?php
                                        foreach($value1 as $phones){
                                            if(is_array($phones)){
                                            echo $phones['phone-1'].', '.$phones['phone-2'];
                                            }
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php }  ?>     
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
   
    <section class='mt-5'>
        <div class="container">
            <div class="row">
                <?php foreach($products as $product){ ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="asset/images/<?php echo $product['image']; ?>" alt="" class='img-fluid'>
                        <div class="card-body">
                            <h5 calss='card-title'><?php echo $product['name']; ?></h5>
                            <p calss='card-text'><?php echo $product['price']; ?></p>
                            <hr>
                            <a href="#" class="btn btn-primary w-100">Details</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
   
   

    <?php require_once('footer.php');?>