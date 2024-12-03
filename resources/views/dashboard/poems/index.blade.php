


@extends('layout.dashboard.app')
@section('content')

<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject bold uppercase">بيانات القصيدة</span>
        </div>
        <div class="btn-group" style="margin-right:10px ;">
                    <a class="btn btn-default mt-ladda-btn ladda-button btn-outline" href="{{ route('dashboard.poems.create') }}"> <i class="fa fa-plus"></i> اضافة</a>

                </div>
        <div class="tools"> </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_1">

            <thead>
                <tr>
                    
                    <th> رقم </th>
                    <th> اسم القصيدة</th>
                    <th>  رقم القصيدة </th>
                    <th>  عدد الأبيات </th>
                    <th>  اضافة الأبيات </th>
                    <th >  مشاهد </th> 
                    <th >  تعديل </th> 
                    <th > حذف  </th> 
                </tr>
            </thead>
            <tbody>

                
                @foreach ($poemss as $index=>$poems)
                <tr>
                    <td> {{ $index+1 }} </td>
                    <td>{{ $poems->pname_ar}}  </td>
                    <td> {{ $poems->num_peom }} </td>
                    <td>{{ $poems->num_verses }}  </td>

                    <td>
                       @if(count($poems->poem_rawies) == 0)
                        <a href="{{ route('dashboard.poem_rawy.create', $poems->id) }}" style="background: rgb(132, 104, 209) ; color:white;" class="btn btn-default btn-sm">
                            <i class="fa fa-pencil"></i> اضافة الأبيات </a>
                    
                        </td>
                        @else
                        <a href="{{ route('dashboard.poem_rawy.create', $poems->id) }}" style="background: rgb(167, 52, 52) ; color:white;" class="btn btn-default btn-sm">
                            <i class="fa fa-pencil"></i> تعديل الأبيات </a>
                    
                        </td>
                        @endif
                    

                    <td>
                        <a href="{{ route('dashboard.poems.show', $poems->id) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-pencil"></i> مشاهد </a></td>
                    <td>
                        <a href="{{ route('dashboard.poems.edit', $poems->id) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-pencil"></i> تعديل </a></td>
                    <td>
                        <a onclick=" return confirm('هل أنت متأكد?')" href="{{ route('dashboard.poems.destroy', $poems->id) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-times"></i> حذف </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>







@endsection







