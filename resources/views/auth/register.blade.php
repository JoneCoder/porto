<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Login/Sign-In</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('frontendAsset/loginSignup/css/style.css') }}">


</head>
<body>

<div class="logmod">
    <div class="logmod__wrapper">
        <span class="logmod__close">Close</span>
        <div class="logmod__container">
            <ul class="logmod__tabs">
                <li data-tabtar="lgm-1"><a href="#">Sign Up</a></li>
                <li data-tabtar="lgm-2"><a href="#">Login</a></li>
            </ul>
            <div class="logmod__tab-wrapper">
                <div class="logmod__tab lgm-1">
                    <div class="logmod__heading">
                        <span class="logmod__heading-subtitle">Enter your personal details <strong>to create an acount</strong></span>
                    </div>
                    <div class="logmod__form">

                        <form accept-charset="utf-8" action="{{ route('register') }}" method="post" class="simform">
                            @csrf
                            <div class="sminputs">
                                <div class="input full">
                                    <label class="string optional" for="user-name">Username*</label>
                                    <input class="string optional @error('username') is-invalid @enderror" data-toggle="tooltip" data-placement="bottom" title="Type Username" data-html="true" maxlength="255" id="user-name" placeholder="Username" type="text" size="50" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus />
                                </div>
                            </div>
                            <div class="sminputs">
                                <div class="input full">
                                    <label class="string optional" for="user-email">Email*</label>
                                    <input class="string optional @error('email') is-invalid @enderror" data-toggle="tooltip" data-placement="bottom" title="Input Valid E-mail Address" data-html="true" maxlength="255" id="user-email" placeholder="Email" type="email" size="50" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                </div>
                            </div>

                            <div class="sminputs">
                                <div class="input string optional">
                                    <label class="string optional" for="user-pw">Password *</label>
                                    <input class="string optional @error('password') is-invalid @enderror" data-toggle="tooltip" data-placement="bottom" title="Password Must be 8 Charters" data-html="true" maxlength="255" id="user-pw" placeholder="Password" type="password" size="50" name="password" value="{{ old('password') }}" required autocomplete="new-password" />
                                </div>
                                <div class="input string optional">
                                    <label class="string optional" for="user-pw-repeat">Repeat password *</label>
                                    <input class="string optional" data-toggle="tooltip" data-placement="bottom" title="Confirm Password" data-html="true" maxlength="255" id="user-pw-repeat" placeholder="Repeat password" type="password" size="50" name="password_confirmation" required autocomplete="new-password" />
                                </div>
                            </div>
                            <div class="simform__actions">
                                <button class="sumbit" name="commit" type="sumbit" >Create Account</button>
                                <span class="simform__actions-sidetext">By creating an account you agree to our <a class="special" href="#" target="_blank" role="link">Terms & Privacy</a></span>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="logmod__tab lgm-2">
                    <div class="logmod__heading">@error('email') <span id="errorField" class="errorField">{{ $message }} </span> @else <span class="logmod__heading-subtitle">Enter your email and password <strong>to sign in</strong></span> @enderror
                    </div>
                    <div class="logmod__form">

                        <form accept-charset="utf-8" action="{{ route('login') }}" method="post" class="simform">
                            @csrf
                            <div class="sminputs">
                                <div class="input full">
                                    <label class="string optional" for="user-name">Email*</label>
                                    <input class="string optional @error('email') is-invalid @enderror" data-toggle="tooltip" data-placement="bottom" title="Input Your E-mail Address" data-html="true" maxlength="255" id="user-email" placeholder="Email" type="email" size="50" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                </div>
                            </div>
                            <div class="sminputs">
                                <div class="input full">
                                    <label class="string optional" for="user-pw">Password *</label>
                                    <input class="string optional @error('password') is-invalid @enderror" data-toggle="tooltip" data-placement="bottom" title="Input Your Password" data-html="true" maxlength="255" id="user-pw" placeholder="Password" type="password" size="50" name="password" required autocomplete="current-password" />
                                    <span class="hide-password">Show</span>
                                </div>
                            </div>
                            <div class="simform__actions">
                                <button class="sumbit" name="commit" type="sumbit" >Log In</button>
                                <span class="simform__actions-sidetext">
                                    @if (Route::has('password.request'))
                                        <a class="special" role="link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}<br/>Click here
                                    </a>
                                    @endif
                                </span>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function intensify(intense) {
        intense.addClass('animated shakeit').delay(2000).queue(function(){
            intense.removeClass('animated shakeit').dequeue();
        });
    }
    intensify($('#errorField'));
</script>

<script>
    $(document).ready(function(){
        $("[data-toggle=tooltip]").tooltip();
        $("[data-toggle=tooltip]").hover(function(){
            $('.tooltip').css('left',parseInt($('.tooltip').css('left')) - 47 + 'px' )
        });
    });
</script>



<script  src="{{ asset('frontendAsset/loginSignup/js/index.js') }}"></script>




</body>

</html>
