@extends('layout.dashboard.app')
@section('content')


<div class="portlet light form-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span style="color:#000 !important;" class="caption-subject font-green bold uppercase"> تعديل البيانات  مكتبة / مرئيات     </span>
        </div>
        <div class="actions">

        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
      
        <form  class="form-horizontal form-bordered" method="POST" action="{{ route('dashboard.VideoLibrary.update', $Videos->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">اسم المحتوى </label>
                    <div class="col-md-4">
                        <input class="form-control"  placeholder="الاسم" value="{{ $Videos->name_ar }}" name="name_ar"  type="text" />

                    </div>
                </div>
               

                
                <div class="form-group">
                    <label class="control-label col-md-3">وصف المحتوي</label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="description_ar" rows="2" placeholder="وصف المحتوي" >{!! $Videos->description_ar !!}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">  فيديو</label>
                    <div class="col-md-4">
                    <input class="form-control"  name="video" rows="3" value="{{ $Videos->video}}">
                </div>
                </div>

             
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            
                            <input type="hidden" name="buttonlibrary_id" value="{{$id_button}}">

                        </div>

                    </div>
                </div>
              
              
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn blue">
                            <i class="fa fa-check"></i> تعديل</button>
                        <a href="{{ route('dashboard.VideoLibrary.index',$id_button)}}" class="btn default">الغاء</a>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>




@endsection