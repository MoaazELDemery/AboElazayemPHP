@extends('layout.dashboard.app')
@section('content')
<!-- BEGIN SAMPLE TABLE PORTLET-->
<div class="row">

    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">

                <div class="caption">
                    <span class="caption-subject font-grey-salsa bold uppercase">بيانات القصيدة</span>
                </div>
                <div class="actions">
                    <div class="actions">
                        <a href="{{ route('dashboard.poems.index') }}" class="btn btn-circle btn-default">
                            <i class="fa fa-mail-reply"></i> الغاء </a>

                    </div>
                </div>
                <div class="actions">
                    <div class="actions">
                        <a href="{{ route('dashboard.poems.edit',$poemss->id) }}" class="btn btn-circle btn-default">
                            <i class="fa fa-pencil"></i> تعديل </a>

                    </div>
                </div>
            </div>
            <div class="portlet-body tabs-below">
                <div class="tab-content">

                    <div class="tab-pane active" id="tab_3_1">
                        <div class="row">
                            <div class="col-md-4">
                                <p> اسم القصيدة : {{ $poemss->pname_ar }}</p>
                            </div>
                            <div class="col-md-4">
                                <p>رقم القصيدة : {{ $poemss->num_peom }}</p>
                            </div>
                            <div class="col-md-4">
                                <p>ابيات القصيدة :{{ $poemss->num_verses }}</p>
                            </div>
                            <div class="col-md-4">
                                <p> مكان القصيدة : {{ $poemss->Place_ar }}</p>
                            </div>
                            <div class="col-md-4">
                                <p> مناسبة القصيدة : {{ $poemss->occasion_ar }}</p>
                            </div>
                            <div class="col-md-4">
                                <p>تاريخ القصيدة الهجري :{{ $poemss->date_hijri }}</p>
                            </div>
                            <div class="col-md-4">
                                <p>تاريخ القصيدة ميلادي :{{ $poemss->date_birth }}</p>
                            </div>
                            <div class="col-md-4">
                                <p>بحرها :{{ $poemss->name_sea }}</p>
                            </div>
                            <div class="col-md-4">
                                <p>تابعه الي :{{ $poemss->name_follow }}</p>
                            </div>

                        </div>
               
                        
                        <div class="row" style="margin-top: 20px;">
                        @foreach($poemss->poem_rawies as $peat)
                            <div class="col-md-6" style="text-align: center;">
                                <p> البيت الأيمن : {{ $peat->right_ar }}</p>
                            </div>
                            <div class="col-md-6" style="text-align: center;">
                                <p>البيت الأيسر : {{ $peat->left_ar }}</p>
                            </div>
                            @endforeach
                         
                        </div>







                    </div>

                </div>
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_3_1" data-toggle="tab"> عربي </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>

</div>
<!-- END SAMPLE TABLE PORTLET-->





@endsection