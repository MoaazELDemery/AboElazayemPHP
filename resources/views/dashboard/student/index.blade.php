@extends('layout.dashboard.app')
@section('content')



<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject bold uppercase">تلاميذ الامام</span>
        </div>
        <div class="btn-group" style="margin-right:10px ;">
            <a class="btn btn-default mt-ladda-btn ladda-button btn-outline"
                href="{{ route('dashboard.student.create') }}"> <i class="fa fa-plus"></i> اضافة</a>

        </div>
        <div class="tools"> </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_1">

            <thead>
                <tr>
                    <th> رقم </th>

                    <th> اسم الإمام </th>
                    <th>تابع الي الامام </th>


                    <th> تعديل </th>
                    {{-- <th> حذف </th> --}}
                </tr>
            </thead>
            <tbody>
               
              
                @foreach ($Students as $index => $Student)
                    <tr>

                        <td> {{ $index + 1 }} </td>
                        <td>
                            {{ $Student->name_ar }}
                        </td>

                        <td>
                            {{ $Student->imams->name_ar }}
                        </td>



                        <td>
                            <a href="{{ route('dashboard.student.edit', $Student->id) }}" class="btn btn-default btn-sm">
                                <i class="fa fa-pencil"></i> تعديل </a>
                        </td>
                        {{-- <td>
                            <a onclick=" return confirm('هل أنت متأكد?')" href="{{ route('dashboard.student.destroy', $Student->id) }}"
                                class="btn btn-default btn-sm">
                                <i class="fa fa-times"></i> حذف </a>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection