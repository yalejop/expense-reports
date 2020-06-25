@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
    <h1>Edit Report {{ $report->id }}</h1>
    </div>
</div> 
<div class="row">
    <div class="col">
        <a class="btn btn-secondary" href="/expense_reports/create">Back</a>    
    </div>    
</div>   
<br>
<div class="row">
    <div class="col">
    <form action="/expense_reports/{{ $report->id }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Type a Title">
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection