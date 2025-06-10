<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>

<?php loadComponent("header");?>

<!-- Section: Design Block -->
<style>
  .background-radial-gradient {
    background-color: hsl(355, 85%, 20%);
    background-image: radial-gradient(650px circle at 0% 0%,
        hsl(355, 85%, 50%) 15%,
        hsl(355, 85%, 45%) 35%,
        hsl(355, 85%, 30%) 75%,
        hsl(355, 85%, 25%) 80%,
        transparent 100%),
      radial-gradient(1250px circle at 100% 100%,
        hsl(355, 85%, 55%) 15%,
        hsl(355, 85%, 45%) 35%,
        hsl(355, 85%, 30%) 75%,
        hsl(355, 85%, 25%) 80%,
        transparent 100%);
  }

  #radius-shape-1 {
    height: 220px;
    width: 220px;
    top: -60px;
    left: -130px;
    background: radial-gradient(#e72030, #ff6b6b);
    overflow: hidden;
    position: absolute;
    border-radius: 50%;
  }

  #radius-shape-2 {
    border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
    bottom: -60px;
    right: -110px;
    width: 300px;
    height: 300px;
    background: radial-gradient(#e72030, #ff6b6b);
    overflow: hidden;
    position: absolute;
  }
</style>

<section class="background-radial-gradient overflow-hidden position-relative">

    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5 position-relative z-2">
        <div class="row gx-lg-5 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 d-none d-md-block" style="z-index: 10">
                <h1 class="my-5 display-5 fw-800 ls-tight" style="color: #06a3cc">
                The best offer <br />
                <span>for your business</span>
                </h1>
                <p class="mb-4 text-white">
                NextFleet simplifies leasing and fleet management, delivering tailored solutions to optimise and support your fleet effortlessly.
                </p>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">

                <div class="card bg-glass p-4 p-md-5">
                    <form>
                        <h1 class="h3 mb-3 fw-normal">Log In</h1>
                        <p>Enter your email and password to access your account</p>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                            <label for="email">Email address</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>

                        <div class="d-md-flex justify-content-md-between align-items-md-center mb-3 text-start">
                            <div class="form-check text-start mb-2 mb-md-0">
                                <input class="form-check-input" type="checkbox" value="" id="keepSignedIn">
                                <label class="form-check-label" for="keepSignedIn">
                                Keep me signed in
                            </label>
                            </div>
                            <a href="#" class="text-decoration-none small">Forgot your password?</a>
                        </div>

                        <button class="w-100 btn btn-lg btn-primary" type="submit">Log In</button>

                        <p class="mt-3 form-footer mb-0">
                            Don't have an account? <a href="#" class="text-decoration-none">Sign up now</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->


<?php loadComponent("footer"); ?>
