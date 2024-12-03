@extends('layout.dashboard.app')
@section('content')
  


    <div class="portlet light form-fit bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-social-dribbble font-green"></i>
                <span style="color:#000 !important;" class="caption-subject font-green bold uppercase"> ادخل البيانات  اسم مكتبة/ الامام محمد ماضي ابو العزائم </span>
            </div>
            <div class="actions">
    
            </div>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
          
            <form  class="form-horizontal form-bordered" method="POST"  action="{{ route('dashboard.ProseLibrary.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label col-md-3">اسم المحتوى </label>
                        <div class="col-md-4">
                            <input class="form-control"  placeholder="الاسم" name="name_ar"  type="text" />
    
                        </div>
                    </div>
                  
                  
                  
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn blue">
                                <i class="fa fa-check"></i> حفظ</button>
                            <a href="{{ route('dashboard.ProseLibrary.index') }}" class="btn default">الغاء</a>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>
    
@endsection