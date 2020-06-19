@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dahboard</div>
                @if(Auth::user()->role=="Admin")
                <div class="panel-body">
                    Halaman Admin
                </div>
                @elseif(Auth::user()->role=="Owner")
                <div class="panel-body">
                    Halaman Owner
                </div>
                @else
                <div class="panel-body">
                    Halaman Visitor
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection