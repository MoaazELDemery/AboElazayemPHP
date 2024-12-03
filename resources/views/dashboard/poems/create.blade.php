@extends('layout.dashboard.app')
@section('content')
<div class="portlet light form-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span style="color:#000 !important;" class="caption-subject font-green bold uppercase"> ادخل البيانات اسم تابع للقصيده </span>
        </div>
        <div class="actions">
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->

        <form class="form-horizontal form-bordered" method="POST" action="{{ route('dashboard.poems.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">


                <div class="form-group">
                    <label class="control-label col-md-3">اسم القصيدة </label>
                    <div class="col-md-4">
                        <input class="form-control" placeholder="الاسم" name="pname_ar" type="text" />

                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">رقم القصيدة </label>
                    <div class="col-md-4">
                        <input class="form-control" placeholder="رقم القصيدة" name="num_peom" type="number" />

                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">عدد الأبيات </label>
                    <div class="col-md-4">
                        <input class="form-control" placeholder="عدد الأبيات" name="num_verses" type="number" />

                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">مناسبة القصيدة </label>
                    <div class="col-md-4">
                        <input class="form-control" placeholder="مناسبة القصيدة " name="occasion_ar" type="text" />

                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">مكان القصيدة </label>
                    <div class="col-md-4">
                        <input class="form-control" placeholder="مكان القصيدة" name="Place_ar" type="text" />

                    </div>
                </div>



                <div class="form-group">
                    <label class="control-label col-md-3">تاريخ الميلادي </label>
                    <div class="col-md-4">
                        <input class="form-control" placeholder=" تاريخ الميلادي" name="date_birth" type="date" />

                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">تاريخ هجري </label>
                    <div class="col-md-4">
                        <input class="form-control" placeholder="01-01-1450 " name="date_hijri" type="text" />

                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3"> رويها </label>
                    <div class="col-md-4">
                        <input class="form-control" placeholder=" الراوي " name="rawy_ar" type="text" />

                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3"> بحرها </label>
                    <div class="col-md-4">
                        <input class="form-control" placeholder=" بحرها " name="name_sea" type="text" />

                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3"> تابعه الي </label>
                    <div class="col-md-4">
                        <input class="form-control" placeholder=" تابعه الي " name="name_follow" type="text" />

                    </div>
                </div>


            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn blue">
                            <i class="fa fa-check"></i> حفظ</button>
                        <a href="{{ route('dashboard.poems.index')}}" class="btn default">الغاء</a>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>


@endsection