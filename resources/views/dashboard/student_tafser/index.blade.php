@extends('layout.dashboard.app')
@section('content')



    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption font-dark">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject bold uppercase">تفسير تلاميذ الامام</span>
            </div>
            <div class="btn-group" style="margin-right:10px ;">
                <a class="btn btn-default mt-ladda-btn ladda-button btn-outline"
                    href="{{ route('dashboard.student_tafser.create') }}"> <i class="fa fa-plus"></i> اضافة</a>

            </div>
            <div class="tools"> </div>
        </div>
        <div class="portlet-body">
            <table class="table table-striped table-bordered table-hover" id="sample_1">

                <thead>
                    <tr>
                        <th> رقم </th>
                       
                        <th > اسم تلميذ الامام </th>
                        <th > تفسير القاضي </th>
                        <th > تفسير الايه </th>
                        <th > مشاهده </th>
                        <th> تعديل </th>
                        <th> حذف </th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($Student_tafsers as $index => $Student_tafser)
                        <tr>

                            <td> {{ $index + 1 }} </td>
                            <td> {{ $Student_tafser->Student->name_ar }}</td>
                            @if ($Student_tafser->Type == null)
                                <td> لا يوجد</td>

                            @else
                                <td> {{ $Student_tafser->Type->name_ar }}</td>

                            @endif

                            <td> آيه {{ $Student_tafser->ayat->key_aya }} (سوره {{ $Student_tafser->ayat->sora_id }})</td>
                            <td>
                                <a href="{{ route('dashboard.student_tafser.show', $Student_tafser->id) }}" class="btn btn-default btn-sm">
                                    <i class="fa fa-file"></i> الملف </a>
                            </td>



                            <td>
                                <a href="{{ route('dashboard.student_tafser.edit', $Student_tafser->id) }}"
                                    class="btn btn-default btn-sm">
                                    <i class="fa fa-pencil"></i> تعديل </a>
                            </td>
                            <td>
                                <a onclick=" return confirm('هل أنت متأكد?')" href="{{ route('dashboard.student_tafser.destroy', $Student_tafser->id) }}"
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
