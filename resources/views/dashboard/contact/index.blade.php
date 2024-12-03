@extends('layout.dashboard.app')
@section('content')




    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption font-dark">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject bold uppercase">تواصل معنا المحتوى الاول</span>
            </div>
            {{-- <div class="btn-group" style="margin-right:10px ;">
                        <a class="btn btn-default mt-ladda-btn ladda-button btn-outline" href="{{ route('dashboard.contact.create')}}"> <i class="fa fa-plus"></i> اضافة</a>
    
                    </div> --}}
            <div class="tools"> </div>
        </div>
        <div class="portlet-body">
            <table class="table table-striped table-bordered table-hover" id="sample_1">

                <thead>
                    <tr>


                        <th> رقم </th>
                        <th> اسم الاول </th>
                        <th> اسم الثاني </th>
                        <th> البريد الاكتروني </th>

                        <th> مشاهدة </th>
                        {{-- <th> تعديل </th> --}}
                        <th> حذف </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($contacts as $index => $contact)
                        <tr>

                            <td> {{ $index + 1 }} </td>
                            <td>
                                {{ $contact->first }}
                            </td>
                            <td>
                                {{ $contact->second }}
                            </td>
                            <td>
                                {{ $contact->email }}
                            </td>
                            <td>
                                <a href="{{ route('dashboard.contact.show', $contact->id) }}"
                                    class="btn btn-default btn-sm">
                                    <i class="fa fa-file"></i> الملف </a>
                            </td>
                            {{-- <td>
                                <a href="{{ route('dashboard.contact.edit', $contact->id) }}"
                                    class="btn btn-default btn-sm">
                                    <i class="fa fa-pencil"></i> تعديل </a>
                            </td> --}}
                            <td>
                                <a onclick=" return confirm('Are you sure?')"
                                    href="{{ route('dashboard.contact.destroy', $contact->id) }}"
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
