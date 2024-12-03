@extends('layout.dashboard.app')
@section('content')

<div class="portlet light form-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span style="color:#000 !important;" class="caption-subject font-green bold uppercase"> ادخل البيانات    الامام محمد ماضي ابو العزائم  / المحتوي الاول </span>
        </div>
        <div class="actions">

        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
      
        <form  class="form-horizontal form-bordered" method="POST" action="{{ route('dashboard.home_imam.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">اسم المحتوى </label>
                    <div class="col-md-4">
                        <input class="form-control"  placeholder="الاسم" name="name_ar"  type="text" />

                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">عنوان</label>
                    <div class="col-md-4">
                        <input class="form-control" placeholder="عنوان" name="title_ar" type="text" />

                    </div>

                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">وصف المحتوي</label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="description_ar" rows="2" placeholder="وصف المحتوي" ></textarea>
                    </div>
                </div>
              
              
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn blue">
                            <i class="fa fa-check"></i> حفظ</button>
                        <a href="{{ route('dashboard.home_imam.index')}}" class="btn default">الغاء</a>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>

@endsection