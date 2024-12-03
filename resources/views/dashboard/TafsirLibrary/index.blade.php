@extends('layout.dashboard.app')
@section('content')



    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption font-dark">
                <i class="icon-settings font-dark"></i>
                
                <span class="caption-subject bold uppercase">اسم مكتبة التفسير</span>
            </div>
            @if( count($Librarys) < 2)
            <div class="btn-group" style="margin-right:10px ;">
                <a class="btn btn-default mt-ladda-btn ladda-button btn-outline"
                    href="{{ route('dashboard.TafsirLibrary.create') }}"> <i class="fa fa-plus"></i> اضافة</a>

            </div>
            @endif
            <div class="tools"> </div>
        </div>
        <div class="portlet-body">
            <table class="table table-striped table-bordered table-hover" id="sample_1">

                <thead>
                    <tr>
                        <th> رقم </th>
                        <th> الصور</th>
                        <th> اسم المحتوي </th>
                        <th> اضافة كتاب </th>
                        <th> تعديل </th>
                        <th> حذف </th>




                    </tr>
                </thead>
                <tbody>



                    @foreach ($Librarys as $index => $Library)
                        <tr>

                            <td> {{ $index + 1 }} </td>

                            <td>
                                <img class="img-responsive" style="width: 10%"
                                    src=" {{ asset('storage/TafsirLibrary/img/' . $Library->photo) }}" alt="img">
                            </td>
                            <td>
                                {{ $Library->name_ar }}
                            </td>
                            <td>

                                <a class="btn red btn-outline"
                                    href="{{ route('dashboard.TafsirBook.index', $Library->id) }}"> <i
                                        class="fa fa-plus"></i> اضافة</a>


                            </td>
                            <td>
                                <a href="{{ route('dashboard.TafsirLibrary.edit', $Library->id) }}"
                                    class="btn btn-default btn-sm">
                                    <i class="fa fa-pencil"></i> تعديل </a>
                            </td>

                            <td>
                                <a onclick=" return confirm('هل أنت متأكد?')"
                                    href="{{ route('dashboard.TafsirLibrary.destroy', $Library->id) }}"
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
