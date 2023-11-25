<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="style.css">
    <script src="login.js"></script>
</head>
<?php
session_start();
if (isset($_SESSION['username'])) {
    header('Location: index.php');
}
?>
<body class="flex  h-[100vh] bg-[#252234] text-white justify-center flex-col items-center" >
    <div class="wrapper flex w-[95vw] h-[90vh] rounded ">
        <div class="wrapper_left pl-6 flex flex-col items-center justify-center w-[50%] h-full  bg-[]">
            <div class="container border p-4 rounded w-[70%] h-[80%]  flex flex-col justify-around ">
                <div class="logo flex items-center ">
                    <a href="#">
                        <img class="h-14 " src="asset/logo.png" alt="">
                    </a>
                    <a href="#">
                        <span class="text-[1.8rem] text-[#8740f1]">Hoodies shop</span>
                    </a>
                </div>
    
                <div class="slogan ml-3 ">
                    <h2 class="text-3xl" >Log in to your Account</h2>
                    <p>welcome back! select method to log in</p>
                </div>
                <div class="google facebook text-center">
                    <a href="#" class="text-[#8740f1] btn_btn bg-[#ffffff73] p-2 px-3 rounded hover:text-[#8740f1]">
                        <img class="w-6 h-6 inline " src="asset/google.png" alt="">
                        <span class="text-xl text-white" >Google</span>
                    </a>
                    <a href="#" class="text-[#8740f1] btn_btn bg-[#ffffff73] p-2 px-3 rounded hover:text-[#8740f1]">
                        <img class="w-6 h-6 inline" src="asset/facebook.png" alt="">
                        <span class="text-xl text-white" >Facebook</span>
                    </a>
                </div>
    
                <p class="text-center">or continue</p>
    
                <div class="form_box">
                    <form action="Login.php" method="post">
                        <div class="email my-3 relative">
                            <input required placeholder="Enter Your Email" class="block px-8 m-1 w-[90%] h-9 rounded  border-b-2 bg-[#ffffff12] border-[red]" type="email" name="email" id="email">
                        <svg class="w-[1.4rem] h-[1.4rem] absolute top-[0.4rem] left-2 " height="1em" viewBox="0 0 512 512"><style>svg{fill:#300455}</style><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg>
                        </div>
                        <div class="password my-3 relative">
                            <input required placeholder="Enter Yor Password" class="block px-8 m-1 w-[90%] h-9 rounded  border-b-2 bg-[#ffffff12] border-[red]" type="password" name="password" id="passinput">
                       
                        <svg id="passview" class="w-[1.4rem] rounded-full bg-[white] h-[1.4rem] absolute top-[0.4rem] right-12 " height="1em" viewBox="0 0 640 512"><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zm151 118.3C226 97.7 269.5 80 320 80c65.2 0 118.8 29.6 159.9 67.7C518.4 183.5 545 226 558.6 256c-12.6 28-36.6 66.8-70.9 100.9l-53.8-42.2c9.1-17.6 14.2-37.5 14.2-58.7c0-70.7-57.3-128-128-128c-32.2 0-61.7 11.9-84.2 31.5l-46.1-36.1zM394.9 284.2l-81.5-63.9c4.2-8.5 6.6-18.2 6.6-28.3c0-5.5-.7-10.9-2-16c.7 0 1.3 0 2 0c44.2 0 80 35.8 80 80c0 9.9-1.8 19.4-5.1 28.2zm9.4 130.3C378.8 425.4 350.7 432 320 432c-65.2 0-118.8-29.6-159.9-67.7C121.6 328.5 95 286 81.4 256c8.3-18.4 21.5-41.5 39.4-64.8L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5l-41.9-33zM192 256c0 70.7 57.3 128 128 128c13.3 0 26.1-2 38.2-5.8L302 334c-23.5-5.4-43.1-21.2-53.7-42.3l-56.1-44.2c-.2 2.8-.3 5.6-.3 8.5z"/></svg>

                        <svg class="w-[1.4rem] h-[1.4rem] absolute top-[0.4rem] left-2 " height="1em" viewBox="0 0 448 512"><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg>
                        </div>
                        
    
                        <div class="remember m-2 inline ">
                            <input type="checkbox" name="remeber" id="remeber">
                            <label for="remeber">Remember me</label>
                        </div>
                        <a class="ml-20 text-red-400 " href="forget.php">Forgot Password?</a>

                        <button type="submit" class="btn_btn block w-[70%] bg-[#1f1] text-[blue] m-auto my-4 ">Login</button>
    
                        <span class="text-center block" >Don't have an account <a class="text-blue-600" href="sign_up.php">Create an account</a></span>
                    </form>
                </div>
            </div>

        </div>

        <div class=" wrapper_right rounded-xl pl-6 flex flex-col items-center w-[50%] h-full  bg-[white] "></div>

        <script>
            const password = document.getElementById('passinput')
            document.getElementById('passview').addEventListener('click',()=>{
                if (password.type === 'text') {
                    password.type = 'password';
                }else{
                    password.type = 'text';
                }
            })
        </script>
    </div>
</body>
</html>