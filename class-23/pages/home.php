<?php require_once('header.php');?>
    <section class='mt-5'>
        <div class="container">
            <div class="row">
                
                <div class="col-md-3 mb-5">
                    <div class="card border-info">
                        <div class="card-body">
                            <h5 calss='card-title'><?php echo $dashboard_products; ?></h5>
                            <p calss='card-text'>Products</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-5">
                    <div class="card border-success">
                        <div class="card-body">
                            <h5 calss='card-title'><?php echo $dashboard_brands;?></h5>
                            <p calss='card-text'>Brands</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-5">
                    <div class="card border-warning">
                        <div class="card-body">
                            <h5 calss='card-title'><?php echo $dashboard_categories;?></h5>
                            <p calss='card-text'>Categories</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-5">
                    <div class="card border-danger">
                        <div class="card-body">
                            <h5 calss='card-title'><?php echo rand(300,400);?></h5>
                            <p calss='card-text'>Customers</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!--s-->
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Sales Report</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group me-2">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                <span data-feather="calendar" class="align-text-bottom"></span>
                                This week
                            </button>
                        </div>
                    </div>

                    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                    <!--e-->
                </div>
                <div class="col-md-6 table-responsive">
                 <h1 class="h2">New Products</h1>
                    <table class="table table-bordered table-hover table-striped">
                        <tr class='table-mute'>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Price</th>
                        </tr>
                        <?php foreach($products as $index=>$product){ 
                            /**
                             * Product Display Limitaion
                             */
                            if($index<4){ ?>
                        <tr>
                            <td><img src="asset/images/<?php echo $product['image']; ?>" width='50' alt="" class='img-fluid rounded-circle'></td>
                            <td><?php echo $product['name']; ?></td>
                            <td><?php echo $product['brandName']; ?></td>
                            <td><?php echo $product['categoryName']; ?></td>
                            <td><?php echo $product['description']; ?></td>
                            <td><?php echo $product['price']; ?></td>
                        </tr>
                        <?php } } ?>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <?php 
    //echo '<pre>'; print_r($products);
    require_once('footer.php');?>