@extends('layout.dashboard.app')
@section('content')


<div class="portlet light form-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span style="color:#000 !important;" class="caption-subject font-green bold uppercase"> تعديل البيانات  اسم الشيخ صوتيات او مرئيات </span>
        </div>
        <div class="actions">

        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->

        <form  class="form-horizontal form-bordered" method="POST" action="{{ route('dashboard.ButtonLibrary.update', $Types->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">اسم المحتوى </label>
                    <div class="col-md-4">
                        <input class="form-control"  placeholder="الاسم" value="{{ $Types->name_ar }}" name="name_ar"  type="text" />

                    </div>
                </div>

                </div>
                    <div class="form-group">
                        <label for="single" class="control-label col-md-3">تابع الي</label>
                        <div class="input-group col-md-9 select2-bootstrap-append">
                        <select id="single" name="library_id" class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                            @foreach ($Librarys as $Library)
                            @if($Library->id == $Library->library_id)
                            <option value="{{$Library->id}}">{{$Library->name_ar}}</option>
                            @endif
                            @endforeach
                            <optgroup label="تابع الي">
                                @foreach ($Librarys as $Library)

                                <option  <?php if ($Library->id == $Types->library_id) {echo 'selected';} ?> value="{{ $Library->id }}">{{$Library->name_ar}}</option>

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
                        <a href="{{ route('dashboard.ButtonLibrary.index') }}" class="btn default">الغاء</a>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>




@endsection
