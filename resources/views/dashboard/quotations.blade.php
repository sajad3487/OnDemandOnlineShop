
@extends('layouts.cDashboardTemplate')
@section('content')
    <section class="invoice-list-wrapper section">
        <div class="invoice-create-btn">
            <a href="{{url('/quotation/create')}}" class="btn waves-effect waves-light invoice-create border-round z-depth-4">
                <i class="material-icons">add</i>
                <span class="hide-on-small-only">ایجاد فاکتور</span>
            </a>
        </div>
        <div class="responsive-table">
            <table class="table invoice-data-table white border-radius-4 pt-1">
                <thead>
                <tr>
                    <!-- data table responsive icons -->
                    <th></th>
                    <!-- data table checkbox -->
                    <th></th>
                    <th>
                        <span>فاکتور#</span>
                    </th>
                    <th>قیمت کل</th>
                    <th>تاریخ</th>
                    <th>آخرین بروز رسانی</th>
                    <th>کد تخفیف</th>
                    <th>وضعیت</th>
                    <th>مشاهده</th>
                </tr>
                </thead>

                <tbody>
                @isset($quotations)
                @foreach($quotations as $quotation)
                <tr>
                    <td></td>
                    <td> </td>
                    <td>
                        {{$quotation->id}}
                    </td>
                    <td><span class="invoice-amount">{{$quotation->price}}</span></td>
                    <td><small>{{$quotation->created_at}}</small></td>
                    <td><span class="invoice-customer"><small>{{$quotation->updated_at}}</small></span></td>
                    <td>
                        <span class="bullet red"></span>
                        <small>{{$quotation->discount_code}}</small>
                    </td>
                    <td>
                        @if($quotation->status == 2)
                            <span class="chip lighten-5 orange orange-text">صادر شده</span>
                            @elseif($quotation->status == 4)
                            <span class="chip lighten-5 green green-text">پرداخت شده</span>
                            @elseif($quotation->status == 1)
                            <span class="chip lighten-5 red red-text">صادر نشده</span>
                            @endif
                    </td>
                    <td>
                        <div class="invoice-action">
                            <a href="
                            @if($quotation->status == 4)
                                {{url("/quotation/purchased/$quotation->id/view")}}" class="invoice-action-view mr-4">
                            @else
                                {{url("/quotation/$quotation->id/view")}}" class="invoice-action-view mr-4">
                            @endif
                                <i class="material-icons green-text">remove_red_eye</i>
                            </a>
                        </div>
                    </td>
                </tr>

                @endforeach
                @endisset
                </tbody>
            </table>
        </div>
    </section>


@endsection
