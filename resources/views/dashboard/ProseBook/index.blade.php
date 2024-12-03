@extends('layout.dashboard.app')
@section('content')





<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
            @foreach ($Books as $index=>$Book)
            @if ($index == 0)
            <span class="caption-subject bold uppercase">({{ $Book->ProseCategorie->ProseLibrary->name_ar }} >>>>> {{ $Book->ProseCategorie->name_ar }})-----الكتاب /التراث النثري</span>
            @endif
            @endforeach
        </div>

     

        <div class="btn-group" style="margin-right:10px ;">
            <a class="btn btn-default mt-ladda-btn ladda-button btn-outline" href="{{ route('dashboard.ProseBook.create',$id) }}"> <i class="fa fa-plus"></i> اضافة</a>

        </div>
        @foreach ($Books as $index=>$Book)
        @if($index == 0)
        <div class="btn-group" style="margin-right:10px ;">
            <a class="btn btn-default mt-ladda-btn ladda-button btn-outline" href="{{ route('dashboard.ProseCategorie.index',$Book->ProseCategorie->ProseLibrary) }}"> <i class="icon-login"></i> الرجوع الي صفحة الاقسام    </a>

        </div>
        @endif
        @endforeach
        <div class="btn-group" style="margin-right:10px ;">
            <a class="btn btn-default mt-ladda-btn ladda-button btn-outline" href="{{ route('dashboard.ProseLibrary.index') }}"> <i class="icon-login"></i> الرجوع الي صفحة اسم المكتبة    </a>

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
                            <img class="img-responsive" style="width: 10%;" src="{{ asset('storage/ProseBook/img/' . $Book->photo) }}" alt="{{ $Book->title }}"> </a>
                    </td>
                    <td>
                        {{ $Book->name_ar }}
                    </td>
                    <td>
                        {{ $Book->ProseCategorie->name_ar }}

                    </td>
                    <td>
                        <a href="{{ route('dashboard.ProseBook.show',[$Book->id,$id]) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-file"></i> الملف </a>
                    </td>


                    <td>
                        <a href="{{ route('dashboard.ProseBook.edit',[$Book->id,$id]) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-pencil"></i> تعديل </a>
                    </td>

                    <td>
                        <a onclick=" return confirm('هل أنت متأكد?')" href="{{ route('dashboard.ProseBook.destroy',[$Book->id,$id]) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-times"></i> حذف </a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>





@endsection