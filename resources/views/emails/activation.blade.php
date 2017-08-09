<h1>Hello</h1>

<p>
	Please Click the following link to activate your account,
	<a href="{{ env('APP_URL') }}/activation/{{ $user->email }}/{{ $code }}">
		Activate account :)
	</a>
</p>

