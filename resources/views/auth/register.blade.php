<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        .main {
            display: flex;
            margin: 20vh;
            justify-content: center;
            font-family: 'Inter', sans-serif;
            font-size: 20px;
        }

        .header {
            justify-content: center;
        }

        .inner-container .content {
            margin-bottom: 10px;
        }

        .inner-container {
            border: 1px solid gray;
            border-radius: 10px;
            padding: 20px;
        }

    </style>

</head>
<body>
    <div class='main'>
        <div class='inner-container' >

            <div class='header'>
                <h1>Register</h1>
                <p>Create a new account</p>
            </div>

            <form action="" method="post">
                @csrf
                <div class='content'>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="ex: John Doe">
                </div>

                <div class='content'>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="ex: john@example.com">
                </div>

                <div class='content'>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="ex: password123">
                </div>

                <button type="submit" class="btn">Register</button>
            </form>

            <div>
                Already have an account?  <a href="{{ route('login') }}">Log in</a>
            </div>
        </div>
    </div>

    <a href="{{ route('login') }}">Already have an account? Log in</a>

</body>
</html>