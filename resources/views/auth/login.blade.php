<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sinarersa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            height: 100vh;
            background: #fef9e6;
            /* kuning lembut */
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes popIn {
            0% {
                transform: scale(0.95);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* --- Container --- */
        .login-container {
            display: flex;
            width: 850px;
            height: 500px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
            overflow: hidden;
            animation: popIn 0.8s ease-out;
        }

        /* --- Left Animated Section --- */
        .login-pattern {
            width: 40%;
            background: linear-gradient(150deg, #f8e7b6 0%, #f6d27d 60%, #e9b46d 100%);
            position: relative;
            overflow: hidden;
        }

        /* --- Floating Food Icons --- */
        .food-icon {
            position: absolute;
            font-size: 80px;
            opacity: 0.18;
            color: #5a3e2b;
            /* coklat lembut */
            animation: float 10s infinite ease-in-out;
            filter: drop-shadow(0 5px 8px rgba(0, 0, 0, 0.1));
        }

        @keyframes float {
            0% {
                transform: translateY(100%) rotate(0deg);
                opacity: 0.1;
            }

            50% {
                opacity: 0.4;
            }

            100% {
                transform: translateY(-120%) rotate(360deg);
                opacity: 0.1;
            }
        }

        /* Random position */
        .food-icon:nth-child(1) {
            left: 10%;
            animation-delay: 0s;
            font-size: 95px;
        }

        .food-icon:nth-child(2) {
            left: 50%;
            animation-delay: 2s;
            font-size: 105px;
        }

        .food-icon:nth-child(3) {
            left: 30%;
            animation-delay: 4s;
            font-size: 90px;
        }

        .food-icon:nth-child(4) {
            left: 75%;
            animation-delay: 6s;
            font-size: 110px;
        }

        .food-icon:nth-child(5) {
            left: 5%;
            animation-delay: 8s;
            font-size: 85px;
        }

        /* --- Right Side: Form --- */
        .login-form {
            width: 60%;
            padding: 50px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            animation: fadeInUp 0.8s ease-in-out 0.2s both;
            background-color: #fffaf1;
        }

        h6 {
            color: #b0763c;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        h3 {
            font-weight: 700;
            color: #3c2c1a;
            margin-bottom: 25px;
        }

        .form-control {
            border-radius: 10px;
            padding: 10px 15px;
            font-size: 14px;
            border: 1.5px solid #ddd;
            transition: all 0.3s ease;
            background-color: #fffef9;
        }

        .form-control:focus {
            border-color: #e1a14b;
            box-shadow: 0 0 6px rgba(225, 161, 75, 0.4);
        }

        .btn-login {
            background-color: #b0763c;
            /* coklat lembut */
            color: white;
            border: none;
            border-radius: 10px;
            padding: 12px;
            width: 100%;
            margin-top: 15px;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(176, 118, 60, 0.2);
        }

        .btn-login:hover {
            background-color: #9b6331;
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(176, 118, 60, 0.3);
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            margin-top: 10px;
        }

        a.text-link {
            color: #b0763c;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        a.text-link:hover {
            color: #9b6331;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-pattern">
            <div class="food-icon">🍔</div>
            <div class="food-icon">🥐</div>
            <div class="food-icon">🍩</div>
            <div class="food-icon">🍵</div>
            <div class="food-icon">🍕</div>
        </div>

        <div class="login-form">
            <h6>WELCOME BACK</h6>
            <h3>Log In to your Account</h3>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                        placeholder="johnsandoe@mail.com" required autofocus>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="********" required>
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="remember-forgot">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-link">Forgot Password?</a>
                    @endif
                </div>

                <button type="submit" class="btn btn-login">Login</button>

                {{-- <p class="text-center mt-3" style="font-size: 14px;">
          Don’t have an account?
          <a href="{{ route('register') }}" class="text-link">Register</a>
        </p> --}}
            </form>
        </div>
    </div>
</body>

</html>
