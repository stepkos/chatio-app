<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/auth/forms.css') }}" type="text/css">
</head>
<body>

    <header>
        <h1>Login</h1>
    </header>

    <main>
        <article>
            <div class="container">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="fieldset">
    
                        <label for="email">Email</label>

                        <input
                            type="email"
                            id="email" 
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                            autofocus
                        >
            
                        <label for="password">Password</label>

                        <input 
                            type="password"
                            id="password"
                            name="password"
                            required
                            autocomplete="current-password"
                        >

                        <!-- temp -->
                        <!-------------------------------------->
                        
                        <!-- @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            
                            
                            <input
                            type="checkbox"
                            name="remember"
                            id="remember"
                            {{ old('remember') ? 'checked' : '' }}
                            >
                            
                            <label for="remember">
                                Remember Me
                            </label> -->
                            
                        <!-------------------------------------->
                        <!-- temp -->


                        
                        <div class="center">
                            <input type="submit" value="Log in">
                        </div>
                        
                        <div class="center pt">
                            <a href="register">Register If you already don't have account</a>
                        </div>

                    </fieldset>
                </form>
            </div>
        </article>
    </main>

    <script src="static/javascript/error.js"></script>
    <script>
        <?= (isset($_SESSION['form_error_email'])) ? 'error("email", "'.$_SESSION['form_error_email'].'");' : '' ?>
    </script>

</body>
</html>
