@extends('layout.dashboard.app')
@section('content')

     <div class="tab-pane" id="tab_1">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>تواصل معنا   المحتوى الاول  </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="javascript:;" class="reload"> </a>
                    <a href="javascript:;" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form  class="horizontal-form" method="POST" action="{{ route('dashboard.contact.update' ,$contacts->id) }}"
                  enctype="multipart/form-data">
                 @csrf
                 <div class="form-body">
                    <h3 class="form-section">تعديل البيانات </h3>
                  
                  
                   
                   
                    <!--/row-->
                 
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label"> اسم الاول  </label>
                                <input type="text" class="form-control" id="first" placeholder=" اسم الاول " name="first" value="{{ $contacts->first }}">
                            </div>
                        </div>
                      
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label"> اسم الثاني </label>
                                <input type="text" class="form-control" id="second" placeholder="اسم الثاني" name="second" value="{{ $contacts->second }}">
                            </div>
                        </div>
                  
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">البريد الاكتروني</label>
                                <input type="email"  class="form-control" id="email" placeholder="البريد الاكتروني" name="email" value="{{ $contacts->email }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">رساله  بالعربي</label>
                                <textarea class="form-control" id="messages" name="messages" rows="3">{{ $contacts->messages }}</textarea>
                            </div>
                        </div>
                        <!--/span-->
                     
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">وصف المحتوي بالعربي</label>
                                <textarea class="form-control" id="description" name="description" rows="3">{{ $contacts->description }}</textarea>
                            </div>
                        </div>
              
                        <!--/span-->
                    </div>
                    
                </div>
                    <div class="form-actions right">
                        <button type="button" class="btn default">Cancel</button>
                        <button type="submit" class="btn blue">
                            <i class="fa fa-check"></i> Save</button>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
        
    </div>





@endsection
