
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin parnel</title>
  <link href="assets/img/IMG_4581.JPG" rel="icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<section class="bg-light py-3 py-md-5">
    @error('err')
            <x-flashMsg msg="{{$message}}" bg='bg-danger'/>
            @enderror
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <div class="card border border-light-subtle rounded-3 shadow-sm">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="text-center mb-3">
            <h1 class="logo me-auto me-lg-0"><a href="{{route('index')}}">ADMIN</a></h1>
            </div>
            <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Sign in to your account</h2>

            <form action="{{route('login.account')}}" method="post">
                @csrf
              <div class="row gy-2 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="email">
                    <label for="email" class="form-label"></label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                    <label for="password" class="form-label"></label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-flex gap-2 justify-content-between yep">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox"  name="rememberMe" id="rememberMe">
                      <label class="form-check-label text-secondary" for="rememberMe">
                        Keep me logged in
                      </label>
                    </div>
                    {{-- <a href="#!" class="link-primary text-decoration-none">Forgot password?</a> --}}
                  </div>
                </div>

                <div class="col-12">
                  <div class="d-grid my-3 text-center">
                    <button class="btn btn-primary btn-lg " name="submit" type="submit">Login</button>
                  </div>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
    let hideFlash =()=>{
        document.querySelector('#flash').style.display = 'none';
    }
gsap.to('#flash',{
    opacity:0,
    duration:8,
    ease:'power.out',
    onComplete:hideFlash,
});
</script>
</body>
</html>


