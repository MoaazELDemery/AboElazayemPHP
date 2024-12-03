@extends('layout.dashboard.app')
@section('content')



<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject bold uppercase">نبذة عن الكتاب/  التصوف  </span>
        </div>
        @if( count($Texts) == 0)
        <div class="btn-group" style="margin-right:10px ;">
            <a class="btn btn-default mt-ladda-btn ladda-button btn-outline" href="{{ route('dashboard.EltasofText.create',$id) }}"> <i class="fa fa-plus"></i> اضافة</a>

        </div>
        @endif
        <div class="btn-group" style="margin-right:10px ;">
            <a class="btn btn-default mt-ladda-btn ladda-button btn-outline" href="{{ route('dashboard.EltasofLibrary.index') }}"> <i class="icon-login"></i> الرجوع الي صفحة اسم المكتبة </a>

        </div>
        <div class="tools"> </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_1">

            <thead>
                <tr>
                    <th> رقم </th>
                    <th> اسم المحتوي </th>
                    <th> تابع الي </th>
                    <th> مشاهدة </th>
                    <th> تعديل </th>
                    <th> حذف </th>

                </tr>
            </thead>
            <tbody>

                @foreach ($Texts as $index=>$Text)
                <tr>

                    <td> {{ $index+1 }} </td>
                    <td>
                        {{ $Text->name_ar }}
                    </td>
                    <td>
                        {{ $Text->EltasofLibrary->name_ar }}
                    </td>


                    <td>
                        <a href="{{ route('dashboard.EltasofText.show',[$Text->id,$id] ) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-file"></i> الملف </a>
                    </td>
                    <td>
                        <a href="{{ route('dashboard.EltasofText.edit',[$Text->id,$id] ) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-pencil"></i> تعديل </a>
                    <td>
                        <a onclick=" return confirm('هل أنت متأكد?')" href="{{ route('dashboard.EltasofText.destroy',[$Text->id,$id] ) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-times"></i> حذف </a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>







@endsection