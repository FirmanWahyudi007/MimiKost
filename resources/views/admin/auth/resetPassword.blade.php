<!DOCTYPE html>
<html lang="en" data-theme="mytheme">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mimi Kost Admin | Reset Password</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>

    <div class="container mx-auto grid h-screen place-items-center">
        <div class="card w-[75vw] bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Reset Password</h2>
                <p class="mb-2">Tolong masukkan email pada kolom dibawah</p>
                <form action="">
                    <div class="flex flex-col gap-y-3 md:flex-row md:place-items-center md:gap-3 ">

                        <div class="form-control w-full">
                            <input type="email" placeholder="Email" class="input input-bordered w-full" />
                        </div>
                        <button class="btn btn-primary w-full md:w-max">Kirim Permintaan</button>
                </form>
            </div>
        </div>
    </div>
    </div>

</body>

</html>