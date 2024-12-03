@extends('layout.dashboard.app')
@section('content')

    

    <div class="portlet light form-fit bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-social-dribbble font-green"></i>
                <span style="color:#000 !important;" class="caption-subject font-green bold uppercase"> تعديل البيانات  تواصل معنا المحتوي الثاني  </span>
            </div>
            <div class="actions">
    
            </div>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
          
            <form  class="form-horizontal form-bordered" method="POST" action="{{ route('dashboard.map.update', $maps->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                  

                    <div class="form-group">
                        <label class="control-label col-md-3">الخريطه</label>
                        <div class="col-md-4">
                            <input type="text"  class="form-control" value="{{ $maps->map }}" placeholder="الخريطة" name="map">
    
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">البريد الإلكتروني</label>
                        <div class="col-md-4">
                            <input type="email"  class="form-control"value="{{ $maps->email }}"  placeholder="البريد الإلكتروني" name="email">    
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">رقم الموبايل</label>
                        <div class="col-md-4">
                            <input type="text"  class="form-control" value="{{ $maps->mobile }}" placeholder="رقم الموبايل" name="mobile">
    
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label  col-md-3">العنوان </label>
                        
                        <div class="col-md-4">
                            <input type="text"  class="form-control" value="{{ $maps->address_ar }}" placeholder="العنوان بالعربي" name="address_ar">
    
                        </div>
                    </div>
                  
                  
                  
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn blue">
                                <i class="fa fa-check"></i> تعديل</button>
                            <a href="{{ route('dashboard.map.index') }}" class="btn default">الغاء</a>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>
    




@endsection
