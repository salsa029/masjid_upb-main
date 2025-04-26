<x-layout>
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="login-card p-4 shadow bg-white rounded-3 text-center">
      <h4 class="mb-0">Sign In</h4>
      <p class="text-muted small">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>

      <form>
        <div class="form-group text-start">
          <label class="form-label">Username</label>
          <input type="text" class="form-control mb-3" placeholder="Enter your username">
        </div>
        <div class="form-group text-start">
          <label class="form-label">Password</label>
          <input type="password" class="form-control mb-3" placeholder="Enter your password">
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check">
            {{-- <input class="form-check-input" type="checkbox" id="remember">
            <label class="form-check-label" for="remember">Remember me</label> --}}
          </div>
          <a href="#" class="text-decoration-none small">Forgot Password</a>
        </div>
        <button type="submit" class="btn btn-login w-100 mb-3">Log In</button>
      </form>

      <p class="text-muted small">or sign in with</p>
      <div class="social-icons d-flex justify-content-center gap-3">
        {{-- <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" width="30"></a>
        <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter" width="30"></a> --}}
        <a href="{{ url('login/google') }}"><img src="https://cdn-icons-png.flaticon.com/512/2702/2702602.png" alt="Google" width="30"></a>
      </div>
    </div>
  </div>
</x-layout>