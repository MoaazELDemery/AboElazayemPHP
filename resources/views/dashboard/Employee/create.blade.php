@extends('layout.dashboard.app')
@section('content')
<div class="portlet light form-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span style="color:#000 !important;" class="caption-subject font-green bold uppercase">   hgl,/htdk    </span>
        </div>
        <div class="actions">

        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
      
        <form  class="form-horizontal form-bordered" method="POST" action="{{ route('dashboard.Employee.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">

                <div class="form-group">
                    <label class="control-label col-md-3">تحميل الملف</label>
                    <div class="col-md-3">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="input-group input-large">
                                <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                    <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                    <span class="fileinput-filename"> </span>
                                </div>
                                <span class="input-group-addon btn default btn-file">
                                    <span class="fileinput-new"> اضافة ملف</span>
                                    <span class="fileinput-exists"> تغير </span>
                                    <input type="hidden"><input type="file" name="file" required> </span>
                                <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> حذف </a>
                            </div>
                        </div>
                    </div>
                </div>

              
              
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn blue">
                            <i class="fa fa-check"></i> حفظ</button>
                        <a href="{{ route('dashboard.Employee.index')}}" class="btn default">الغاء</a>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>


@endsection