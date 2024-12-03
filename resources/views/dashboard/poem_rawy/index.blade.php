@extends('layout.dashboard.app')
@section('content')

<div class=" row">
    <a href="{{ route('dashboard.poem_rawy.create') }}" class="btn btn-primary mb-3 pog"> اضافة جديد</a>
    <h1 class="pn">ابيات القصيدة </h1>
</div>

<!-- BEGIN SAMPLE TABLE PORTLET-->
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i> ابيات القصيدة
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>
            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
            <a href="javascript:;" class="reload"> </a>
            <a href="javascript:;" class="remove"> </a>
        </div>
    </div>

            <form class="form-inline pull-left" action="{{route('dashboard.poem_rawy.index')}}" method="GET">
                <div id="search" class="input-group input-medium">
                    <input type="text" class="form-control" name="search" placeholder="  اسم  القصيده " value="{{ request()->search }}">
                    <span class="input-group-btn">
                        <button type="submit" class="btn green">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
    <div class="portlet-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <!-- <th> # </th> -->
                        <th> تابع الي </th>
                        <th> اسم القصيده </th>
                        <th>رقم القصيدة </th>
                        <th> عدد الابيات </th>
                        <th>عرض</th>

                        <th> تعديل </th>
                        <th> حذف </th>
                    </tr>
                </thead>
                <tbody>
                
            </table>
        </div>
    </div>
</div>














@endsection