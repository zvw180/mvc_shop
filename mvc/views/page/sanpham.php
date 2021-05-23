<div class="container py-5">
    <div class="row">
        <div class="col-lg-3">
            <h1 class="h2 pb-4">Categories</h1>
            <ul class="list-unstyled templatemo-accordion">
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        Gender
                        <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                    <ul class="collapse show list-unstyled pl-3">
                        <li><a class="text-decoration-none" href="http://localhost/mvc_shop/sanpham/men/">Men</a></li>
                        <li><a class="text-decoration-none" href="http://localhost/mvc_shop/sanpham/women/">Women</a>
                        </li>
                    </ul>
                </li>
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        Sale
                        <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                    <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                        <li><a class="text-decoration-none" href="#">Sport</a></li>
                        <li><a class="text-decoration-none" href="#">Luxury</a></li>
                    </ul>
                </li>
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        Product
                        <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                    <ul id="collapseThree" class="collapse list-unstyled pl-3">
                        <li><a class="text-decoration-none" href="#">Bag</a></li>
                        <li><a class="text-decoration-none" href="#">Sweather</a></li>
                        <li><a class="text-decoration-none" href="#">Sunglass</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="col-lg-9">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-inline shop-top-menu pb-3 pt-1">
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none mr-3" href="http://localhost/mvc_shop/sanpham/">All</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none mr-3"
                               href="http://localhost/mvc_shop/sanpham/men/">Men's</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none"
                               href="http://localhost/mvc_shop/sanpham/women/">Women's</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 pb-4">
                    <div class="d-flex">
                        <label>
                            <select class="form-control">
                                <option>Featured</option>
                                <option>A to Z</option>
                                <option>Item</option>
                            </select>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                if (isset($data)) {
                    $abc = json_decode($data['sanpham']);
                    foreach ($abc as $row) : ?>
                        <div class="col-md-4 filter <?php echo $row->gioiTinh; ?>">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="<?php echo $row->anhSP ?>" alt="1">
                                </div>
                                <div class="card-body">
                                    <a href="http://localhost/mvc_shop/chitiet/<?php echo $row->idurl ?>/"
                                       class="h3 text-decoration-none"><?php echo $row->tenSP ?></a>
                                    <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                        <li><?php echo strtoupper($row->kichthuoc) ?></li>
                                        <li class="pt-2">
                                            <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                            <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                            <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                            <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                            <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled d-flex justify-content-center mb-1">
                                        <li>
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
                                        </li>
                                    </ul>
                                    <p class="text-center mb-0"><?php echo $row->giaSP ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach;
                }
                ?>
            </div>
            <div class="row">
                <ul class="pagination pagination-lg justify-content-end">
                    <?php
                    $dd=basename($_SERVER['QUERY_STRING']);
                    if ($dd ==="url=sanpham" || $dd ==="women"|| $dd ==="men" ||$dd === "0" ) {
                        echo ' <li class="page-item">
                <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark"
                   href="http://localhost/mvc_shop/sanpham/page/1/"><i
                            class="fas fa-chevron-circle-left"></i></a>
            </li>';
                        echo ' <li class="page-item">
                <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark"
                   href="http://localhost/mvc_shop/sanpham/page/2/"><i
                            class="fas fa-chevron-circle-right"></i></a>
            </li>';
                    }elseif(is_int($dd)){
                        echo ' <li class="page-item">
                <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark"
                   href="http://localhost/mvc_shop/sanpham/page/'.$dd -1 .'/"><i
                            class="fas fa-chevron-circle-left"></i></a>
            </li>';
                        echo ' <li class="page-item">
                <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark"
                   href="http://localhost/mvc_shop/sanpham/page/'.$dd + 1 .'/"><i
                            class="fas fa-chevron-circle-right"></i></a>
            </li>';
                    }else{
                        echo ' <li class="page-item">
                <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark"
                   href="http://localhost/mvc_shop/sanpham/page/1/"><i
                            class="fas fa-chevron-circle-left"></i></a>
            </li>';
                        echo ' <li class="page-item">
                <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark"
                   href="http://localhost/mvc_shop/sanpham/page/2/"><i
                            class="fas fa-chevron-circle-right"></i></a>
            </li>';
                    }

                    ?>

                </ul>
            </div>
        </div>

    </div>
</div>
