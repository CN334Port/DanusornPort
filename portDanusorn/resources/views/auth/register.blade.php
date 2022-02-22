<x-guest-layout>
    <!-- <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card> -->
    <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>
<style>
    html,body {
	height: 100%;
    }

    body.my-login-page {
        background-color: #f7f9fb;
        background: url(../../assets/img/24.jpg);
        font-size: 14px;
    }

    .my-login-page .brand {
        width: 90px;
        height: 90px;
        overflow: hidden;
        border-radius: 50%;
        margin: 40px auto;
        box-shadow: 0 4px 8px rgba(0,0,0,.05);
        position: relative;
        z-index: 1;
    }

    .my-login-page .brand img {
        width: 100%;
    }

    .my-login-page .card-wrapper {
        width: 400px;
    }

    .my-login-page .card {
        border-color: transparent;
        box-shadow: 0 4px 8px rgba(0,0,0,.05);
    }

    .my-login-page .card.fat {
        padding: 10px;
    }

    .my-login-page .card .card-title {
        margin-bottom: 30px;
    }

    .my-login-page .form-control {
        border-width: 2.3px;
    }

    .my-login-page .form-group label {
        width: 100%;
    }

    .my-login-page .btn.btn-block {
        padding: 12px 10px;
    }

    .my-login-page .footer {
        margin: 40px 0;
        color: #888;
        text-align: center;
    }

    @media screen and (max-width: 425px) {
        .my-login-page .card-wrapper {
            width: 90%;
            margin: 0 auto;
        }
    }

    @media screen and (max-width: 320px) {
        .my-login-page .card.fat {
            padding: 0;
        }

        .my-login-page .card.fat .card-body {
            padding: 15px;
        }
    }
</style>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
                        <img src="/assets/img/logo3.png" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form method="POST" action="{{ route('register') }}">
                            @csrf
							<form method="POST" class="my-login-validation" novalidate="">
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                    <h2 class="sr-only">Login Form</h2>
								<div class="form-group">
                                    <x-label for="name" :value="__('Name')" />
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

                                <div class="form-group">
                                    <x-label for="email" :value="__('Email')" />
                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="form-group">
                                <x-label for="password" :value="__('Password')" />

                                    <x-input id="password" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                                
								</div>

                                <div class="form-group">
                                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-input id="password_confirmation" class="block mt-1 w-full"
                                                type="password"
                                                name="password_confirmation" required />
                                
                                
								</div>


								<div class="form-group m-0">
                                <button type="submit" class="btn btn-primary btn-block" href="{{route('login')}}">
										register
								</button>
								</div>
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
							</form>
						</div>
					</div>
					<div class="footer">
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>
</x-guest-layout>
