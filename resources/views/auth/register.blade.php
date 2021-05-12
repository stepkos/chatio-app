<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/auth/forms.css') }}" type="text/css">
</head>
<body>

    <header>
        <h1>Register</h1>
    </header>

    <main>
        <article>
            <div class="container">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="fieldset">
    
                        <label for="name">Name</label>
                        <input
                            type="text"  
                            id="name"  
                            name="name" 
                            value="{{ old('name') }}" 
                            required 
                            autocomplete="name" 
                            autofocus 
                        >
                        
                        <label for="email">Email</label>
                        <input
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}"  
                            required 
                            autocomplete="email"
                        >
            
                        <label for="password">Password</label>
                        <input 
                            type="password"  
                            id="password"  
                            name="password" 
                            required  
                            autocomplete="new-password" 
                        >

                        <label for="confirm_password">Confirm password</label>
                        <input 
                            type="password" 
                            id="confirm_password" 
                            name="password_confirmation" 
                            required 
                            autocomplete="new-password"
                        >
                        
                        <div class="center">
                            <input type="submit" value="Register">
                        </div>
                        
                        <div class="center pt">
                            <a href="login">Login if you already have account</a>
                        </div>

                    </fieldset>
                </form>
            </div>
        </article>
    </main>


    <script src="{{ asset('js/auth/error.js') }}"></script>

    @error('name')
        <script>
            error("name", "{{ $message }}");
        </script>    
    @enderror

    @error('email')
        <script>
            error("email", "{{ $message }}");
        </script>    
    @enderror

    @error('password')
        <script>
            error("password", "{{ $message }}");
        </script>    
    @enderror

</body>
</html>