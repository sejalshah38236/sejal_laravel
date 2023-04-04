<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
          crossorigin="anonymous">
    <style>
        .login{
            background: url('./dist/images/login-new.jpeg')
        }
    </style>
    <title>Register</title>
</head>
<body class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
    <div class="w-full max-w-lg">
        <div class="leading-loose">
            <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
                <p class="text-gray-800 font-medium">Lockscreen</p>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="password">Password</label>
                    <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="text" required="" placeholder="*******" aria-label="password">
                  </div>
                  <div>
                  <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Login</button>
                  </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>