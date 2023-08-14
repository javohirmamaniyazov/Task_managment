<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task App - Login</title>
    <link rel="icon" style="border: none; border-radius: 50%" href="data:image/png;base64,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">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            line-height: 1.6;
            background-color: #F3F4F6;
            margin-top: 100px
        }

        .form-container {
            max-width: 400px;
            margin: auto;
            padding: 2rem;
            background-color: #FFF;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 0.5rem;
            text-align: center;
        }

        .form-heading {
            font-size: 30px;
            margin-bottom: 1rem;
        }

        .input-group {
            margin-bottom: 1.5rem;
        }

        .input-label {
            font-weight: 600;
            display: block;
            text-align: left;
        }

        .text-input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #E5E7EB;
            border-radius: 0.25rem;
        }

        .input-error {
            color: #e74c3c;
            text-align: left;
            margin-top: 0.25rem;
        }

        .flex {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 1.5rem;
        }

        .link {
            color: #3490dc;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .link:hover {
            color: #2779bd;
        }

        .primary-button {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            color: #FFF;
            background-color: #3490dc;
            border-radius: 0.25rem;
            transition: background-color 0.2s ease;
            cursor: pointer;
        }

        .primary-button:hover {
            background-color: #2779bd;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <!-- Session Status -->
        <div class="mb-4">
            @if (session('status'))
                <div class="input-error">{{ session('status') }}</div>
            @endif
        </div>

        <div class="form-heading">Login</div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="input-group">
                <label for="email" class="input-label">Email</label>
                <input id="email" class="text-input" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" />
                @if ($errors->has('email'))
                    <div class="input-error">{{ $errors->first('email') }}</div>
                @endif
            </div>

            <div class="input-group">
                <label for="password" class="input-label">Password</label>
                <input id="password" class="text-input" type="password" name="password" required autocomplete="current-password" />
                @if ($errors->has('password'))
                    <div class="input-error">{{ $errors->first('password') }}</div>
                @endif
            </div>

            <div class="input-group">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex">
                @if (Route::has('password.request'))
                    <a class="link" href="{{ route('register') }}">Don't have account, yet? Register</a>
                @endif
                <button type="submit" class="primary-button">Log in</button>
            </div>
        </form>
    </div>
</body>
</html>
