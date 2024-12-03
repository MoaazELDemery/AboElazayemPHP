@extends('layout.dashboard.app')
@section('content')


<div class="portlet light form-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span style="color:#000 !important;" class="caption-subject font-green bold uppercase"> تعديل البيانات الصوتيات القصيده      </span>
        </div>
        <div class="actions">

        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form  class="form-horizontal form-bordered" method="POST" action="{{ route('dashboard.listen.update', $Listens->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">اسم المحتوى </label>
                    <div class="col-md-4">
                        <input class="form-control"  placeholder="الاسم" value="{{ $Listens->name_ar }}" name="name_ar"  type="text" />

                    </div>
                </div>
               

                
                <div class="form-group">
                    <label class="control-label col-md-3">وصف المحتوي</label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="description_ar" rows="2" placeholder="وصف المحتوي" >{{ $Listens->description_ar }}</textarea>
                    </div>
                </div>

                <div class="form-group" >
                    <label class="control-label col-md-3">ملف الصوت</label>
                    <div class="col-md-3">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="input-group input-large">
                                <div class="form-control uneditable-input input-fixed input-medium"
                                    data-trigger="fileinput">
                                    
                                    
                                    <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                    
                                    <span class="fileinput-filename"> {{ $Listens->audio}}</span>
                                </div>
                                <span class="input-group-addon btn default btn-file">
                                    <span class="fileinput-new"> اضافة ملف الصوت </span>
                                    <span class="fileinput-exists"> تغير </span>
                                    <input type="hidden"><input type="file" name="audio"> </span>
                                <a href="javascript:;" class="input-group-addon btn red fileinput-exists"
                                    data-dismiss="fileinput"> حذف </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="single" class="control-label col-md-3">اسم القصيدة</label>
                    <div class="input-group col-md-9 select2-bootstrap-append">
                    <select id="single" name="poem_id" class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                      
                        <optgroup label="اسم القصيدة">
                            @foreach ($poemss as $poem)

                            <option <?php if ($poem->id == $Listens->poem_id) {echo 'selected';} ?> value="{{ $poem->id }}">{{$poem->pname_ar}}</option>
                            
                            @endforeach
                        </optgroup>
                    </select>
                </div>

                </div>
              
              
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn blue">
                            <i class="fa fa-check"></i> تعديل</button>
                        <a href="{{ route('dashboard.listen.index')}}" class="btn default">الغاء</a>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>



@endsection