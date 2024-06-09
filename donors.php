<?php
if(empty($_SESSION['user_id'])){
  header("Location: ?p=login&ref=patients");
}
?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
<div class="container">
    <h1>Oman Organs Donation</h1>
    <h2>Helping each other, saving lives</h2>
    <br>
</div>
</section>

<section id="appointment" class="appointment section-bg pb-5">
  <div class="container">
    <div class="section-title">
      <h2>Donors Application</h2>
      <p>Enter your personal details</p>
    </div>

    <form method="post" role="form">
      
  <fieldset2>
    <legend>Personal Information:</legend>
      <div class="row">
        <div class="col-md-4 form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"  required>
          
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <label for="contact_no">Phone Number</label>
          <input type="tel" class="form-control" name="contact_no" id="contact_no" placeholder="Your Phone"  required>
          
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <label for="birthdate">Birth Date</label>
            <input type="date" class="form-control" name="birthdate" id="birthdate" placeholder="Birth Date"  required>
          
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 form-group">
          <label for="id_card">ID Card</label>
          <input type="text" name="id_card" class="form-control" id="id_card" placeholder="Your ID Card Number"  required>
          
        </div>
      <div class="col-md-4 form-group mt-3 mt-md-0">
        <label for="governate">Governate:</label>
          <select class="form-select" id="governate" name="governate">
            <option value="Muscat">Muscat</option>
            <option value="Dhofar">Dhofar</option>
            <option value="Musandam">Musandam</option>
            <option value="Ad Dakhiliyah">Ad Dakhiliyah</option>
            <option value="Ad Dhahirah">Ad Dhahirah</option>
            <option value="Al Batinah North">Al Batinah North</option>
            <option value="Al Batinah South">Al Batinah South</option>
            <option value="Al Buraymi">Al Buraymi</option>
            <option value="Dhofar">Al Wusta</option>
            <option value="Ash Sharqiyah North">Ash Sharqiyah North</option>
            <option value="Ash Sharqiyah South">Ash Sharqiyah South</option>
          </select>
      </div>
        
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <label for="address">Address:</label>
          <input type="tel" class="form-control" name="address" id="address" placeholder="Your Address"  required />
        </div>
      </div>
      
      <div class="row">
        <div class="col-4 form-group mt-3">
          <label for="origin_needed">Origin To be donated</label>
          <div class="form-check form-switch mt-2">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="select_donation_type" onchange="handleShow(this)" value="all" >
            <label class="form-check-label" for="flexSwitchCheckDefault">All Origins</label>
          </div>
        </div>
        <div class="col-4 form-group mt-3">
          <label for="origin_to_donate">Select the origin To be donated</label>

          <select name="origin_to_donate" id="origin_to_donate" class="form-select">
            <option value="Heart">Heart</option>
            <option value="Lung">Lung</option>
            <option value="Liver">Liver</option>
            <option value="Kidney">Kidney</option>
          </select>
        </div>
        <div class="col-4 form-group mt-3">
          <label for="health">Current health</label>
          <select name="health" id="health" class="form-select">
            <option value="Great">Great</option>
            <option value="Average">Average</option>
            <option value="Below Average">Below Average</option>
          </select>
        </div>
      </div>

      <div class="row">

      <div class="col-4 form-group mt-3">
          <label for="blood_type">Your Blood Type</label>
        <select name="blood_type" id="blood_type" class="form-select">
          <option value="O+">O+</option>
          <option value="O−">O−</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
        </select>
        
      </div> 

      </fieldset>
  <fieldset>
    <legend>Emergency Contact:</legend>
      <div class="row">
        <div class="col-md-4 form-group">
          <label for="emergency_contact_name">Name</label>
          <input type="text" name="emergency_contact_name" class="form-control" id="emergency_contact_name" placeholder="Your Name"  required>
          
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <label for="emergency_contact_no">Phone Number</label>
          <input type="tel" class="form-control" name="emergency_contact_no" id="contact_no" placeholder="Your Phone"  required>
          
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <label for="emergency_contact_email">E-mail</label>
            <input type="email" class="form-control" name="emergency_contact_email" id="family_email" placeholder="E-mail Adress"  required>
          
        </div>
      </div>
</fieldset>
      <!-- <div class="form-group mt-3">
        <textarea class="form-control" name="disease_details" id="disease_details" rows="5" placeholder="Disease Details" required></textarea>
        
      </div> -->
      <div class="mb-3">
        <div class="error-message"></div>
      </div>
      <div class="text-center php-email-form"><button name="new_donor" type="submit">Send Request</button></div>
    </form>

  </div>
</section>

<script>
  function handleShow(e) {
    if(e.checked){
      //document.getElementById("origin_needed").classList.add("d-none")
      document.getElementById("origin_needed").disabled = true 
    } else {
      //document.getElementById("origin_needed").classList.remove("d-none")
      document.getElementById("origin_needed").disabled = false 
    }
  }
</script>