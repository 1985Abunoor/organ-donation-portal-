<?php
if(!empty($_SESSION['user_id'])){
  header("Location: ?p=home");
}
?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
<div class="container">
    <h1>Oman Organs Donation</h1>
    <h2>Helping each other, saving lives</h2>
    <br>
</div>
</section><!-- End Hero -->
<!-- ======= Appointment Section ======= -->
<section id="appointment" class="appointment section-bg pb-5">
  <div class="container">
    <div class="section-title">
      <h2>Create a new account</h2>
    </div>

    <form method="post" role="form" class="php-email-form">
      <div class="col-6 mx-auto">
        <div class="col-12 form-group">
          <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
        </div>
        <div class="col-12 form-group">
          <input type="email" name="email" class="form-control" id="email" placeholder="E-mail" required>
        </div>
        <div class="col-6 form-group mt-3">
          <select name="user_type" id="user_type" class="form-select">
            <option value="patient">Account Type</option>
            <option value="patient">Patient</option>
            <option value="donor">Donor</option>
          </select>
        </div>
        <div class="col-12 form-group">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        </div>
        <div class="col-12 form-group">
          <input type="password" name="rpassword" class="form-control" id="rpassword" placeholder="Repeat Password" required>
        </div>
      <div class="mb-3">
        <div class="error-message"></div>
      </div>
      <div class="text-center">
        <button name="register" type="submit">Register</button>
      </div>
    </form>

 
  </div>
</section><!-- End Appointment Section -->

