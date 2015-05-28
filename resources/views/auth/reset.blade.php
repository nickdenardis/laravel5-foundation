@extends('app')

@section('content')
	<div class="row">
		<div class="small-12 medium-8 large-6 large-centered medium-centered columns">
			<form role="form" method="POST" action="/password/reset">
				<fieldset>
					<legend>Reset Password</legend>

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
							{!! Form::label('password_confirmation', 'Password Confirmation:', ['class' => ($errors->has('password_confirmation')?'error':'')] ) !!}
							{!! Form::password('password_confirmation', ['class' => ($errors->has('password_confirmation')?'error':'')] ) !!}
							@if ($errors->has('password_confirmation')) <small class="error">{{ $errors->first('password_confirmation') }}</small> @endif
						</div>
					</div>

					<div class="row">
						<div class="large-12 columns">
							{!! Form::submit('Reset Password', ['class' => 'button radius']) !!}
						</div>
					</div>

					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="token" value="{{ $token }}">
				</fieldset>
			</form>

		</div>
	</div>
@endsection
