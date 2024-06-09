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
            <h2><span style="text-transform: capitalize;"><?php echo $_SESSION['user_name']; ?></span> Profile</h2>
            <p>Your applications:</p>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Contact No</th>
                    <th scope="col">Emergency Contact No</th>
                    <th scope="col">Blood Type</th>
                    <?php if($_SESSION['user_type'] == 'patient'): ?>
                        <th scope="col">Origin Needed</th>
                    <?php endif; ?>
                </tr>
            </thead>
        <tbody>
        <?php
            $uid = $_SESSION['user_id'];

            if($_SESSION['user_type'] == 'patient'){
                $sql = "SELECT * FROM patients WHERE user_id = '$uid'";
            } else {
                $sql = "SELECT * FROM donors WHERE user_id = '$uid'";
            }

            $result = $db->query($sql);
            if($result->num_rows != 0):
                while($row = $result->fetch_assoc()):
        ?>
            <tr>
                <td scope="col"><?php echo $row['name']; ?></td>
                <td scope="col"><?php echo $row['contact_no']; ?></td>
                <td scope="col"><?php echo $row['emergency_contact_name']; ?></td>
                <td scope="col"><?php echo $row['blood_type']; ?></td>
                <?php if($_SESSION['user_type'] == 'patient'): ?>
                    <td scope="col"><?php echo $row['origin_needed']; ?></td>
                <?php else:; ?>
                    <td scope="col"><?php echo $row['origin_to_donate']; ?></td>
                <?php endif; ?>
            </tr>
        <?php
                endwhile;
            endif;
        ?>
        </tbody>
      </table>

      <hr class="mt-5 mb-5">
      <a href="?p=logout" class="appointment-btn"><i class="fa fa-logout-alt"></i> Logout of your account</a>
    </div>
</section>