<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<body>
    <!-- Logo -->
    <div class="bg-red-400 h-screen p-10 flex flex-row items-center">
        <div class="bg-blue-200 w-3/6 h-full my-10 ml-10 flex flex-col justify-center text-center">
            <img class=" w-56 h-56 mx-auto mb-8" src="{{asset('/img/w.jpg') }}">
            <p class="text-gray-500 text-5xl font-medium ">Wikipedia</p>
        </div>
        <!-- กล่องข้อความ -->
        
        <div class="bg-green-500 w-3/6 h-full p-5 my-10 mr-10 flex flex-col justify-center">
           <p class="text-stone-300 text-base font-medium ml-52 mb-10 ">Welcome back! Please login to your account.</p>
            <label class="text-stone-500 text-left mb-3 ml-44 mr-auto" for="Username">
                Username
            </label>
            <input class="w-1/2 h-10 bg-stone-100 rounded pl-2 mb-5 mx-auto" type="text" id="username" name="username" placeholder="Username">

            <label class="text-stone-500 text-left ml-44 mb-3" for="Password">
                Password
            </label>
            <input class="w-1/2 h-10 bg-stone-100 rounded pl-2 mx-auto mb-3" type="password" id="password" name="password" placeholder="Password">

            <div class="bg-blue-300 m-2 h-2 flex flex-row items-center">
            <input type="checkbox" class="ml-2 ml-44 "> <label class="text-gray-500 text-base font-medium pl-2">Remember me</label>
            <a href="/" class="text-gray-500 text-base font-medium ml-20">Forgot Password</a>
            </div>
        
            <div class="flex flex-row item-center m-8 ">
            <a href="" class="h-12 w-44 bg-rose-400 rounded text-center text-white text-base font-medium hover:bg-rose-300 ml-36 p-2 mr-6 ">Login</a>
            <a href="" class="h-12 w-44 bg-white rounded border-2 border-blue-400 text-center text-gray-500 text-base font-medium p-2">Sign Up</a>
            </div>

            <div>
            <p class="text-stone-300 text-xs font-medium mt-2.5 ml-72">Term of use. Privacy policy</p>
            </div>


        </div>


    </div>
</body>

</html>