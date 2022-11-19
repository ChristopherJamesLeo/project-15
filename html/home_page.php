<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="shortcut icon" href=".png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/media_style.css">
    <script src="../app.js/home.js" defer></script>
</head>
<body>
    <menu class="main-menu flex justify-between items-center">
        <div class="logoImg-container">
            <div class="logo-img">
                <img src="../img/cropped-logo02.png" width="100%" height="100%" alt="logo">
            </div>
        </div>
        <nav class="navBar">
            <ul class="nav-list flex items-center">
                <li class="nav-list-items"><a href="./home_page.php" class="font-medium uppercase tracking-wide text-white">home</a></li>
                <li class="nav-list-items"><a href="#" class="font-medium uppercase tracking-wide text-white">About<i class="fas fa-angle-down inline-block"></i></a></li>
                <li class="nav-list-items"><a href="#" class="font-medium uppercase tracking-wide text-white">Our Class</a></li>
                <li class="nav-list-items"><a href="#" class="font-medium uppercase tracking-wide text-white">Pricing Table</a></li>
                <li class="nav-list-items"><a href="#" class="font-medium uppercase tracking-wide text-white">Blog<i class="fas fa-angle-down inline-block"></i></a></li>
                <li class="nav-list-items"><a href="./contactUs.php" class="font-medium uppercase tracking-wide text-white">Contact Us</a></li>
            </ul>
        </nav>
        <div class="nar-slide-toggle-btn">
            <div class="btn-container">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="nav-slide-container">
            <div class="logoAndCloseBtn-container flex justify-between items-center">
                <div class="logoImg-container">
                    <div class="logo-img">
                        <img src="../img/cropped-logo02.png" width="100%" height="100%" alt="logo">
                    </div>
                </div>
                <div class="close-btn">
                    <i class="fas fa-times text-white"></i>
                </div>
            </div>
            <nav class="slide-navBar">
                <ul class="slide-nav-list">
                    <li class="slide-nav-list-items"><a href="#" class="font-medium uppercase tracking-wide text-white border-b inline-block">home</a></li>
                    <li class="slide-nav-list-items flex justify-between items-center"><a href="#" class="font-medium uppercase tracking-wide text-white border-b inline-block">About</a><div class="grid place-items-center border-l"><i class="fas fa-angle-down inline-block"></i></div></li>
                    <li class="slide-nav-list-items"><a href="#" class="font-medium uppercase tracking-wide text-white border-b inline-block">Our Class</a></li>
                    <li class="slide-nav-list-items"><a href="#" class="font-medium uppercase tracking-wide text-white border-b inline-block">Pricing Table</a></li>
                    <li class="slide-nav-list-items flex justify-between items-center"><a href="#" class="font-medium uppercase tracking-wide text-white border-b inline-block">Blog</a><div class="grid place-items-center border-l"><i class="fas fa-angle-down inline-block"></i></div></li>
                    <li class="slide-nav-list-items"><a href="#" class="font-medium uppercase tracking-wide text-white inline-block">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </menu>
    <div id="modelBox-container" class="modelBox-container grid place-items-center fixed left-0 top-0 ">
        <div id="user_logIn_page" class="logIn_page text-center grid place-items-center relative" >
            <span id="modelClose" class="modelClose absolute text-white"><i class="far fa-times-circle"></i></span>
            <form action="../DataTran/userDataTan.php" method="post" class="logIn-form-group text-start rounded-lg">
                <div class="form-group">
                    <label for="firstname" class="font-bold text-stone-500">Name</label>
                    <div class="name-group flex justify-space-between">
                        <input type="text" name="firstname" id="firstname" class="firstname input-text" placeholder="First">
                        <input type="text" name="lastname" id="lastname" class="lastname input-text" placeholder="Last">
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstname" class="font-bold text-stone-500">Email</label>
                    <input type="text" name="email" id="email" class="input-text" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="phNumber" class="font-bold text-stone-500">Phone Number</label>
                    <input type="number" name="phoneNumber" id="phNumber" class="input-text" placeholder="Phone Number">
                </div>
                <div class="form-group">
                    <label for="city" class="font-bold text-stone-500">Address </label>
                    <div class="name-group flex justify-space-between">
                        <input type="text" name="city" id="city" class="firstname input-text" placeholder="City">
                    <input type="text" name="country" id="country" class="lastname country input-text" placeholder="Country">
                    </div>
                </div>
                <div class="form-group">
                    <label for="passwords" class="font-bold text-stone-500">Password</label>
                    <input type="password" name="passwords" id="passwords" class="input-text" placeholder="Password">
                </div>

                
                <button type="submit" id = "user-submit">Log In</button> 
                <a href="#" class="underline">Forget Password</a>
                <a href="#" id="adm-page" class="underline block">Admin Page</a>  
            </form>
        </div>
        <div id="adm_logIn_page" class="logIn_page  adm_logIn_page text-center none place-items-center relative" >
            <span id="modeladmClose" class="modelClose absolute text-white"><i class="far fa-times-circle"></i></span>
            <h1 class="font-bold text-white">Admin Log In</h1>
            <form action="../DataTran/admDataTran.php" method="post" class="logIn-form-group text-start rounded-lg">
                <div class="form-group">
                    <label for="firstname" class="font-bold text-stone-500">Name</label>
                    <div class="name-group flex justify-space-between">
                        <input type="text" name="firstname" id="adm-firstname" class="firstname input-text" placeholder="First">
                        <input type="text" name="lastname" id="adm-lastname" class="lastname input-text" placeholder="Last">
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstname" class="font-bold text-stone-500">Email</label>
                    <input type="text" name="email" id="adm-email" class="input-text" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="adm-role" class="font-bold text-stone-500">Role</label>
                    <input type="text" name="role" id="adm-role" class="input-text" placeholder="Role">
                </div>
                <div class="form-group">
                    <label for="firstname" class="font-bold text-stone-500">Password</label>
                    <input type="password" name="password" id="adm-password" class="input-text" placeholder="Password">
                </div>

                
                <button type="submit">Log In</button> 
                <a href="#" class="underline">Forget Password</a>
                <a href="#" id="user-page" class="underline block">User Page</a>  
            </form>
        </div>
    </div>

    <main>
        <section class="main-section-container">
            <div class="main-section">
                <div class="section-content-container grid place-items-center w-full">
                    <div class="section-content grid place-items-center text-center">
                        <h3 class="font-extrabold tracking-widest uppercase">Get in fit in 2 weeks</h3>
                        <h1 class="font-black tracking-wider uppercase">Start your program today</h1>
                        <p class="font-semibold tracking-wider leading-loosed">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="explore_more font-bold tracking-wider uppercase rounded-lg">explore more</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>