<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
	<div class="row mt-5">
		<div class="col mt-4">
			<h1>Contact Us</h1>
	<form class="center mt-4" style="width: 26rem;">
  <!-- Name input -->
    <label class="form-label" for="form4Example1">Name</label>
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" id="form4Example1" placeholder="ex: Mikasaa Fx" class="form-control" />
  </div>

  <!-- Email input -->
    <label class="form-label" for="form4Example2">Email address</label>
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" id="form4Example2" placeholder="ex: abcd123@gmail.com" class="form-control" />
  </div>

  <!-- Message input -->
    <label class="form-label" for="form4Example3">Message</label>
  <div data-mdb-input-init class="form-outline mb-2">
    <textarea class="form-control" placeholder="Tulis pesan kamu .." id="form4Example3" rows="4"></textarea>
  </div>

  <!-- Checkbox -->
  <div class="form-check d-flex justify-content-start mb-3">
    <input
      class="form-check-input me-2"
      type="checkbox"
      value=""
      id="form4Example4"
      checked
    />
    <label class="form-check-label" for="form4Example4">
      Send me a copy of this message
    </label>
  </div>

  <!-- Submit button -->
  <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4 px-4 py-2">Send</button>
</form>
		</div>
	</div>
</div>
<?= $this->endSection('content'); ?>