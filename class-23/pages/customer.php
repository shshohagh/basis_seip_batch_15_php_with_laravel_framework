<?php require_once('header.php');?>
    <section class="mt-5">
        <div class="container">
            <div class="row">
            <h6 class='card border-primary p-3 mb-4'><?php echo $page_name;?></h2>
                <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-hover table-striped">
                        <tr class='table-mute'>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Price</th>
                        </tr>
                        <?php foreach($products as $index=>$product){  ?>
                        <tr>
                            <td><img src="asset/images/<?php echo $product['image']; ?>" width='50' alt="" class='img-fluid rounded-circle'></td>
                            <td><?php echo $product['name']; ?></td>
                            <td><?php echo $product['brandName']; ?></td>
                            <td><?php echo $product['categoryName']; ?></td>
                            <td><?php echo $product['description']; ?></td>
                            <td><?php echo $product['price']; ?></td>
                        </tr>
                        <?php }  ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php require_once('footer.php');?>