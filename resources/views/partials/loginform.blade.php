<section class="vh-100" >
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 p-5 col-lg-5 d-none d-md-flex align-items-center justify-content-center">
                <img src="{{ $logo }}"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center ">
                <div class="card-body p-4 p-lg-5 text-black">

                    <form method="post" action="/login">
                        @csrf
                        <h2 class="h1 fw-bold mb-3 pb-3">Login</h2>

                        <div class="form-outline mb-4">
                            <input type="email" id="email" name="email" class="form-control form-control-lg mb-3" required />
                            <label class="form-label" for="email">Email address</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="password" name="password" class="form-control form-control-lg mb-3" required />
                            <label class="form-label" for="password">Password</label>
                        </div>

                        <div class="pt-1 mb-4">
                            <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                        </div>
                    </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
