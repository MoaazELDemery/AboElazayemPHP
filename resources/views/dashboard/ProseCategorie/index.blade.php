@extends('layout.dashboard.app')
@section('content')


    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption font-dark">
                <i class="icon-settings font-dark"></i>

                @foreach ($Categories as $index => $Categorie)
                    @if ($index == 0)
                        <span class="caption-subject bold uppercase">({{ $Categorie->ProseLibrary->name_ar }}) ---- اسم
                            الاقسام / التراث النثري </span>
                    @endif
                @endforeach
            </div>

            <div class="btn-group" style="margin-right:10px ;">
                <a class="btn btn-default mt-ladda-btn ladda-button btn-outline"
                    href="{{ route('dashboard.ProseCategorie.create', $id) }}"> <i class="fa fa-plus"></i> اضافة</a>

            </div>
            <div class="btn-group" style="margin-right:10px ;">
                <a class="btn btn-default mt-ladda-btn ladda-button btn-outline"
                    href="{{ route('dashboard.ProseLibrary.index') }}"> <i class="icon-login"></i> الرجوع الي صفحة اسم
                    المكتبة </a>

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
                        <th> اضافة كتاب </th>
                        <th> تعديل </th>
                        <th> حذف </th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($Categories as $index => $Categorie)
                        <tr>

                            <td> {{ $index + 1 }} </td>

                            <td>
                                {{ $Categorie->name_ar }}
                            </td>
                            <td>
                                {{ $Categorie->ProseLibrary->name_ar }}

                            </td>



                            <td>
                                <a class="btn red btn-outline"
                                    href="{{ route('dashboard.ProseBook.index', $Categorie->id) }}"> <i
                                        class="fa fa-plus"></i> اضافة</a>
                            </td>


                            <td>
                                <a href="{{ route('dashboard.ProseCategorie.edit', [$Categorie->id, $id]) }}"
                                    class="btn btn-default btn-sm">
                                    <i class="fa fa-pencil"></i> تعديل </a>
                            </td>

                            <td>
                                <a onclick=" return confirm('هل أنت متأكد?')" href="{{ route('dashboard.ProseCategorie.destroy', [$Categorie->id, $id]) }}"
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
