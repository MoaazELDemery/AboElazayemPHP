@extends('layout.dashboard.app')
@section('content')





    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption font-dark">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject bold uppercase"> اسم الشيخ صوتيات او مرئيات </span>
            </div>
            <div class="btn-group" style="margin-right:10px ;">
                <a class="btn btn-default mt-ladda-btn ladda-button btn-outline"
                    href="{{ route('dashboard.ButtonLibrary.create') }}"> <i class="fa fa-plus"></i> اضافة</a>

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
                        <th> نوع المكتبة </th>
                        <th> اضافة صوت او فديو </th>
                        <th> مشاهدة </th>
                        <th> تعديل </th>
                        <th> حذف </th>

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
                                {{ $Type->MediaLibrary->name_ar }}
                            </td>
                            <td>
                                @if ($Type->type == 'audio')
                                    مكتبة صوتية
                                @endif

                                @if ($Type->type == 'video')
                                    مكتبة مرئية
                                @endif
                            </td>
                            <td>
                                @if ($Type->type == 'audio')
                                    <a class="btn grey-mint btn-outline sbold uppercase"
                                        href="{{ route('dashboard.AudioLibrary.index', $Type->id) }}"> <i
                                            class="fa fa-plus"></i>  اضافة صوت</a>
                                @endif

                                @if ($Type->type == 'video')
                                    <a class="btn red btn-outline"
                                        href="{{ route('dashboard.VideoLibrary.index', $Type->id) }}"> <i
                                            class="fa fa-plus"></i> اضافة فيديو</a>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('dashboard.ButtonLibrary.show', $Type->id) }}" class="btn btn-default btn-sm">
                                    <i class="fa fa-file"></i> الملف </a>
                            </td>

                            <td>
                                <a href="{{ route('dashboard.ButtonLibrary.edit', $Type->id) }}"
                                    class="btn btn-default btn-sm">
                                    <i class="fa fa-pencil"></i> تعديل </a>
                            </td>

                            <td>
                                <a onclick=" return confirm('هل أنت متأكد?')" href="{{ route('dashboard.ButtonLibrary.destroy', $Type->id) }}"
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
