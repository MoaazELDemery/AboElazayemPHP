@extends('layout.dashboard.app')
@section('content')




<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject bold uppercase">Employees  </span>
        </div>
        <div class="btn-group" style="margin-right:10px ;">
                    <a class="btn btn-default mt-ladda-btn ladda-button btn-outline" href="{{ route('dashboard.Employee.create') }}"> <i class="fa fa-plus"></i> اضافة</a>

                </div>
       
        <div class="tools"> </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_1">

            <thead>
                <tr>
                  

                    <th> رقم </th>
                    <th> name  </th>
                    <th> email </th>
                    <th> phone </th>
                   
                </tr>
            </thead>
            <tbody>
               
              
                @foreach ($Employees as $index=>$Employee)
                <tr>
                   

                    <td> {{ $index+1 }} </td>
                    <td>
                        {{ $Employee->name }}
                    </td>

                    <td>
                        {{ $Employee->email }}
                    </td>
                    <td>
                        {{ $Employee->phone }}
                    </td>
                   
                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>







@endsection