@extends('app')

@section('content')
	<div class="row">
		<div class="large-6 medium-8 small-12 large-centered medium-centered columns">
			@if (session('status'))
				<div data-alert class="alert-box success radius">
					{{ session('status') }}
					<a href="#" class="close">&times;</a>
				</div>
			@endif

			<form role="form" method="POST" action="/password/email">
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
							{!! Form::submit('Send Password Reset', ['class' => 'button radius']) !!}
						</div>
					</div>

					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</fieldset>
			</form>

		</div>
	</div>
@endsection