@php
    $segments = request()->segments();
@endphp

@if(count($segments) && ! in_array($segments[0], ['home', 'register', 'login', 'password', 'verify', 'email']))
    <!-- main -->
    <section class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                @foreach($segments as $segment)
                    @if(end($segments) == $segment)
                        <li>{{$segment}}</li>
                    @else
                        <li><a href="/{{$segment}}">{{$segment}}</a></li>
                    @endif
                @endforeach
            </ol>
        </div>
    </section>
@endif