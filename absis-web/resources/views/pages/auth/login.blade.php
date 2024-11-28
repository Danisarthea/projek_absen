@include('components.partials.top')

<div class="section">
    <div class="container-fluid h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-lg-6">
                <div class="card shadow-lg border-light-subtle">
                    <div class="row g-0">
                        <div class="col-12 col-md-6 text-bg-primary d-none d-md-block">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <div class="col-10 col-xl-8 py-3">
                                    <img class="img-fluid rounded" src="{{ asset('img/login.png') }}" width="300" height="120">
                                </div>
                            </div>
                        </div>
                        <!-- Form Column -->
                        <div class="col-12 col-md-6">
                            <div class="card-body p-3 p-md-4 p-xl-5">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-4 text-center">
                                            <img class="mb-2" src="{{ asset('img/LOGO.png') }}" style="height: 50px;">
                                            <h3>Login</h3>
                                        </div>
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row gy-3 gy-md-4 overflow-hidden">
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="name@example.com">
                                        </div>
                                        <div class="col-12">
                                            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                            <input id="password" type="password" class="form-control" name="password" required>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid pt-3 pb-3">
                                                <button class="btn bsb-btn-xl btn-primary" type="submit">Log in</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








{{--<div class="section">
    <div class="container-fluid h-100" style="background-image: url('{{ asset('img/background.jpg') }}'); background-size: cover;">

        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-4">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header text-center">
                        <img class="" src="{{ asset('img/LOGO.png') }}" style="height: 50px;">
                        <div class="text-center bg-primary text-white mt-3">
                        <h4 class="font-weight-light p-2">Log In</h4>
                    </div>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autofocus placeholder="name@example.com">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary w-100">
                                    LogIn
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}