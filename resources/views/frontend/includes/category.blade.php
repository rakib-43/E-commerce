<section class="htc__category__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">T-Shirt Gallary</h2>
                    <p>But I must explain to you how all this mistaken idea</p>
                </div>
            </div>
        </div>
        <div class="htc__product__container">
            <div class="row">
                <div class="product__list clearfix mt--30">
                  
                    @foreach($product as $product)
                    @if($product->cat_id==1)
                    @if($product->status==1)
                    @if($product->qnt>0)
                    <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12" id="Clothes">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="{{ Route('product_view',$product->id) }}">
                                    <img src="{{ asset('backend/product_image/'.$product->image) }}" alt="product images">
                                </a>
                            </div>
                            <div class="fr__hover__info">
                                <ul class="product__action">
                                    <li><a href="#"><i class="icon-heart icons"></i></a></li>

                                    <li><button class="addcart{{ $product->id }}" value="{{ $product->id }}"><i class="icon-handbag icons"></i></button></li>
                                    <li><button class="wishlist{{ $product->id }}" value="{{ $product->id }}"><i class="icon-shuffle icons"></i></button></li>
                                </ul>
                            </div>
                            <div class="fr__product__inner">
                                <h4><a href="{{ Route('product_view',$product->id) }}">{{ $product->name  }}</a></h4>
                                <ul class="fr__pro__prize">
                                    <li class="old__prize">{{ $product->price  }}</li>
                                    <li>$25.9</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endif
                    @else

                    @endif
                    @endforeach
                    <!-- Start Single Category -->

                    <!-- End Single Category -->
                </div>
            </div>
        </div>
    </div>
</section>

