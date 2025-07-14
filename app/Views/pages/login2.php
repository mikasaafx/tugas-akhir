<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-sm">
	<div class="row mt-5 pt-5" style="height: 100vh;">
		<div class="col-6 mt-5" style="margin: 0 auto;">
			
<!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-4" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a
      class="nav-link active"
      id="tab-login"
      data-mdb-pill-init
      href="#pills-login"
      role="tab"
      aria-controls="pills-login"
      aria-selected="true"
      >Login</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="tab-register"
      data-mdb-pill-init
      href="#pills-register"
      role="tab"
      aria-controls="pills-register"
      aria-selected="false"
      >Register</a
    >
  </li>
</ul>
<!-- Pills navs -->

<!-- Pills content -->
<div class="tab-content">
  <div
    class="tab-pane fade show active"
    id="pills-login"
    role="tabpanel"
    aria-labelledby="tab-login"
  >
    <form>
      <!-- <p class="text-center">or:</p> -->

      <!-- Email input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="loginName">Email or username</label>
        <input type="email" id="loginName" class="form-control" />
      </div>

      <!-- Password input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="loginPassword">Password</label>
        <input type="password" id="loginPassword" class="form-control" />
      </div>

      <!-- 2 column grid layout -->
      <div class="row mb-4">
        <div class="col-md-6 d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check mb-3 mb-md-0">
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="loginCheck"
              checked
            />
            <label class="form-check-label" for="loginCheck"> Remember me </label>
          </div>
        </div>

        <div class="col-md-6 d-flex justify-content-center">
          <!-- Simple link -->
          <a href="#!">Forgot password?</a>
        </div>
      </div>

      <div class="text-center mb-3">
        <p>atau</p>
        <button data-mdb-ripple-init type="button" class="btn btn-primary mx-1 rounded-circle">
          <i class="bi bi-facebook"></i>
        </button>

        <button data-mdb-ripple-init type="button" class="btn btn-danger mx-1 rounded-circle">
          <i class="bi bi-google"></i>
        </button>

        <button data-mdb-ripple-init type="button" class="btn btn-primary mx-1 rounded-circle">
          <i class="bi bi-twitter"></i>
        </button>

        <button data-mdb-ripple-init type="button" class="btn btn-dark mx-1 rounded-circle">
          <i class="bi bi-github"></i>
        </button>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

      <!-- Register buttons -->
      <div class="text-center">
        <p>Not a member? <a href="#!">Register</a></p>
      </div>
    </form>
  </div>
  <div
    class="tab-pane fade"
    id="pills-register"
    role="tabpanel"
    aria-labelledby="tab-register"
  >
    <form>
      <div class="text-center mb-3">
        <p>Sign up with:</p>
        <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
          <i class="fab fa-facebook-f"></i>
        </button>

        <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
          <i class="fab fa-google"></i>
        </button>

        <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
          <i class="fab fa-twitter"></i>
        </button>

        <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
          <i class="fab fa-github"></i>
        </button>
      </div>

      <p class="text-center">or:</p>

      <!-- Name input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="text" id="registerName" class="form-control" />
        <label class="form-label" for="registerName">Name</label>
      </div>

      <!-- Username input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="text" id="registerUsername" class="form-control" />
        <label class="form-label" for="registerUsername">Username</label>
      </div>

      <!-- Email input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="email" id="registerEmail" class="form-control" />
        <label class="form-label" for="registerEmail">Email</label>
      </div>

      <!-- Password input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" id="registerPassword" class="form-control" />
        <label class="form-label" for="registerPassword">Password</label>
      </div>

      <!-- Repeat Password input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" id="registerRepeatPassword" class="form-control" />
        <label class="form-label" for="registerRepeatPassword">Repeat password</label>
      </div>

      <!-- Checkbox -->
      <div class="form-check d-flex justify-content-center mb-4">
        <input
          class="form-check-input me-2"
          type="checkbox"
          value=""
          id="registerCheck"
          checked
          aria-describedby="registerCheckHelpText"
        />
        <label class="form-check-label" for="registerCheck">
          I have read and agree to the terms
        </label>
      </div>

      <!-- Submit button -->
      <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
    </form>
  </div>
</div>
<!-- Pills content -->
		</div>
	</div>
	
</div>
<?= $this->endSection('content'); ?>