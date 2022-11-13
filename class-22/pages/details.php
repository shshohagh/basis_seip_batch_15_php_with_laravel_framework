<?php require_once('header.php');?>

    <section class='mt-5'>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="card">
                        <img src="asset/images/<?php echo $products['image']; ?>" alt="" class='img-fluid'>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="card">
                        <div class="card-body">
                            <h5 calss='card-title'>Product Name: <?php echo $products['name']; ?></h5>
                            <p calss='card-text'>Price: <?php echo $products['price']; ?> BDT</p>
                            <hr>
                            <p calss='card-text'>Category: <?php echo $products['categoryName']; ?></p>
                            <p calss='card-text'>Description: <?php echo $products['description']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php 
/*     echo '<pre>';
    print_r($products); */
    require_once('footer.php');?>