@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('add tasks') }}</div>

                <div class="card-body">
                  ({[Form::open(['route' => ['tasks.store', methode=>'POST']])
                  {{ csrf_field() }}
                  
                  <div class="form-group">
                  <label>tittle </label>
                  {{ form::text('tittle',null ['class'=>form-controller'])}}
                  </div>

                  <div class="form-group">
                  <button class="btn-primary">saved</button>
                  </div>

                  {{form::close()}}

                  </div>
                </div>
            </div>
        </div>
    </div>

@endsection
