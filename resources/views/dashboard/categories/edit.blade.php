@extends('layout.dashboard.app')
@section('content')
<div class="portlet light form-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span style="color:#000 !important;" class="caption-subject font-green bold uppercase"> تعديل البيانات مراقي السالكين الصفحه الاولي  </span>
        </div>
        <div class="actions">

        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
      
        <form  class="form-horizontal form-bordered"  method="POST" action="{{ route('dashboard.categorie.update', $categories->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">اسم المحتوى </label>
                    <div class="col-md-4">

                        <input class="form-control" value="{{ $categories->name_ar }}"  placeholder="الاسم" name="name_ar"  type="text" />

                    </div>
                </div>

                <div class="form-group">
                    <label for="single" class="control-label col-md-3">اختار قسم </label>
                    <div class="input-group col-md-9 select2-bootstrap-append">

                    <select id="single" name="parent_id" class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                        <option value="0">بدون قسم</option>

                        <optgroup label="الاقسام">
                            @foreach ($categoriy as $category)
                            <option  <?php if ($category->id == $categories->parent_id) echo "selected"; ?> value="{{$category->id}}">{{ $category->name_ar }}</option>

                           
                        @endforeach
                        </optgroup>
                    </select>
                </div>

                </div>
                
                <div class="form-group ">
                    <label class="control-label col-md-3">الصوره</label>
                    <div class="col-md-4">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">

                                <img src="{{asset('storage/categorie/'.$categories->photo)}}" alt="Image" style="width:100%;height:100%;">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                            <div>
                                <span class="btn default btn-file">
                                    <span class="fileinput-new">اضافة صوره </span>
                                    <span class="fileinput-exists"> تغير </span>
                                    <input type="file" id="photo" name="photo"> </span>
                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> حذف </a>
                            </div>
                        </div>

                    </div>
                </div>
               
              
              
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn blue">
                            <i class="fa fa-check"></i> تعديل</button>
                        <a href="{{ route('dashboard.categorie.index') }}" class="btn default">الغاء</a>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>





@endsection
