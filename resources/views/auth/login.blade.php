@extends('auth/index')

@section('content')
<!--Content should be here-->
<main>
    <section class="container">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <form class="p-5 shadow">
                    <div class="mb-4">
                        <label class="form-label" for="email-input">Email</label>
                        <input type="email" id="email-input" placeholder="Enter your emal" class="form-control stext-111 cl2 plh3 size-116 p-l-62 p-r-30" />
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="password-input">Password</label>
                        <input type="password" id="password-input" placeholder="Enter your password" class="form-control stext-111 cl2 plh3 size-116 p-l-62 p-r-30" />
                    </div>
                    <button type="submit" class="mb-4 btn btn-primary">Login</button>
                    <div>
                        <a class="btn-link" href="{{route('register')}}">Create account.</a>
                    </div>
                    <div class="mb-2">
                        <a class="btn-link" href="{{route('forget_password')}}">Forget password.</a>
                    </div>
                    <div>
                        <a class="btn btn-secondary" href="{{route('forget_password')}}">Return to Home.</a>
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{asset('assets/images/login.png')}}" alt="Login illustrator image" style="max-height: 500px;" class="object-fit-contain w-100" />
            </div>
        </div>
    </section>
</main>
@endsection
