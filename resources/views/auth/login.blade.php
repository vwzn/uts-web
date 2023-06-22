<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<style>
    body {
        background-image: url('{{ asset('images/bg.jpg') }}');
        background-size: cover
    }
</style>
<body>

    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="card bg-dark">
            <div class="card-body">
                <h1 class="text-capitalize text-light">Welcome Back</h1>
                <form action="">
                    @csrf

                    <div class="mb-3">
                        <input type="email" name="email" id="email" class="form-control"
                            placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Enter your password">
                    </div>

                    <button type="submit" class="btn btn-primary text-capitalize">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
