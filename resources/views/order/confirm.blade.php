{{-- @extends('main')
@section('content')
<section class="order-confirm p-to-top">
    <div class="container">
      <div class="row-flex row-flex-product-detail">
        <p>
          Xac Nhan Don Hang <span style="font-weight: bolder">gg di#11</span>
        </p>
      </div>
      <div class="row-flex">
        <div class="order-confirm-content">
          <p>
            Don hang cua ban da duoc dat thanh cong<br />
            vui luong check mail
          </p>
          <button style="background-color: black; color: white">
            Tiep tuc mua hang
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
        <p class="heading-text">Xác nhận đơn hàng: <span style="font-weight: bold; font-size: large;">Ngô Đức Trung</span> </p>
        <div class="order-confirm-request">
            <p>Đơn hàng của bạn đã được gửi <span style="font-weight: bold;font-size: large;">Thành công</span> !</p>
            <p style="font-size: small;">Vui lòng check <span style="font-style: italic; font-size: large;">Email</span> để xác nhận đơn hàng</p>
            <button>Tiếp tục mua hàng</button>
        </div>
    </div>
</section>
@endsection
