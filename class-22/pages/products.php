<?php require_once('header.php');?>
    <section class='mt-5'>
        <div class="container">
            <div class="row">
                <?php foreach($products as $product){ ?>
                    <div class="col-md-3 col-sm-6 mb-5">
                    <div class="card">
                        <img src="asset/images/<?php echo $product['image']; ?>" alt="" class='img-fluid'>
                        <div class="card-body">
                            <h5 calss='card-title'><?php echo $product['name']; ?></h5>
                            <p calss='card-text text-bold'><?php echo $product['price']; ?> BDT</p>
                            <hr>
                            <a href="action.php?page=details&&id=<?php echo $product['id']; ?>" class="btn btn-primary w-100">Details</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php require_once('footer.php');?>