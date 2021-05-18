<!-- Open Content -->
<?php
if (isset($data)) {
    $abc = json_decode($data['sanpham']);
    foreach ($abc as $row) : ?>
        <section class="bg-light">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-lg-5 mt-5">
                        <div class="card mb-3">
                            <img class="card-img img-fluid" src="<?php echo $row->anhSP; ?>" alt="Card image cap"
                                 id="product-detail">
                        </div>
                        <div class="row">
                            <!--Start Controls-->
                            <div class="col-1 align-self-center">
                                <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                    <i class="text-dark fas fa-chevron-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </div>
                            <!--End Controls-->
                            <!--Start Carousel Wrapper-->
                            <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item"
                                 data-bs-ride="carousel">
                                <!--Start Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="<?php echo $row->anhSP ?>"
                                                         alt="Product Image 1">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="<?php echo $row->anhSP ?>"
                                                         alt="Product Image 2">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="<?php echo $row->anhSP ?>"
                                                         alt="Product Image 3">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="<?php echo $row->anhSP ?>"
                                                         alt="Product Image 4">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="<?php echo $row->anhSP ?>"
                                                         alt="Product Image 5">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="<?php echo $row->anhSP ?>"
                                                         alt="Product Image 6">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.Second slide-->

                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="<?php echo $row->anhSP ?>"
                                                         alt="Product Image 7">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="<?php echo $row->anhSP ?>"
                                                         alt="Product Image 8">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="<?php echo $row->anhSP ?>"
                                                         alt="Product Image 9">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.Third slide-->
                                </div>
                                <!--End Slides-->
                            </div>
                            <!--End Carousel Wrapper-->
                            <!--Start Controls-->
                            <div class="col-1 align-self-center">
                                <a href="#multi-item-example" role="button" data-bs-slide="next">
                                    <i class="text-dark fas fa-chevron-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!--End Controls-->
                        </div>
                    </div>
                    <!-- col end -->
                    <div class="col-lg-7 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="h2"><?php echo $row->tenSP ?></h1>
                                <p class="h3 py-2"><?php echo $row->giaSP ?></p>
                                <p class="py-2">
                                    <?php
                                    if (isset($row->luotThich)) {
                                        switch ($row->luotThich) {
                                            case "1":
                                                echo '<i class="text-warning fa fa-star"></i>
                                                               <i class="text-muted fa fa-star"></i>
                                                               <i class="text-muted fa fa-star"></i>
                                                               <i class="text-muted fa fa-star"></i>
                                                               <i class="text-muted fa fa-star"></i>
                                                                ';
                                                break;

                                            case "2":
                                                echo '<i class="text-warning fa fa-star"></i>
                                                              <i class="text-warning fa fa-star"></i>
                                                              <i class="text-muted fa fa-star"></i>
                                                              <i class="text-muted fa fa-star"></i>
                                                              <i class="text-muted fa fa-star"></i>
                                                              ';
                                                break;

                                            case "3":
                                                echo '<i class="text-warning fa fa-star"></i>
                                                               <i class="text-warning fa fa-star"></i>
                                                               <i class="text-warning fa fa-star"></i>
                                                               <i class="text-muted fa fa-star"></i>
                                                               <i class="text-muted fa fa-star"></i>
                                                               ';
                                                break;

                                            case "4":
                                                echo '<i class="text-warning fa fa-star"></i>
                                                              <i class="text-warning fa fa-star"></i>
                                                              <i class="text-warning fa fa-star"></i>
                                                              <i class="text-warning fa fa-star"></i>
                                                              <i class="text-muted fa fa-star"></i>
                                                              ';
                                                break;
                                            case "5":
                                                echo '<i class="text-warning fa fa-star"></i>
                                                              <i class="text-warning fa fa-star"></i>
                                                              <i class="text-warning fa fa-star"></i>
                                                              <i class="text-warning fa fa-star"></i>
                                                              <i class="text-warning fa fa-star"></i>
                                                              ';
                                                break;
                                        }
                                    }
                                    ?>
                                    <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                                </p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <h6>Brand:</h6>
                                    </li>
                                    <li class="list-inline-item">
                                        <p class="text-muted"><strong>Easy Wear</strong></p>
                                    </li>
                                </ul>

                                <h6>Description:</h6>
                                <p><?php echo $row->mota ?><a class="btn btn-link" data-bs-toggle="collapse"
                                                              href="#collapseExample" role="button"
                                                              aria-expanded="false" aria-controls="collapseExample">Xem
                                        Thêm</a></p>

                                <div class="collapse" id="collapseExample"><p
                                            class="card card-body"> <?php echo $row->gioiThieu; ?></p></div>

                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <h6>Avaliable Color :</h6>
                                    </li>
                                    <li class="list-inline-item">
                                        <p class="text-muted"><strong><?php echo strtoupper($row->mau) ?></strong></p>
                                    </li>
                                </ul>

                                <form method="post" action="http://localhost/mvc_shop/chitiet/addSP/"  id="cart">
                                    <input type="hidden" name="product-title" value="<?php echo $row->id ?>">
                                    <div class="row">
                                        <div class="col-auto">
                                            <ul class="list-inline pb-3">
                                                <li class="list-inline-item">Size :
                                                    <input type="hidden" name="product-size" id="product-size"
                                                           value="S">
                                                </li>
                                                <li class="list-inline-item"><span
                                                            class="btn btn-success btn-size">S</span></li>
                                                <li class="list-inline-item"><span
                                                            class="btn btn-success btn-size">M</span></li>
                                                <li class="list-inline-item"><span
                                                            class="btn btn-success btn-size">L</span></li>
                                                <li class="list-inline-item"><span
                                                            class="btn btn-success btn-size">XL</span></li>
                                            </ul>
                                        </div>
                                        <div class="col-auto">
                                            <ul class="list-inline pb-3">
                                                <li class="list-inline-item text-right">
                                                    Quantity
                                                    <input type="hidden" name="product-quanity" id="product-quanity"
                                                           value="1">
                                                </li>
                                                <li class="list-inline-item"><span class="btn btn-success"
                                                                                   id="btn-minus">-</span></li>
                                                <li class="list-inline-item"><span class="badge bg-secondary"
                                                                                   id="var-value">1</span></li>
                                                <li class="list-inline-item"><span class="btn btn-success"
                                                                                   id="btn-plus">+</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col d-grid">
                                            <button type="submit" class="btn btn-success btn-lg" name="submit"
                                                    value="buy">Buy
                                            </button>
                                        </div>
                                        <div class="col d-grid">
                                            <button type="submit" class="btn btn-success btn-lg" name="addCart"
                                                    value="submit">Add To Cart
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    endforeach;
}
?>
<!-- Close Content -->

<!-- Start Article -->

<!-- End Article -->