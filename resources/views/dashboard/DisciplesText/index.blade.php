@extends('layout.dashboard.app')
@section('content')



<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
            @foreach ($Texts as $index=>$Text)
            @if($index == 0)
            <span class="caption-subject bold uppercase">({{ $Text->ImamDisciples->name_ar }})-------نبذة عن / تلميذ الامام </span>
            @endif
            @endforeach
        </div>
        @if( count($Texts) == 0)
        <div class="btn-group" style="margin-right:10px ;">
            <a class="btn btn-default mt-ladda-btn ladda-button btn-outline" href="{{ route('dashboard.DisciplesText.create',$id) }}"> <i class="fa fa-plus"></i> اضافة</a>
        </div>
        @endif

        
        <div class="btn-group" style="margin-right:10px ;">
            <a class="btn btn-default mt-ladda-btn ladda-button btn-outline" href="{{ route('dashboard.ImamDisciples.index') }}"> <i class="icon-login"></i> الرجوع الي صفحةاسماء الائمة و التلاميذ </a>

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
                        {{ $Text->ImamDisciples->name_ar }}
                    </td>


                    <td>
                        <a href="{{ route('dashboard.DisciplesText.show',[$Text->id,$id] ) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-file"></i> الملف </a>
                    </td>
                    <td>
                        <a href="{{ route('dashboard.DisciplesText.edit',[$Text->id,$id] ) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-pencil"></i> تعديل </a>
                    <td>
                        <a onclick=" return confirm('هل أنت متأكد?')" href="{{ route('dashboard.DisciplesText.destroy',[$Text->id,$id] ) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-times"></i> حذف </a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>






@endsection