@extends('layout.dashboard.app')
@section('content')

    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption font-dark">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject bold uppercase">الاية</span>
            </div>
            <div class="btn-group" style="margin-right:10px ;">
                <a class="btn btn-default mt-ladda-btn ladda-button btn-outline"
                    href="{{ route('dashboard.ayat.create') }}"> <i class="fa fa-plus"></i> اضافة</a>

            </div>
            <div class="tools"> </div>
        </div>
        <div class="portlet-body">
            <table class="table table-striped table-bordered table-hover" id="sample_1">

                <thead>
                    <tr>
                        <th> رقم </th>
                        <th>رقم السوره</th>
                        <th> رقم الايه </th>
                        <th> تعديل </th>
                        <th> حذف </th>
                    </tr>
                </thead>
                <tbody>
                   
                    @foreach ($aya as $index => $ayat)
                        <tr>

                            <td> {{ $index + 1 }} </td>
                            <td>(سوره {{ $ayat->sora_id }}) </td>
                            <td> رقم آيه :{{ $ayat->key_aya }} </td>


                            <td>
                                <a href="{{ route('dashboard.ayat.edit', $ayat->id) }}" class="btn btn-default btn-sm">
                                    <i class="fa fa-pencil"></i> تعديل </a>
                            </td>
                            <td>
                                <a onclick=" return confirm('هل أنت متأكد?')" href="{{ route('dashboard.ayat.destroy', $ayat->id) }}"
                                    class="btn btn-default btn-sm">
                                    <i class="fa fa-times"></i> حذف </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>







@endsection
