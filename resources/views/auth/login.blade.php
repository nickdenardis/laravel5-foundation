@extends('app')

@section('content')
	<div class="row">
		<div class="small-6 large-centered medium-centered columns">
			<form role="form" method="POST" action="/auth/login">
				<fieldset>
					<legend>Login</legend>

					<div class="row">
						<div class="large-12 columns">
							{!! Form::label('email', 'Email Address:', ['class' => ($errors->has('email')?'error':'')] ) !!}
							{!! Form::text('email', old('email'), ['class' => ($errors->has('email')?'error':'')] ) !!}
							@if ($errors->has('email')) <small class="error">{{ $errors->first('email') }}</small> @endif
						</div>
					</div>

					<div class="row">
						<div class="large-12 columns">
							{!! Form::label('password', 'Password:', ['class' => ($errors->has('password')?'error':'')] ) !!}
							{!! Form::password('password', ['class' => ($errors->has('password')?'error':'')] ) !!}
							@if ($errors->has('password')) <small class="error">{{ $errors->first('password') }}</small> @endif
						</div>
					</div>

					<div class="row">
						<div class="large-12 columns">
							{!! Form::checkbox('remember' ) !!}
							{!! Form::label('remember', 'Remember Me') !!}
						</div>
					</div>

					<div class="row">
						<div class="large-3 medium-6 columns">
							{!! Form::submit('Login', ['class' => 'button radius']) !!}
						</div>
						<div class="large-9 medium-6 columns">
							<p class="right"><a href="/password/email">Forgot Your Password?</a></p>
						</div>
					</div>

					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</fieldset>
			</form>

		</div>
	</div>
@endsection