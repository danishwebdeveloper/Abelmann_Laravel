@extends('layouts.app')
@section('title', 'Search Companies Record')

{{-- Body --}}
@section('content')
{{-- Companies Record --}}
<form action="{{ route('record.store') }}" method="POST">
    @csrf
    <div class="disp">
    <h5>Projects Dates:</h5>
    <div class="form-group">
        <label for="project_start">Select Start date:</label>

        {{-- Start Date --}}
        <input type="date" id="project_start"
               name="project_start"
               value="1994-04-01"
               min="1950-01-01"
               max="2050-12-31">
    </div>

    <div class="form-group">
        <label for="project_end">Select Ends date:</label>

        {{-- End Date --}}
        <input type="date" id="project_end"
               name="project_end"
               value="2009-09-27"
               min="1950-01-01"
               max="2050-12-31">
    </div>
    <input type="submit" name="changeDate" id="changeDate" value="Submit" class="btn btn-success">
</div>
</form>
@endsection

