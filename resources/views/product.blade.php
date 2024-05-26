{{-- @extends('main')
@section('content')
<section class="product-detail p-to-top">
   <form action="/cart/add" method="post">
    @csrf
    <div class="container">
        <div class="row-flex row-flex-product-detail">
          <p class="heading-text-product">San Pham Moi >></p> <p>{{ $product_detail -> name }}</p>
        </div>
        <div class="row-gird">
          <div class="product-detail-left">
            <img class="main-image" src="{{ $product_detail -> image }}" alt="" />
            <div class="product-images-items">
              @php
                  $product_images = explode('*', $product_detail -> images);
              @endphp
              @foreach ($product_images as $product_image)
              <img src="{{ asset($product_image) }}" alt="" />
              @endforeach
            </div>
          </div>
          <div class="product-detail-right">
            <div class="product-detail-right-info">
              <h1>{{ $product_detail -> material }}</h1>
              <span>{!! $product_detail -> discription !!}</span>
              <div class="hot-product-item-price">
                <p>{{ number_format($product_detail -> price_nomal )}}</p>
              </div>
            </div>
            <div class="product-detail-right-des">
              <p style="font-weight: bold;margin-bottom: 10px;padding-left: 10px;">
                Dac Diem Noi Bat
              </p>
              <ul style="padding-left: 10px">
                <li>100 chat lieu gia</li>
                <li>100 chat lieu gia</li>
                <li>100 chat lieu gia</li>
                <li>100 chat lieu gia</li>
                <li>100 chat lieu gia</li>
              </ul>
            </div>
            <div class="product-detail-right-quantity">
              <h2>So Luong:1</h2>
              <div class="product-detail-right-quantity-input">
                <img class="subtraction" src="{{asset('home/asset/images/plus.png')}}" alt="" />
                <input class="value-input" type="number" name="product_quantity" value="1" readonly />
                <input type="hidden" value="{{ $product_detail -> id }}" name="product_id">
                <img class="flus" src="{{asset('home/asset/images/plus.png')}}" alt="" />
              </div>
            </div>
            <div class="product-detail-right-addcart">
              <button type="submit">Thêm vào giỏ hàng</button>
            </div>
          </div>
        </div>
        <div class="row-grid row-gird-oneitem" style="display: block">
          <div class="product-detail-content">
            <h3>Chi Tiet San Pham</h3>
            <p>{!!$product_detail -> content!!}</p>
          </div>
        </div>
      </div>
   </form>
  </section>
@endsection --}}

@extends('main')
@section('content')
<section class="product-detail cach-top">
   <form action="/cart/add" method="post">
    @csrf
    <div class="container">
        <div class="row-flex row-grid-product-detail">
          <p class="heading-text-product">Sản Phẩm Mới</p><i class="ri-arrow-right-line"></i>
          <p>{{ $product_detail->name }}</p>
        </div>
        <div class="row-grid">
            <div class="product-detail-left">
                <img class="main-img" src="{{ $product_detail->image }}" alt="{{ $product_detail->name }}" />
                <div class="product-detail-items">
                    @php
                        $product_images = explode('*', $product_detail->images);
                    @endphp
                    @foreach ($product_images as $product_image)
                    <img src="{{ asset($product_image) }}" alt="Product image" />
                    @endforeach
                </div>
            </div>

          <div class="product-detail-right">
            <div class="infor">
              <h2>{{ $product_detail->material }}</h2>
              <h3>Còn hàng</h3>
              <hr style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);"><br>
              <span>{!! $product_detail->description !!}</span>
              <div class="hot-product-item-price">
                <p>{{ number_format($product_detail->price_nomal) }}<sup>đ</sup> <span>{{ number_format($product_detail->price_nomal) }}<sup>đ</sup></span></p>
              </div>
            </div>
            <div class="des">
              <h2>Đặc điểm nổi bật</h2>
              <ul>
                <li>chất liệu 1000% cotton tự nhiên</li>
                <li>chất liệu 1000% cotton tự nhiên</li>
                <li>chất liệu 1000% cotton tự nhiên</li>
                <li>chất liệu 1000% cotton tự nhiên</li>
                <li>chất liệu 1000% cotton tự nhiên</li>
                <li>chất liệu 1000% cotton tự nhiên</li>
                <li>chất liệu 1000% cotton tự nhiên</li>
              </ul>
            </div>
            <div class="quantity">
              <h2>Số lượng</h2>
              <button class="subtraction" type="button">-</button>
              <input class="value-input" type="number" name="product_quantity" value="1" readonly />
              <input type="hidden" value="{{ $product_detail->id }}" name="product_id">
              <button class="flus" type="button">+</button>
            </div>
            <div class="addcar">
              <button class="main-btn" type="submit">Thêm vào giỏ hàng</button>
            </div>
          </div>
        </div>
        <div class="row-grid">
          <div class="product-detail-content">
            <p class="heading-text">Thông tin chi tiết</p>
            <p>{!! $product_detail->content !!}</p>
          </div>
          <img style="width: 60%;" src="{{asset('home/asset/images/size.jpg')}}" alt="Size chart">
        </div>
    </div>
   </form>
</section>
@endsection
