@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-2 mb-4">
                @livewire('add-task')
            </div>

            <div class="card p-2 mb-4">
                @livewire('tasks')
            </div>
        </div>
    </div>
</div>
@endsection
