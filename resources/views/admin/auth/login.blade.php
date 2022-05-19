<!DOCTYPE html>
<html lang="en" data-theme="mytheme">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mimi Kost Admin | Login</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>

    <div class="container mx-auto grid h-screen place-items-center">
        <div class="card w-72 lg:w-96 max-w-full bg-base-100 shadow-xl">
            <div class="avatar mx-auto">
                <div class="w-36 rounded-full">
                    <img src="{{ asset('images/user-blank.png') }}" />
                </div>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" placeholder="Email" class="input input-bordered w-full" />
                        <label class="label">
                            <span class="label-text-alt text-red-600">Error</span>
                        </label>
                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Passsword</span>
                        </label>
                        <input type="password" placeholder="Password" class="input input-bordered w-full" />
                        <label class="label">
                            <span class="label-text-alt text-red-600">Error</span>
                        </label>
                    </div>
                    <a href="#" class="float-right block mb-2 text-blue-400 underline">Lupa password?</a>
                    <div class="form-control w-full">
                        <button class="btn btn-primary">Login</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>