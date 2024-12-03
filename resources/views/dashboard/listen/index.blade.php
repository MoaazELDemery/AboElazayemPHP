@extends('layout.dashboard.app')
@section('content')



<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
           
            <span class="caption-subject bold uppercase">الصوتيات القصيده</span>
           
        </div>
        <div class="btn-group" style="margin-right:10px ;">
                    <a class="btn btn-default mt-ladda-btn ladda-button btn-outline" href="{{ route('dashboard.listen.create') }}"> <i class="fa fa-plus"></i> اضافة</a>

                </div>
        <div class="tools"> </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_1">

            <thead>
                <tr>
                  

                    <th> رقم </th>
                    <th> اسم المحتوي </th>
                    <th> اسم القصيدة </th>
                    <th> مشاهدة </th>
                    <th> تعديل </th>
                     <th > حذف </th> 
                </tr>
            </thead>
            <tbody>
               
               
                @foreach ($Listens as $index=>$Listen)
                <tr>
                   

                    <td> {{ $index+1 }} </td>
                    <td>
                        {{ $Listen->name_ar }}
                    </td>

                    <td>
                        {{ $Listen->poems->pname_ar }}
                    </td>
                   
                    <td>
                        <a href="{{route('dashboard.listen.show',$Listen->id)}}" class="btn btn-default btn-sm">
                            <i class="fa fa-file"></i> الملف </a>
                    </td>
                    <td>
                        <a href="{{route('dashboard.listen.edit',$Listen->id)}}" class="btn btn-default btn-sm">
                            <i class="fa fa-pencil"></i> تعديل </a>
                    <td>
                        <a onclick=" return confirm('هل أنت متأكد?')" href="{{route('dashboard.listen.destroy',$Listen->id)}}" class="btn btn-default btn-sm">
                            <i class="fa fa-times"></i> حذف </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>








@endsection