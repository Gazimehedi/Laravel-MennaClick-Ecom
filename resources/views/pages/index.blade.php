@extends('layouts.layout')
@section('content')
<main>
    <div class="container">
        <div class="row my-3">
            <div class="col-md-3">
                <div class="list-group">
                    <a class="list-group-item list-group-item-action bg-main text-white" aria-current="true">
                      Categories
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                    <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                    <a class="list-group-item list-group-item-action disabled">A disabled link item</a>
                  </div>
            </div>
            <div class="col-md-9">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" >
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active" style="height: 65vh">
                        <img style="width:100%;height:100%;" src="https://d3o0ecz6febi2h.cloudfront.net/banner/images/703dda9d-eed2-4ad4-bbff-8b592d9d4633.jpg" alt="">
                      </div>
                      <div class="carousel-item" style="height: 65vh">
                        <img style="width:100%;height:100%;" src="https://d3o0ecz6febi2h.cloudfront.net/banner/images/6347d318-32be-439b-af7a-f86774e8b8a4.jpg" alt="">
                      </div>
                      <div class="carousel-item" style="height: 65vh">
                        <img style="width:100%;height:100%;" src="https://d3o0ecz6febi2h.cloudfront.net/banner/images/321bde38-1447-417a-8913-faaa4cca442d.jpg" alt="">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
    </div>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row mb-2">
                <div class="col-md-12">
                    <h3>Featured Products</h3>
                </div>
            </div>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col-md-2">
              <div class="card  rounded-2">
                <img src="https://d3o0ecz6febi2h.cloudfront.net/product_variances/images/2021/sep/19/9/b9b5f99e-5052-450a-be7b-812a04caae47.lg.jpg" alt="">
                <hr class="px-1">
                <div class="card-body text-center">
                  <h3 class="h6">Span Oliva Extra Virgin Olive Oil 1ltr</h3>
                  <h3 class="h6 text-main">tk290.00/EA</h3>
                  <div class="d-grid gap-2 mt-4">
                    <button type="button" class="btn btn-outline-light bg-main">Add to cart</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="card  rounded-2">
                <img src="https://d3o0ecz6febi2h.cloudfront.net/product_variances/images/2021/sep/19/9/b9b5f99e-5052-450a-be7b-812a04caae47.lg.jpg" alt="">
                <hr class="px-1">
                <div class="card-body text-center">
                  <h3 class="h6">Span Oliva Extra Virgin Olive Oil 1ltr</h3>
                  <h3 class="h6 text-main">tk290.00/EA</h3>
                  <div class="d-grid gap-2 mt-4">
                    <button type="button" class="btn btn-outline-light bg-main">Add to cart</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="card  rounded-2">
                <img src="https://d3o0ecz6febi2h.cloudfront.net/product_variances/images/2021/sep/19/9/b9b5f99e-5052-450a-be7b-812a04caae47.lg.jpg" alt="">
                <hr class="px-1">
                <div class="card-body text-center">
                  <h3 class="h6">Span Oliva Extra Virgin Olive Oil 1ltr</h3>
                  <h3 class="h6 text-main">tk290.00/EA</h3>
                  <div class="d-grid gap-2 mt-4">
                    <button type="button" class="btn btn-outline-light bg-main">Add to cart</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="card  rounded-2">
                <img src="https://d3o0ecz6febi2h.cloudfront.net/product_variances/images/2021/sep/19/9/b9b5f99e-5052-450a-be7b-812a04caae47.lg.jpg" alt="">
                <hr class="px-1">
                <div class="card-body text-center">
                  <h3 class="h6">Span Oliva Extra Virgin Olive Oil 1ltr</h3>
                  <h3 class="h6 text-main">tk290.00/EA</h3>
                  <div class="d-grid gap-2 mt-4">
                    <button type="button" class="btn btn-outline-light bg-main">Add to cart</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="card  rounded-2">
                <img src="https://d3o0ecz6febi2h.cloudfront.net/product_variances/images/2021/sep/19/9/b9b5f99e-5052-450a-be7b-812a04caae47.lg.jpg" alt="">
                <hr class="px-1">
                <div class="card-body text-center">
                  <h3 class="h6">Span Oliva Extra Virgin Olive Oil 1ltr</h3>
                  <h3 class="h6 text-main">tk290.00/EA</h3>
                  <div class="d-grid gap-2 mt-4">
                    <button type="button" class="btn btn-outline-light bg-main">Add to cart</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="card  rounded-2">
                <img src="https://d3o0ecz6febi2h.cloudfront.net/product_variances/images/2021/sep/19/9/b9b5f99e-5052-450a-be7b-812a04caae47.lg.jpg" alt="">
                <hr class="px-1">
                <div class="card-body text-center">
                  <h3 class="h6">Span Oliva Extra Virgin Olive Oil 1ltr</h3>
                  <h3 class="h6 text-main">tk290.00/EA</h3>
                  <div class="d-grid gap-2 mt-4">
                    <button type="button" class="btn btn-outline-light bg-main">Add to cart</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="card  rounded-2">
                <img src="https://d3o0ecz6febi2h.cloudfront.net/product_variances/images/2021/sep/19/9/b9b5f99e-5052-450a-be7b-812a04caae47.lg.jpg" alt="">
                <hr class="px-1">
                <div class="card-body text-center">
                  <h3 class="h6">Span Oliva Extra Virgin Olive Oil 1ltr</h3>
                  <h3 class="h6 text-main">tk290.00/EA</h3>
                  <div class="d-grid gap-2 mt-4">
                    <button type="button" class="btn btn-outline-light bg-main">Add to cart</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="card  rounded-2">
                <img src="https://d3o0ecz6febi2h.cloudfront.net/product_variances/images/2021/sep/19/9/b9b5f99e-5052-450a-be7b-812a04caae47.lg.jpg" alt="">
                <hr class="px-1">
                <div class="card-body text-center">
                  <h3 class="h6">Span Oliva Extra Virgin Olive Oil 1ltr</h3>
                  <h3 class="h6 text-main">tk290.00/EA</h3>
                  <div class="d-grid gap-2 mt-4">
                    <button type="button" class="btn btn-outline-light bg-main">Add to cart</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="card  rounded-2">
                <img src="https://d3o0ecz6febi2h.cloudfront.net/product_variances/images/2021/sep/19/9/b9b5f99e-5052-450a-be7b-812a04caae47.lg.jpg" alt="">
                <hr class="px-1">
                <div class="card-body text-center">
                  <h3 class="h6">Span Oliva Extra Virgin Olive Oil 1ltr</h3>
                  <h3 class="h6 text-main">tk290.00/EA</h3>
                  <div class="d-grid gap-2 mt-4">
                    <button type="button" class="btn btn-outline-light bg-main">Add to cart</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
    </div>
</main>
@endsection
