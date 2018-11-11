@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card header="Login">
                <b-form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <b-form-group
                        label="Email address:"
                        label-for="email"
                        description="We'll never share your email with anyone else.">
                        <b-form-input id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="example@gmail.com"
                            required
                            autofocus>
                        </b-form-input>
                    </b-form-group>

                    <b-form-group
                        label="Password"
                        label-for="password">
                        <b-form-input id="password"
                            type="password"
                            name="password"
                            value="{{ old('password') }}"
                            required>
                        </b-form-input>
                    </b-form-group>

                    <b-form-group>
                        <b-form-checkbox name="remember"
                            {{ old('remember') ? 'checked="true"' : ''}}>
                            Remember Me
                        </b-form-checkbox>
                    </b-form-group>

                    <b-button
                        type="submit"
                        variant="primary">
                        Login
                    </b-button>
                    <b-button href="{{ route('password.request') }}" variant="link">
                        Forgot Your Password?
                    </b-button>

                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
