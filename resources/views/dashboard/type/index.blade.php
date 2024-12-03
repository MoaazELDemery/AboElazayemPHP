@extends('layout.dashboard.app')
@section('content')


 

    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption font-dark">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject bold uppercase">تفسير القاضي</span>
            </div>
            <div class="btn-group" style="margin-right:10px ;">
                <a class="btn btn-default mt-ladda-btn ladda-button btn-outline"
                    href="{{ route('dashboard.type.create') }}"> <i class="fa fa-plus"></i> اضافة</a>

            </div>
            <div class="tools"> </div>
        </div>
        <div class="portlet-body">
            <table class="table table-striped table-bordered table-hover" id="sample_1">

                <thead>
                    <tr>
                        <th> رقم </th>

                        <th> اسم المحتوي </th>


                        <th> تعديل </th>
                        {{-- <th> حذف </th> --}}
                    </tr>
                </thead>
                <tbody>
                  
                    @foreach ($Types as $index => $Type)
                        <tr>

                            <td> {{ $index + 1 }} </td>
                            <td>
                                {{ $Type->name_ar }}
                            </td>


                            <td>
                                <a href="{{ route('dashboard.type.edit', $Type->id) }}" class="btn btn-default btn-sm">
                                    <i class="fa fa-pencil"></i> تعديل </a>
                            </td>
                            {{-- <td>
                                <a onclick=" return confirm('هل أنت متأكد?')" href="{{ route('dashboard.type.destroy', $Type->id) }}"
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
