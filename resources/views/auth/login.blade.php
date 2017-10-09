<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ColNET</title>

        
        <link href="/css/bulma.css" rel="stylesheet" type="text/css">
        <link href="/css/font-awesome.css" rel="stylesheet" type="text/css">

    </head>
    <body>
       @include('layouts.header')
       <div class="container">
           <section class="section">
               <div class="columns m-t-10">
                   <div class="column is-half">
                       <h2 class="subtitle">Worker Login</h2>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="field{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="label">E-Mail Address</label>

                            <div class="control has-icons-left has-icons-right">
                                <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autofocus>
                                  <span class="icon is-small is-left">
                                        <i class="fa fa-envelope"></i>
                                   </span>
                                @if ($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                                    
                                @endif
                            </div>
                        </div>

                        <div class="field{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="label">Password</label>

                            <div class="control has-icons-left has-icons-right">
                                <input id="password" type="password" class="input" name="password" required>
                                <span class="icon is-small is-left">
                                        <i class="fa fa-lock"></i>
                                     </span>
                                @if ($errors->has('password'))
                                <p class="help is-danger">{{ $errors->first('password') }}</p>
                                    
                                @endif
                            </div>
                        </div>

                        <div class="field">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="control">
                                    <label class="checkbox">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="field is-grouped">
                            <div class="control">
                                <button type="submit" class="button is-primary">
                                    Login
                                </button>
                            </div>
                            <div class="control">
                                <a class="button is-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
               </div>
                   
                   
                   
                    <div class="column is-half">
                       <h2 class="subtitle">Creator Login</h2>
                    <form class="form-horizontal" method="POST" action="/login/creator">
                        {{ csrf_field() }}

                        <div class="field{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="label">E-Mail Address</label>

                            <div class="control has-icons-left has-icons-right">
                                <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autofocus>
                                  <span class="icon is-small is-left">
                                        <i class="fa fa-envelope"></i>
                                   </span>
                                @if ($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                                    
                                @endif
                            </div>
                        </div>

                        <div class="field{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="label">Password</label>

                            <div class="control has-icons-left has-icons-right">
                                <input id="password" type="password" class="input" name="password" required>
                                <span class="icon is-small is-left">
                                        <i class="fa fa-lock"></i>
                                     </span>
                                @if ($errors->has('password'))
                                <p class="help is-danger">{{ $errors->first('password') }}</p>
                                    
                                @endif
                            </div>
                        </div>

                        <div class="field">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="control">
                                    <label class="checkbox">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="field is-grouped">
                            <div class="control">
                                <button type="submit" class="button is-primary">
                                    Login
                                </button>
                            </div>
                            <div class="control">
                                <a class="button is-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
               </div>
                   
               </div>
       </section>
       </div>
   </body>
</html>
        