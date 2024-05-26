{{-- @extends('main')
@section('content')

<section class="order-confirm p-to-top">
    <div class="container">
      <div class="row-flex row-flex-product-detail">
        <p>
          Xác Nhận Đơn Hàng:
          <span style="font-weight: bolder">Thành Công</span>
        </p>
      </div>
      <div class="row-flex">
        <div class="order-confirm-content">
          <p>
            Chuẩn Bị Tiền Mà Thanh Toán Đi<br />
            Vui Lòng Check Ví Tiền
          </p>
          <button style="background-color: black; color: white">
            Tiếp Tục Mua Hàng
          </button>
        </div>
      </div>
    </div>
</section>

@endsection --}}


@extends('main')
@section('content')
<section class="order-confim cach-top">
    <div class="container">
        <p class="heading-text">Xác nhận đơn hàng: <span style="font-weight: bold; font-size: large;">Thành Công</span> </p>
        <div class="order-confirm-request">
            <p>Đơn hàng của bạn đã được xác nhận <span style="font-weight: bold;font-size: large;">Thành công</span> !</p>
            <p style="font-size: small;">Chúng tôi sẽ <span style="font-style: italic; font-size: large;">giao hàng</span> trong 3 ngày làm việc</p>
            <button>Tiếp tục mua hàng</button>
        </div>
    </div>
</section>

@endsection
