@extends('layout.dashboard.app')
@section('content')

<script>
    window.onload = function() {
        tinymce.init({
            selector: '.tinymce',
            plugins: 'casechange',
            toolbar: 'casechange',
            height: '300px',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        })
    }
</script>

<div class="portlet light form-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span style="color:#000 !important;" class="caption-subject font-green bold uppercase"> تعديل البيانات تفسير القران   </span>
        </div>
        <div class="actions">

        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
      
        <form  class="form-horizontal form-bordered" method="POST" action="{{ route('dashboard.tafser.update', $tafsers->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
              
               

                
                <div class="form-group">
                    <label class="control-label col-md-3">التفسير </label>
                    <div class="col-md-9">
                       
                        <textarea class="form-control tinymce" id="tafser_ar" name="tafser_ar" rows="3">{!!$tafsers->tafser_ar!!}</textarea> 
                    </div>
                </div>

                <div class="form-group">
                    <label for="single" class="control-label col-md-3"> اسم الامام </label>
                    <div class="col-md-9">
                    <select id="single" name="imam_id" class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                        <option></option>
    
                        <optgroup label="الامام">
                            @foreach ($imam as $imams)
                            <option <?php if ($imams->id == $tafsers->imam_id) echo "selected"; ?> value="{{$imams->id}}">{{$imams->name_ar}}</option>
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
                        <a href="{{ route('dashboard.tafser.index')}}" class="btn default">الغاء</a>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>




@endsection