<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Add</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/alladd.css" media="screen">
</head>
<body>
<!--=========================== menu section start ===========================-->
<?php
include 'menuBar.php';
?>
<!--=========================== menu section end ===========================-->



<!--=========================== header section start ===========================-->


<section id="allProduct" class="bg-dark text-light py-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>All Add</h2>
                <p>Home <i class='fa fa-angle-right'></i> Classified Listings</p>
            </div>
        </div>
    </div>
</section>

<section id="search-section">
    <div class="container bg-light p-3 text-center">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <input type="text" class="form-control" placeholder="Select Location">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <input type="text" class="form-control" placeholder="Select Location">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <input type="text" class="form-control" placeholder="Select Location">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <input type="submit" class="btn btn-warning">
            </div>
        </div>
    </div>
</section>

<!--=========================== header section end ===========================-->


<!--=========================== product list section start ===========================-->


<!-- <section id="productlist" class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mt-2">
                <div class="bg-light p-3">
                    <h4>Type</h4>
                    <hr>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Buy
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Sell
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 bg-light p-3  mt-2">
                <div class="row">
                    <div class="col-lg-3">
                    <img src="img/product/stocklot Bay (1).jpg" class="" alt="" height="200" width="100%">
                    </div>
                    <div class="col-lg-6">
                        <p class="text-lead">Boy</p>
                        <h6 class="text-dark">Full Sleeve Boys Solid T-shirt Boys Solid T-shirt</h6>
                        <h6 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi reprehenderit architecto, consequatur voluptatem dolore deleniti?</h6>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-lead">Sell</p>
                        <p class="text-lead"><i class="fa fa-eye" class="p-2"></i> 5 Views</p>
                        <h4 class="card-title text-danger">$5.40/- (Negotiable)</4>
                        <button type="button" class="btn btn-warning mt-2">Details</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="bg-light p-3">
                    <h4>Category</h4>
                    <hr>
                    <a href="#">All Category</a>
                    <a href="#">Boy (250)</a>
                    <a href="#">Girl (180)</a>
                    <a href="#">Infant (120)</a>
                    <a href="#">Men (400)</a>
                    <a href="#">Women (350)</a>
                </div>
            </div>
            <div class="col-lg-9 bg-light p-3  mt-2">
                <div class="row">
                    <div class="col-lg-3">
                    <img src="img/product/stocklot Bay (4).jpg" class="" alt="" height="200" width="100%">
                    </div>
                    <div class="col-lg-6">
                        <p class="text-lead">Boy</p>
                        <h6 class="text-dark">Full Sleeve Boys Solid T-shirt Boys Solid T-shirt</h6>
                        <h6 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi reprehenderit architecto, consequatur voluptatem dolore deleniti?</h6>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-lead">Sell</p>
                        <p class="text-lead"><i class="fa fa-eye" class="p-2"></i> 5 Views</p>
                        <h4 class="card-title text-danger">$5.40/- (Negotiable)</4>
                        <button type="button" class="btn btn-warning mt-2">Details</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 mt-2">
                <div class="bg-light p-3">
                    <h4>Type</h4>
                    <hr>
                    <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 bg-light p-3 mt-2">
                <div class="row">
                    <div class="col-lg-3">
                    <img src="img/product/stocklot Bay (2).jpg" class="" alt="" height="200" width="100%">
                    </div>
                    <div class="col-lg-6">
                        <p class="text-lead">Boy</p>
                        <h6 class="text-dark">Full Sleeve Boys Solid T-shirt Boys Solid T-shirt</h6>
                        <h6 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi reprehenderit architecto, consequatur voluptatem dolore deleniti?</h6>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-lead">Sell</p>
                        <p class="text-lead"><i class="fa fa-eye" class="p-2"></i> 5 Views</p>
                        <h4 class="card-title text-danger">$5.40/- (Negotiable)</4>
                        <button type="button" class="btn btn-warning mt-2">Details</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 mt-2">
                <div class="bg-light p-3">
                    <h4>Location</h4>
                    <hr>
                    <div><a href="#">All Location</a></div>
                    <div><a href="#">Dhaka</a></div>
                    <div><a href="">Rajshahi</a></div>
                    <div><a href="">Khulna</a></div>
                    <div><a href="">Sylhet</a></div>
                    <div><a href="">Chetagong</a></div>
                    <div><a href="">Barisal</a></div>
                    <div><a href="">Rangpur</a></div>
                </div>
            </div>
            <div class="col-lg-9 bg-light p-3  mt-2">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="img/product/stocklot Bay (1).jpg" class="" alt="" height="200" width="100%">
                    </div>
                    <div class="col-lg-6">
                        <p class="text-lead">Boy</p>
                        <h6 class="text-dark">Full Sleeve Boys Solid T-shirt Boys Solid T-shirt</h6>
                        <h6 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi reprehenderit architecto, consequatur voluptatem dolore deleniti?</h6>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-lead">Sell</p>
                        <p class="text-lead"><i class="fa fa-eye" class="p-2"></i> 5 Views</p>
                        <h4 class="card-title text-danger">$5.40/- (Negotiable)</4>
                        <button type="button" class="btn btn-warning mt-2">Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section id="productlist">
    <div class="container">
        <div class="row m-3">
            <div class="col-lg-3">
                <div class="row mt-2">
                    <div class="bg-light p-3">
                        <h4>Type</h4>
                        <hr>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Buy
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Sell
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="bg-light p-3">
                        <h4>Category</h4>
                        <hr>
                        <div><a href="#">Men</a></div>
                        <div><a href="#">Women</a></div>
                        <div><a href="">Boy</a></div>
                        <div><a href="">Girl</a></div>
                        <div><a href="">Infant</a></div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="bg-light p-3">
                        <h4>Rating</h4>
                        <hr>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="bg-light p-3">
                        <h4>Location</h4>
                        <hr>
                        <div><a href="#">All Location</a></div>
                        <div><a href="#">Dhaka</a></div>
                        <div><a href="">Rajshahi</a></div>
                        <div><a href="">Khulna</a></div>
                        <div><a href="">Sylhet</a></div>
                        <div><a href="">Chetagong</a></div>
                        <div><a href="">Barisal</a></div>
                        <div><a href="">Rangpur</a></div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-9">
                <div class="row m-2 p-2 bg-light">
                    <div class="col-lg-3">
                    <img src="img/product/stocklot Bay (1).jpg" class="" alt="" height="200" width="100%">
                    </div>
                    <div class="col-lg-6">
                        <p class="text-lead">Boy</p>
                        <h6 class="text-dark">Full Sleeve Boys Solid T-shirt Boys Solid T-shirt</h6>
                        <h6 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi reprehenderit architecto, consequatur voluptatem dolore deleniti?</h6>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-lead">Sell</p>
                        <p class="text-lead"><i class="fa fa-eye" class="p-2"></i> 5 Views</p>
                        <h4 class="card-title text-danger">$5.40/- (Negotiable)</4>
                        <button type="button" class="btn btn-warning mt-2">Details</button>
                    </div>
                </div>
                <div class="row m-2 p-2 bg-light">
                    <div class="col-lg-3">
                        <img src="img/product/stocklot Bay (4).jpg" class="" alt="" height="200" width="100%">
                    </div>
                    <div class="col-lg-6">
                        <p class="text-lead">Boy</p>
                        <h6 class="text-dark">Full Sleeve Boys Solid T-shirt Boys Solid T-shirt</h6>
                        <h6 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi reprehenderit architecto, consequatur voluptatem dolore deleniti?</h6>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-lead">Sell</p>
                        <p class="text-lead"><i class="fa fa-eye" class="p-2"></i> 5 Views</p>
                        <h4 class="card-title text-danger">$5.40/- (Negotiable)</4>
                        <button type="button" class="btn btn-warning mt-2">Details</button>
                    </div>
                </div>
                <div class="row m-2 p-2 bg-light">
                    <div class="col-lg-3">
                        <img src="img/product/stocklot Bay (2).jpg" class="" alt="" height="200" width="100%">
                    </div>
                    <div class="col-lg-6">
                        <p class="text-lead">Boy</p>
                        <h6 class="text-dark">Full Sleeve Boys Solid T-shirt Boys Solid T-shirt</h6>
                        <h6 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi reprehenderit architecto, consequatur voluptatem dolore deleniti?</h6>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-lead">Sell</p>
                        <p class="text-lead"><i class="fa fa-eye" class="p-2"></i> 5 Views</p>
                        <h4 class="card-title text-danger">$5.40/- (Negotiable)</4>
                        <button type="button" class="btn btn-warning mt-2">Details</button>
                    </div>
                </div>
                <div class="row m-2 p-2 bg-light">
                    <div class="col-lg-3">
                        <img src="img/product/stocklot Bay (1).jpg" class="" alt="" height="200" width="100%">
                    </div>
                    <div class="col-lg-6">
                        <p class="text-lead">Boy</p>
                        <h6 class="text-dark">Full Sleeve Boys Solid T-shirt Boys Solid T-shirt</h6>
                        <h6 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi reprehenderit architecto, consequatur voluptatem dolore deleniti?</h6>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-lead">Sell</p>
                        <p class="text-lead"><i class="fa fa-eye" class="p-2"></i> 5 Views</p>
                        <h4 class="card-title text-danger">$5.40/- (Negotiable)</4>
                        <button type="button" class="btn btn-warning mt-2">Details</button>
                    </div>
                </div>
                <div class="row m-2 p-2 bg-light">
                    <div class="col-lg-3">
                        <img src="img/product/stocklot Bay (5).jpg" class="" alt="" height="200" width="100%">
                    </div>
                    <div class="col-lg-6">
                        <p class="text-lead">Boy</p>
                        <h6 class="text-dark">Full Sleeve Boys Solid T-shirt Boys Solid T-shirt</h6>
                        <h6 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi reprehenderit architecto, consequatur voluptatem dolore deleniti?</h6>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-lead">Sell</p>
                        <p class="text-lead"><i class="fa fa-eye" class="p-2"></i> 5 Views</p>
                        <h4 class="card-title text-danger">$5.40/- (Negotiable)</4>
                        <button type="button" class="btn btn-warning mt-2">Details</button>
                    </div>
                </div>
                <div class="row m-2 p-2 bg-light">
                    <div class="col-lg-3">
                        <img src="img/product/stocklot Bay (1).jpg" class="" alt="" height="200" width="100%">
                    </div>
                    <div class="col-lg-6">
                        <p class="text-lead">Boy</p>
                        <h6 class="text-dark">Full Sleeve Boys Solid T-shirt Boys Solid T-shirt</h6>
                        <h6 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi reprehenderit architecto, consequatur voluptatem dolore deleniti?</h6>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-lead">Sell</p>
                        <p class="text-lead"><i class="fa fa-eye" class="p-2"></i> 5 Views</p>
                        <h4 class="card-title text-danger">$5.40/- (Negotiable)</4>
                        <button type="button" class="btn btn-warning mt-2">Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=========================== product list section end ===========================-->


<section id="pagination">
    <div class="container">
        <div class="row">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>


<!--=========================== footer section start ===========================-->
<?php
include 'footer.php';
?>
<!--=========================== footer section end ===========================-->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>