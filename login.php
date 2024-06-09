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
      <h2>Login to your account</h2>
    </div>

    <form method="post" role="form" class="php-email-form">
      <div class="col-6 mx-auto">
        <div class="col-12 form-group">
          <input type="text" name="username" class="form-control" id="name" placeholder="Username" reuired>
        </div>
        <div class="col-12 form-group">
          <input type="password" name="password" class="form-control" id="name" placeholder="Password">
        </div>
      <div class="mb-3">
        <div class="error-message"></div>
      </div>
      <div class="text-center"><button name="login" type="submit">Login</button></div>
    </form>

    <p class="p-5 mt-3 mb-5 ">Don't have an account? <a href="?p=register">Register Now</a></p>
 
  </div>
</section><!-- End Appointment Section -->

