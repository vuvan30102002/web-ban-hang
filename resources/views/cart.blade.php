{{-- @extends('main')
@section('content')
<section class="cart-section p-to-top">
   <form action="/cart/send" method="post">
    @csrf
    <div class="container">
        <div class="row-grid-cart">
          <div class="row-flex-cart row-flex-cart-detail">
            <p>Gio Hang</p>
          </div>
          <div class="row-grid">
            <div class="cart-section-left">
              <h3 class="main-h2">Chi Tiet Don Hang</h3>
              <table>
                <tr class="cart-tr">
                  <th>Anh</th>
                  <th>San Pham</th>
                  <th>Thanh Tien</th>
                  <th>Xoa</th>
                </tr>
                @php
                    $total =0;
                @endphp
                @foreach ($products as $item)
                  @php
                      $price = $item -> price_nomal * Session::get('cart')[$item -> id];
                      $total += $price;
                  @endphp

                <tr class="cart-td">
                  <td>
                    <img
                      style="height: 50px"
                      src="{{asset($item -> image)}}"
                      alt=""
                    />
                  </td>
                  <td>
                    <p>{{asset($item -> name)}}</p>
                    <span>{{ number_format($item -> price_nomal)}}</span>
                    <div class="product-detail-right-quantity">
                      <div class="product-detail-right-quantity-input">
                        <img
                          class="subtraction"
                          src="{{asset('home/asset/images/plus.png')}}"
                          alt=""
                        />
                        <input
                          class="value-input"
                          type="number" name="product_id[{{$item->id}}]"
                          value="{{ Session::get('cart')[$item -> id] }}"
                          readonly
                        />
                        <img class="flus" src="{{asset('home/asset/images/plus.png')}}" alt="" />
                      </div>
                    </div>
                  </td>
                  <td>
                    <p>{{ number_format($price)}}</p>
                  </td>
                  <td><a href="/cart/delete/{{$item -> id}}">Xoá</a></td>
                </tr>
                @endforeach
                <tr class="cart-tr">
                  <td>Tổng Tiền</td>
                  <td></td>
                  <td><p>{{number_format( $total )}}</p></td>
                  <td></td>
                </tr>
              </table>
              <button formaction="/cart/update" class="cart-button">Cap Nhat Gio Hang</button>
              <p class="cart-p">Tiep Tuc Mua hang >></p>
            </div>
            <div class="cart-section-right">
              <h3 class="main-h2">Thong tin Giao Hang</h3>
              <table>
                <tr>
                  <td><input type="text" name="name" placeholder="Tên bạn" /></td>
                  <td><input type="text" name="phone" placeholder="Điện Thoại" /></td>
                </tr>
                <tr>
                  <td>
                    <input type="text" name="email" placeholder="Email" />
                  </td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>
                    <select name="city" id="" aria-placeholder="Thành Phố">
                      <option value="Hà Nội">Hà Nội</option>
                      <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                      <option value="Sài Gòn">Sài Gòn</option>
                    </select>
                  </td>
                  <td>
                    <select name="district" id="" aria-placeholder="Quận-Huyện">
                      <option value="Cầu Giấy">Cầu Giấy</option>
                      <option value="Nam Từ Liêm">Nam Từ Liêm</option>
                      <option value="Hoàng Mai">Hoàng Mai</option>
                    </select>
                  </td>
                  <td>
                    <select name="ward" id="" aria-placeholder="Phường Xã">
                      <option value="Mỹ Đình 1">Mỹ Đình 1</option>
                      <option value="Mỹ Đình 2">Mỹ Đình 2</option>
                      <option value="Vũ Hội">Vũ Hội</option>
                    </select>
                  </td>
                  <tr>
                    <td>
                      <input type="text" name="address" placeholder="Địa Chỉ" />
                    </td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text" name="note" placeholder="Ghi Chú" />
                    </td>
                    <td></td>
                    <td></td>
                  </tr>
                </tr>
              </table>
              <button class="cart-button">Gửi Đơn</button>
            </div>
          </div>
        </div>
      </div>
   </form>
  </section>
@endsection --}}


@extends('main')
@section('content')
<section class="cart cach-top">
   <form action="/cart/send" method="post">
    @csrf
    <div class="container">
        <div class="row-flex row-grid-cart">
          <p class="heading-text-product heading-text">Giỏ hàng</p>
        </div>
        <div class="row-grid">
          <div class="cart-product-left">
            <h2>Chi tiết đơn hàng</h2>
            <div class="table-cart">
              <table border="1px">
                <thead>
                  <tr>
                    <th>Ảnh</th>
                    <th>Sản phẩm</th>
                    <th>Thành tiền</th>
                    <th>Xoá</th>
                  </tr>
                </thead>
                <tbody>
                @php
                    $total = 0;
                @endphp
                @foreach ($products as $item)
                  @php
                      $price = $item->price_nomal * Session::get('cart')[$item->id];
                      $total += $price;
                  @endphp

                <tr class="cart-td">
                    <td>
                        <img style="width: 90px; height: 120px" src="{{ asset($item->image) }}" alt="{{ $item->name }}" />
                    </td>
                    <td>
                        <div class="infor">
                          <h2>{{ $item->name }}</h2>
                          <div class="hot-product-item-price">
                            <p>
                                {{ number_format($item->price_nomal) }}<sup>đ</sup> <span>{{ number_format($item->price_nomal) }}<sup>đ</sup></span>
                            </p>
                          </div>
                        </div>
                        <div class="quantity quantity-cart">
                            <h2>Số lượng</h2>
                            <button class="subtraction" type="button">-</button>
                            <input
                                class="value-input"
                                type="number"
                                name="product_id[{{ $item->id }}]"
                                value="{{ Session::get('cart')[$item->id] }}"
                                readonly
                            />
                            <button class="flus" type="button">+</button>
                          </div>
                    </td>
                    <td>
                      <p>{{ number_format($price) }}<sup>đ</sup></p>
                    </td>
                    <td><a href="/cart/delete/{{ $item->id }}">Xoá</a></td>
                </tr>
                @endforeach
                <tr class="cart-tr">
                  <td>Tổng Tiền</td>
                  <td></td>
                  <td><p>{{ number_format($total) }}<sup>đ</sup></p></td>
                  <td></td>
                </tr>
                </tbody>
              </table>
              <div class="cart-product-left-updatecart">
                <button formaction="/cart/update" >Cập nhật giỏ hàng</button>
                <a href="#">>>> Tiếp tục mua hàng</a>
              </div>
            </div>
          </div>
          <div class="cart-product-right">
            <h2>Thông tin gian hàng</h2>
            <div class="cart-product-right-name-phone">
                <input type="text" name="name" placeholder="Tên bạn" required />
                <input type="text" name="phone" placeholder="Điện Thoại" required />
            </div>
            <div class="cart-product-right-email">
                <input type="email" name="email" placeholder="Email" required />
            </div>
            <div class="cart-product-right-select">
                <select name="city" aria-placeholder="Thành Phố" >
                    <option value="Hà Nội">Hà Nội</option>
                    <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                    <option value="Sài Gòn">Sài Gòn</option>
                </select>
                <select name="district" aria-placeholder="Quận-Huyện" >
                    <option value="Cầu Giấy">Cầu Giấy</option>
                    <option value="Nam Từ Liêm">Nam Từ Liêm</option>
                    <option value="Hoàng Mai">Hoàng Mai</option>
                </select>
                <select name="ward" aria-placeholder="Phường Xã" >
                    <option value="Mỹ Đình 1">Mỹ Đình 1</option>
                    <option value="Mỹ Đình 2">Mỹ Đình 2</option>
                    <option value="Vũ Hội">Vũ Hội</option>
                </select>
            </div>
            <div class="cart-product-right-email">
                <input type="text" name="address" placeholder="Địa chỉ" required  />
            </div>
            <div class="cart-product-right-email">
                <input type="text" name="note" placeholder="Ghi chú" required />
            </div>
            <div class="cart-product-right-submit">
                <button type="submit">Gửi đơn đặt hàng</button>
            </div>
          </div>
        </div>
    </div>
   </form>
</section>
@endsection

