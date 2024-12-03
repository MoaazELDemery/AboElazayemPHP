@extends('layout.dashboard.app')
@section('content')




<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
            
            
            @foreach ($Audios as $index=>$Audio)
            @if($index == 0)
            <span class="caption-subject bold uppercase">({{ $Audio->ButtonLibrary->name_ar }}>>>>>  {{ $Audio->ButtonLibrary->MediaLibrary->name_ar }} )---->مكتبة / صوتيات<</span>
            @endif

            @endforeach
        </div>

        <div class="btn-group" style="margin-right:10px ;">
            <a class="btn btn-default mt-ladda-btn ladda-button btn-outline" href="{{ route('dashboard.AudioLibrary.create',$id) }}"> <i class="fa fa-plus"></i> اضافة</a>

        </div>
        <div class="btn-group" style="margin-right:10px ;">
            <a class="btn btn-default mt-ladda-btn ladda-button btn-outline" href="{{ route('dashboard.ButtonLibrary.index') }}"> <i class="icon-login"></i> رجوع الي صفحة اضافة صوتيات او مرئيات </a>

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
              
                @foreach ($Audios as $index=>$Audio)
                <tr>

                    <td> {{ $index+1 }} </td>
                    <td>
                        {{ $Audio->name_ar }}
                    </td>
                    <td>
                        {{ $Audio->ButtonLibrary->name_ar }}
                    </td>


                    <td>
                        <a href="{{ route('dashboard.AudioLibrary.show',[$Audio->id,$id] ) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-file"></i> الملف </a>
                    </td>
                    <td>
                        <a href="{{ route('dashboard.AudioLibrary.edit',[$Audio->id,$id] ) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-pencil"></i> تعديل </a>
                    <td>
                        <a onclick=" return confirm('هل أنت متأكد?')" href="{{ route('dashboard.AudioLibrary.destroy',[$Audio->id,$id] ) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-times"></i> حذف </a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>






@endsection