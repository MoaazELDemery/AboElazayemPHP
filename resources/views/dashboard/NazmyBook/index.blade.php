@extends('layout.dashboard.app')
@section('content')
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
            @foreach ($Books as $index=>$Book)
                @if($index == 0)
                  <span class="caption-subject bold uppercase">({{ $Book->NazmyCategorie->name_ar }}>>>{{ $Book->NazmyCategorie->NazmyLibrary->name_ar }})------الكتاب /  التراث  النظمي </span>
                @endif
            @endforeach
        </div>

        <div class="btn-group" style="margin-right:10px ;">
            <a class="btn btn-default mt-ladda-btn ladda-button btn-outline" href="{{ route('dashboard.NazmyBook.create',$id) }}"> <i class="fa fa-plus"></i> اضافة</a>

        </div>
        @foreach ($Books as $index=>$Book)
        @if($index == 0)
        <div class="btn-group" style="margin-right:10px ;">
            <a class="btn btn-default mt-ladda-btn ladda-button btn-outline"
                href="{{ route('dashboard.NazmyCategorie.index',$Book->NazmyCategorie->NazmyLibrary) }}"> <i class="icon-login"></i> الرجوع الي صفحة 
                الاقسام  </a>

        </div>
        @endif
        @endforeach

        <div class="btn-group" style="margin-right:10px ;">
            <a class="btn btn-default mt-ladda-btn ladda-button btn-outline"
                href="{{ route('dashboard.NazmyLibrary.index') }}"> <i class="icon-login"></i> رجوع الي صفحة ااسم المكتبة / التراث النظمي </a>

        </div>
    
        <div class="tools"> </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_1">

            <thead>
                <tr>
                    <th> رقم </th>
                    <th>  الصوره </th>
                    <th> اسم المحتوي </th>
                    <th> تابع الي </th>
                    <th> مشاهدة </th>
                    <th> تعديل </th>
                    <th> حذف </th>

                </tr>
            </thead>
            <tbody>

                @foreach ($Books as $index=>$Book)
                <tr>

                    <td> {{ $index+1 }} </td>
                    <td>
                        <a href="#" class="fancybox-button" data-rel="fancybox-button">
                            <img class="img-responsive" style="width: 10%;" src="{{ asset('storage/NazmyBook/img/' . $Book->photo) }}" alt="{{ $Book->title }}"> </a>
                    </td>
                    <td>
                        {{ $Book->name_ar }}
                    </td>
                    <td>
                        {{ $Book->NazmyCategorie->name_ar }}

                    </td>
                    <td>
                        <a href="{{ route('dashboard.NazmyBook.show',[$Book->id,$id]) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-file"></i> الملف </a>
                    </td>


                    <td>
                        <a href="{{ route('dashboard.NazmyBook.edit',[$Book->id,$id]) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-pencil"></i> تعديل </a>
                    </td>

                    <td>
                        <a  onclick=" return confirm('هل أنت متأكد?')" href="{{ route('dashboard.NazmyBook.destroy',[$Book->id,$id]) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-times"></i> حذف </a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>






@endsection