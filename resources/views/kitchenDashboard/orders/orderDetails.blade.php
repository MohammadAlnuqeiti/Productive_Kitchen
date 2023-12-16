@extends('kitchenDashboard.layouts.master')


@section('title')
Orders
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}

@endsection

@section('section_title')
تفاصيل الطلب
@endsection

@section('title_page1')

@endsection

@section('title_page2')
تفاصيل الطلب
@endsection

@section('content')



<div class="col-lg-12">
    <div class="card">
        <div class="card-body order-list">
            <h4 class="header-title mt-0 mb-3">تفاصيل الطلب</h4>
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <tbody>
                        <tr>
                            <th class="thead-light">رقم الطلب :</th>
                            <td>{{$order_no->id}}</td>
                        </tr>
                        <tr>
                            <th class="thead-light">حالة الطلب :</th>
                            @if ($order_no->status == 'pending')
                                <td>قيد المعالجة</td>
                            @elseif ($order_no->status == 'accepted')
                                <td>تمت الموافقة</td>
                            @else
                                <td>تم الرفض</td>
                            @endif
                        </tr>
                        <tr>
                            <th class="thead-light">اجمالي السعر :</th>
                            <td>{{$order_no->total_price}}</td>
                        </tr>
                        {{-- <tr>
                            <th class="border-top-0">تاريخ و وقت استلام الطلب :</th>
                            <td>---</td>
                        </tr> --}}
                    </tbody>
                </table>
                <table class="table table-hover mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-top-0">#</th>
                            <th class="border-top-0">اسم المنتج</th>
                            <th class="border-top-0">الكمية</th>
                            <th class="border-top-0">السعر</th>
                        </tr>
                        <!--end tr-->
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        @forelse ($orders as $order)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$order->product->name}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>{{$order->price}} JD</td>
                            </tr>
                            <?php ++$i ?>
                        @empty

                        @endforelse
                        <!--end tr-->

                    </tbody>
                </table> <!--end table-->
            </div><!--end /div-->
        </div><!--end card-body-->
    </div><!--end card-->
</div><!--end col-->
</div>
@endsection

@section('script')

@endsection
