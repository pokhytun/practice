@extends('base')

@section('title', 'Catalog')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="left-sidebar">
                <h2>Category</h2>
                <div class="panel-group category-products" id="accordian"><!--category-productsr-->

                    @foreach ($categories as $category)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="{{ route('products.index' , ["category_id" => $category->id])}}" @if(isset($_GET['category_id'])) @if($_GET['category_id'] == $category->id) class="filter__link_active" @endif @endif>
                                        {{$category->title}}
                                    </a>
                                </h4>
                            </div>
                        </div>
                    @endforeach

                </div><!--/category-productsr-->

                <div class="brands_products"><!--brands_products-->
                    <h2>Brands</h2>
                    <div class="brands-name">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
                            <li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                            <li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
                            <li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
                            <li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
                            <li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
                            <li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                        </ul>
                    </div>
                </div><!--/brands_products-->

            </div>
        </div>

        <div class="col-sm-9 padding-right">
            <div class="features_items"><!--features_items-->
                <h2 class="title text-center">Features Items</h2>

                @foreach ($products as $product)
                    @include('includes.product-card')
                @endforeach


            </div><!--features_items-->
            <ul class="pagination">
                {{$products->withQueryString()->links('pagination::bootstrap-4')}}
            </ul>
        </div>
    </div>
</div>

@endsection
