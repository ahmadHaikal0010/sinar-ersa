<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Sinarersa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      height: 100vh;
      background: #fef9e6; /* kuning lembut */
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Poppins', sans-serif;
      overflow: hidden;
    }

    @keyframes fadeInUp {
      0% { opacity: 0; transform: translateY(40px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    @keyframes popIn {
      0% { transform: scale(0.95); opacity: 0; }
      100% { transform: scale(1); opacity: 1; }
    }

    .login-container {
      display: flex;
      width: 820px;
      height: 520px;
      background: #fff;
      border-radius: 18px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
      overflow: hidden;
      animation: popIn 0.8s ease-out;
    }

    /* --- Bagian kiri dengan pola coklat & kuning --- */
    .login-pattern {
      width: 40%;
      background: linear-gradient(150deg, #f8e7b6 0%, #f6d27d 60%, #e9b46d 100%);
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-template-rows: repeat(3, 1fr);
      position: relative;
      overflow: hidden;
    }

    /* --- Elemen makanan melayang --- */
    .food-icon {
      position: absolute;
      font-size: 90px;
      opacity: 0.2;
      color: #5a3e2b; /* coklat lembut */
      animation: float 10s infinite ease-in-out;
    }

    @keyframes float {
      0% { transform: translateY(100%) rotate(0deg); opacity: 0.1; }
      50% { opacity: 0.4; }
      100% { transform: translateY(-120%) rotate(360deg); opacity: 0.1; }
    }

    .food-icon:nth-child(1) { left: 10%; animation-delay: 0s; font-size: 95px; }
    .food-icon:nth-child(2) { left: 50%; animation-delay: 2s; font-size: 110px; }
    .food-icon:nth-child(3) { left: 30%; animation-delay: 4s; font-size: 100px; }
    .food-icon:nth-child(4) { left: 75%; animation-delay: 6s; font-size: 90px; }

    /* --- Form Register --- */
    .login-form {
      width: 60%;
      padding: 40px 50px;
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
      font-size: 13px;
    }

    h3 {
      font-weight: 700;
      color: #3c2c1a;
      margin-bottom: 20px;
      font-size: 22px;
    }

    label {
      font-size: 13px;
      margin-bottom: 4px;
      color: #3c2c1a;
      font-weight: 500;
    }

    .form-control {
      border-radius: 8px;
      padding: 9px 12px;
      font-size: 13px;
      border: 1.3px solid #ddd;
      transition: all 0.3s ease;
      height: 40px;
      background-color: #fffef9;
    }

    .form-control:focus {
      border-color: #e1a14b;
      box-shadow: 0 0 4px rgba(225, 161, 75, 0.4);
    }

    .btn-login {
      background-color: #b0763c;
      color: white;
      border: none;
      border-radius: 8px;
      padding: 10px;
      width: 100%;
      margin-top: 12px;
      font-weight: 500;
      font-size: 14px;
      transition: all 0.3s ease;
      box-shadow: 0 3px 10px rgba(176, 118, 60, 0.25);
    }

    .btn-login:hover {
      background-color: #9b6331;
      transform: translateY(-2px);
      box-shadow: 0 5px 12px rgba(176, 118, 60, 0.3);
    }

    .text-small {
      font-size: 13px;
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

    small.text-danger {
      font-size: 12px;
    }
  </style>
</head>

<body>
  <div class="login-container">
    <div class="login-pattern">
      <div class="food-icon">🍩</div>
      <div class="food-icon">🍔</div>
      <div class="food-icon">🥐</div>
      <div class="food-icon">🍵</div>
    </div>

    <div class="login-form">
      <h6>CREATE ACCOUNT</h6>
      <h3>Register your Account</h3>

      <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-2">
          <label for="name">Name</label>
          <input id="name" type="text" name="name" value="{{ old('name') }}" class="form-control" required autofocus autocomplete="name">
          @error('name')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <!-- Email -->
        <div class="mb-2">
          <label for="email">Email</label>
          <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" required autocomplete="username">
          @error('email')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <!-- Password -->
        <div class="mb-2">
          <label for="password">Password</label>
          <input id="password" type="password" name="password" class="form-control" required autocomplete="new-password">
          @error('password')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-2">
          <label for="password_confirmation">Confirm Password</label>
          <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required autocomplete="new-password">
          @error('password_confirmation')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <button type="submit" class="btn btn-login">Register</button>

        <p class="text-center mt-3 text-small">
          Already have an account?
          <a href="{{ route('login') }}" class="text-link">Login</a>
        </p>
      </form>
    </div>
  </div>
</body>
</html>
