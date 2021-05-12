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


    <script src="static/javascript/error.js"></script>
    <script>
        <?= (isset($_SESSION['form_error_email'])) ? 'error("email", "'.$_SESSION['form_error_email'].'");' : '' ?>
        <?= (isset($_SESSION['form_error_name'])) ? 'error("name", "'.$_SESSION['form_error_name'].'");' : '' ?>
        <?= (isset($_SESSION['form_error_surname'])) ? 'error("surname", "'.$_SESSION['form_error_surname'].'");' : '' ?>
        <?= (isset($_SESSION['form_error_password'])) ? 'error("password", "'.$_SESSION['form_error_password'].'");' : '' ?>
        <?= (isset($_SESSION['form_error_confirm_password'])) ? 'error("confirm_password", "'.$_SESSION['form_error_confirm_password'].'");' : '' ?>
    </script>


</body>
</html>