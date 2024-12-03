@extends('layout.dashboard.app')
@section('content')




<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject bold uppercase"> تواصل معنا المحتوي الثاني </span>
        </div>
         {{-- <div class="btn-group" style="margin-right:10px ;">
                    <a class="btn btn-default mt-ladda-btn ladda-button btn-outline"    href="{{ route('dashboard.map.create') }}"> <i class="fa fa-plus"></i> اضافة</a>

                </div>  --}}
        <div class="tools"> </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_1">

            <thead>
                <tr>
                    <th> رقم </th>

                   
                    <th > البريد الإلكتروني </th>
                    <th > رقم الموبايل </th>
                    <th> مشاهدة </th>
                    <th> تعديل </th>
                   
                    <!-- <th > حذف </th> -->
                </tr>
            </thead>
            <tbody>
                
                @foreach ($maps as $index=>$map)
                <tr>

                    <td> {{ $index+1 }} </td>
                    <td>
                        {{ $map->email  }}
                    </td>
                    <td>
                        {{ $map->mobile }}
                    </td>
                    <td>
                        <a href="{{ route('dashboard.map.show', $map->id) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-file"></i> الملف </a>
                    </td>
                
                    <td>
                        <a href="{{ route('dashboard.map.edit', $map->id) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-pencil"></i> تعديل </a>
                    </td>

                    {{-- <td>
                        <a onclick=" return confirm('Are you sure?')" href="{{ route('dashboard.map.destroy', $map->id) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-times"></i> حذف </a>
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>




@endsection