@extends('layouts.dashboard')

@section('content')

<h2 class="text-center p-3">Crea un nuovo To-do</h2>

{{-- Display Validation Errors --}}
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('admin.todos.store') }}" method="post">

    {{-- Cross-Site Request Forgery --}}
    @csrf
    @method('POST')

    {{-- Description --}}
    <div class="add-items"> 
        <label for="description" class="form-label">Descrizione</label>
        <input type="text" class="form-control todo-list-input" placeholder="Cos'hai da fare?" id='description' name='description' value="{{ old('description') }}"> 
    </div>
    
    {{-- Submit --}}
    <div class="d-flex justify-content-center">
        <input type="submit" value="🔐 Salva" class="add btn btn-success font-weight-bold todo-list-add-btn mt-3">
    </div>
</form>
@endsection