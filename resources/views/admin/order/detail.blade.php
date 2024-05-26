@extends('admin.main')

@section('title')
Chi Tiết Đơn Hàng
@endsection

@section('content')
<div class="admin-content-main-content-product-list">
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Ảnh</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Giá Bán</th>
                                <th>Số Lượng</th>
                                <th>Thành Tiền</th>
                                <th>Tuỳ Chỉnh</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $sum=0;
                            @endphp
                            @foreach ($products as $item)
                            @php
                                $price = $item -> price_sale * $order_detail[$item -> id];
                                $sum += $price;
                            @endphp
                            <tr>
                                <td>{{ $item -> id }}</td>
                                <td><img style="width: 70px;" src="{{asset($item -> image)}}" alt=""></td>
                                <td>{{ $item -> name }}</td>
                                <td>{{ number_format($item -> price_sale) }}</td>
                                <td>{{ $order_detail[$item -> id] }}</td>
                                <td>{{ $price }}</td>
                                <td><a style="color: black;" href="">Xoá</a></td>
                            </tr>
                            @endforeach
                            <tr>
                                <td style="font-weight: 700;" colspan="5">Tổng Cộng</td>
                                <td style="font-weight: 700;">{{ $sum }}</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
@endsection
