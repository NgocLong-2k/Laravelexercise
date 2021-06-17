@extends('admin.layouts.login')
@section('title', 'Login')
@section('content')
    <main class="form-signin">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <p>{{session()->get('errors')->first()}}</p>
            </div>
        @endif
        <form action="{{route('login.post')}}" method="post">
            @csrf
            <img class="mb-4" src="{{ asset('assets/img/bootstrap-logo.svg')}}" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="text" name="email" value="{{old('email', '')}}" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" name="remember" value="1"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </main>
@stop
