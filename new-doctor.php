<section class="appointment section-bg pb-5 mt-5">
    <div class="container">
        <div class="section-title">
            <h2>New Doctor</h2>
        </div>

    <form method="post" role="form" class="php-email-form">
      <div class="row">
        <div class="col-md-4 form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="Doctor Name"  required>
          
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <input type="text" class="form-control" name="specialty" id="specialty" placeholder="Doctor specialty"  required>
          
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <input type="tel" class="form-control" name="contact_no" id="contact_no" placeholder="Contact No"  required>
          
        </div>
      </div>
      <div class="form-group mt-3">
        <textarea class="form-control" name="about" id="about" rows="5" placeholder="About doctor" required></textarea>
        
      </div>
      <div class="mb-3">
        <div class="error-message"></div>
      </div>
      <div class="text-center"><button name="new_doctor" type="submit">Save</button></div>
    </form>

  </div>
</section>