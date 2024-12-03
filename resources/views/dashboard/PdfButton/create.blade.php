@extends('layout.dashboard.app')
@section('content')


<div class="portlet light form-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span style="color:#000 !important;" class="caption-subject font-green bold uppercase"> ادخل البيانات الكتاب / أبناء إلامام و تلاميذه </span>
        </div>
        <div class="actions">

        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->

        <form class="form-horizontal form-bordered" method="POST" action="{{ route('dashboard.PdfButton.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">اسم المحتوى </label>
                    <div class="col-md-4">
                        <input class="form-control" placeholder="الاسم" name="name_ar" type="text" />

                    </div>
                </div>
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
                                    <input type="hidden"><input type="file" name="pdf" required> </span>
                                <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> حذف </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                            <label class="control-label col-md-3">الصوره</label>
                            <div class="col-md-4">

                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                    <div>
                                        <span class="btn default btn-file">
                                            <span class="fileinput-new"> اضافة صوره </span>
                                            <span class="fileinput-exists"> تغير </span>
                                            <input type="file" id="photo" name="photo" required> </span>
                                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> حذف </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">

                            <input type="hidden" name="buttontype_id" value="{{$id}}">

                        </div>

                    </div>
                </div>


            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn blue">
                            <i class="fa fa-check"></i> حفظ</button>
                        <a href="{{ route('dashboard.PdfButton.index',$id)}}" class="btn default">الغاء</a>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>


@endsection