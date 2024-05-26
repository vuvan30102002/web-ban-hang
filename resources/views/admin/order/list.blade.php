@extends('admin.main')

@section('title')
Danh Sách Đơn Hàng
@endsection

@section('content')
<div class="admin-content-main-content-order-list">
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tên</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Địa Chỉ</th>
                                <th>Ghi Chú</th>
                                <th>Chi Tiết</th>
                                <th>Ngày</th>
                                <th>Trạng Thái</th>
                                <th>Tuỳ Biến</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                                    <tr>
                                        <td>{{ $item -> id }}</td>
                                        <td>{{ $item -> name }}</td>
                                        <td>{{ $item -> phone }}</td>
                                        <td>{{ $item -> email }}</td>
                                        <td>{{ $item -> ward }}, {{ $item -> district }}, {{ $item -> city }}</td>
                                        <td>{{ $item -> note }}</td>
                                        <td><a href="/admin/order/detail/{{ $item -> order_detail}}">Xem</a></td>
                                        <td>{{ $item -> created_at }}</td>
                                        <td>Đã Xác Nhận</td>
                                        <td><a style="color: black;" href="">Sửa</a>|<a style="color: black;" href="">Xoá</a></td>
                                    </tr>
                            @endforeach

                            {{-- <tr>
                                <td>1</td>
                                <td>Chịu Cách Mình Nói Thua</td>
                                <td>123456</td>
                                <td>gg@gmail.com</td>
                                <td>Thái Bình</td>
                                <td>Giao Siêu Chậm</td>
                                <td><a href="/admin/order_detail">Xem</a></td>
                                <td>30/10/2002</td>
                                <td>Đã Xác Nhận</td>
                                <td><a style="color: black;" href="">Sửa</a>|<a style="color: black;" href="">Xoá</a></td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
@endsection
