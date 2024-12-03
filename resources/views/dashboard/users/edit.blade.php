@extends('layout.dashboard.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header" >
        <h1>
          المشرفين
        </h1>
        <ol class="breadcrumb" >
            <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i>لوحة التحكم</a></li>
            <li><a href="{{route('dashboard.users.index')}}">المشرفين</a></li>
            <li class="active">تعديل</li>
        </ol>
        
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"> تعديل مشرف</h3>
               
            </div>
            {{-- end of box-header --}}
            <div class="box-body">
           
                
                <form action="{{route('dashboard.users.update',$user->id)}}" method="POST" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    {{ method_field('put')}}
                    <div class="form-group">
                        <label>الاسم بالكامل</label>
                        <input type="text" name="name" class="form-control" value="{{$user->name}}">
                    </div>

                   

                    <div class="form-group">
                        <label>البريد الألكترونى</label>
                        <input type="email" name="email" class="form-control" value="{{$user->email}}">
                    </div>

                    <div class="form-group">
                        
                        <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> تعديل</button>
                    </div>

                </form>
                {{-- end of form --}}

            </div>
            {{-- end of box-body --}}
        </div>
        {{-- end of box-primary --}}
    </section>
</div>
@endsection