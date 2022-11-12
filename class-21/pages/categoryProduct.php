<?php require_once('header.php');?>
   
    <section class='mt-5'>
        <div class="container">
            <div class="row">
                <?php foreach($products as $product){ 
                    if(isset($_GET['CategoryId'])){ 
                        if($_GET['CategoryId']==$product['category_id']){ ?>
                            <div class="col-md-3 mb-5">
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
                <?php } } } ?>
            </div>
        </div>
    </section>
   
   

    <?php require_once('footer.php');?>