<?php require_once('header.php');?>
   
    <section class='mt-5'>
        <div class="container">
            <div class="row">
               
                            <div class="col-md-3 mb-5">
                                <div class="card">
                                    <img src="asset/images/<?php echo $products['image']; ?>" alt="" class='img-fluid'>
                                    <div class="card-body">
                                        <h5 calss='card-title'><?php echo $products['name']; ?></h5>
                                        <p calss='card-text'><?php echo $products['price']; ?> BDT</p>
                                        <hr>
                                        <a href="action.php?page=details&&id=<?php echo $products['id']; ?>" class="btn btn-primary w-100">Details</a>
                                    </div>
                                </div>
                            </div>
                
            </div>
        </div>
    </section>
   
   

    <?php require_once('footer.php');?>