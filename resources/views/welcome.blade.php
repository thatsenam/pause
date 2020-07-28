@extends('layouts.app')

@section('content')




<div class="flex-center position-ref ">
    <!-- @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </div>
    @endif -->

    <div class="content">



        <div class="forms" style="display: none;">
            <form action="handleForm" method="post" enctype="multipart/form-data">
                @csrf
                <p></p>
                What is your name?
                <input type="text" name="name">
                <br>
                <br>
                Choose your avatar
                <input type="file" name="image">

                <br><br>
                <button type="submit">Save Data</button>
            </form>

        </div>
        <div class="container align-self-center align-items-center">
            <div class="row justify-content-center ">
                <div class="col-md-8">

                    <div class="card p-2">


                        <div class="card-body">
                            <p class="h4 p-2 mb-0 font-weight-bold text-center align-self-center ">Website Under Development</p>
                            @guest
                           
                        @else
                        <p class="text-center p-0  align-self-center">
                            <a href="/home">Visit Dashboard</a>
                        </p> 
                        
                        @endguest
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection