@extends('layouts.app')
@section('title', 'Display Records')

@section('content')

{{--  Error Display  --}}
<div class="container mt-2">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @if(session('failstatus'))
        <div class="alert alert-danger">
        {{ session('failstatus') }}
    </div>
    @endif
</div>
{{--  Body  --}}
<div class="panel-body">
    <h5><b>Companies Projects!</b></h5>
     <div class="table-responsive">
      <table class="table table-striped table-bordered">
       <thead>
        <tr>
           <th width="35%">No#</th>
             <th width="35%">Company Name</th>
             <th width="50%">Project Name</th>
        </tr>
       </thead>
       <tbody>

       {{--  Dispaly Records  --}}
       @foreach($data as $datas)
       <tr>
         <th class="counterCell"></th>
            <td>{{$datas->firma->name}}</td>
            <td >{{ $datas->name }}</td>
       </tr>
         @endforeach

       </tbody>
      </table>
     </div>
</div>
<tr>
</tr>
@endsection
