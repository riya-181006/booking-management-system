@extends('layout.baseview')
@section('title','Register')
@section('style')
<style>
    @section('style')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    * { font-family: 'Poppins', sans-serif; }

    body {
        background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
        min-height: 100vh;
    }

    .card {
        border: none;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4), 0 0 40px rgba(41, 182, 246, 0.15);
        backdrop-filter: blur(10px);
        background: rgba(255, 255, 255, 0.97);
        animation: slideUp 0.5s ease;
    }

    @keyframes slideUp {
        from { opacity: 0; transform: translateY(30px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    h5.card-title {
        font-weight: 700;
        font-size: 1.6rem;
        color: #0d1b2a;
    }

    p.card-title {
        color: #6c757d;
        font-size: 0.85rem;
    }

    .form-control {
        border-radius: 10px;
        border: 1.5px solid #e0e0e0;
        padding: 10px 15px;
        transition: all 0.3s ease;
        font-size: 0.9rem;
    }

    .form-control:focus {
        border-color: #29b6f6;
        box-shadow: 0 0 0 3px rgba(41, 182, 246, 0.2);
    }

    label {
        font-weight: 500;
        font-size: 0.85rem;
        color: #333;
    }

    .btn-primary {
        background: linear-gradient(135deg, #29b6f6, #0277bd);
        border: none;
        border-radius: 10px;
        padding: 10px 30px;
        font-weight: 600;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        width: 100%;
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #0277bd, #01579b);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(2, 119, 189, 0.4);
    }

    .btn-primary:active {
        transform: translateY(0);
    }

    a { color: #29b6f6; font-weight: 500; }
    a:hover { color: #0277bd; }
</style>
@endsection
</style>
@endsection
@section('content')
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="card" style="width:25rem">
                <div class="mt-4 mb-2">
                    <img class="mx-auto d-block" src="{{asset('assets/images/logo.png')}}" alt="logo" width="60">
                </div>
                <div class="mt-2 mb-2">
                    <h5 class="card-title text-center">Signup</h5>
                </div>
                <div class="mt-2 mb-2">
                    <p class="card-title text-center">Kindly Provide your Information for Registration</p>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register.post') }}">
                        @csrf
                        {{-- Show validation errors --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <p class="mb-0">{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                        {{-- Show success message --}}
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="phone_no" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="Phone Number">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <label for="confirmpassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmpassword" name="password_confirmation" placeholder="Renter Password">
                        </div>
                        <div class="mb-3">                           
                            <button type="submit" class="btn btn-primary mb-3" >Register</button>
                            
                        </div>
                        <div class="mb-3">                           
                            <p class="card-title ">Already have an account? <a href="{{route('login')}}" style="text-decoration:none">Click to login</a></p>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('customjs')
<script>
</script>
@endsection