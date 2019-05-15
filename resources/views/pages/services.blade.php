@extends('layouts.app')

@section('content')
    <div class="container">
        @if(count($services)>0)
            <ul class="list-group">
                @foreach ($services as $value)
                    
                    <li class="list-group-item">{{$value}}</li>
                    
                @endforeach
            </ul> 
        @endif 
    </div>
@endsection