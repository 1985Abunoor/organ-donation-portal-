<section class="appointment section-bg pb-5 mt-5">
    <div class="container">
        <div class="section-title">
            <h2><span style="text-transform: capitalize;"><?php echo $q; ?></span> Applications Lists</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact No</th>
                    <th scope="col">Family Contact No</th>
                    <th scope="col">Blood Type</th>
                    <th scope="col"></th>
                </tr>
            </thead>
        <tbody>
        <?php
            if($q == 'patients'){
                $sql = "SELECT * FROM patients ORDER BY id DESC";
            } else {
                $sql = "SELECT * FROM donors ORDER BY id DESC";
            }

            $result = $db->query($sql);
            if($result->num_rows != 0):
                while($row = $result->fetch_assoc()):
        ?>
            <tr>
                <td scope="col"><?php echo $row['creation_date']; ?></td>
                <td scope="col"><?php echo $row['name']; ?></td>
                <td scope="col"><?php echo $row['contact_no']; ?></td>
                <td scope="col"><?php echo $row['family_contact_no']; ?></td>
                <td scope="col"><?php echo $row['blood_type']; ?></td>
                <td scope="col">
                    <?php if($q == 'patients'): ?>
                    <a href="?p=<?php echo $q; ?>&q=<?php echo $row['id']; ?>" class="d-inline m-3"><i class="fa fa-eye"></i> View</a>
                    <?php endif; ?>
            
                    <form method="post" class="d-inline" onsubmit="return confirm('Are you sure you want to delete?')">
                    <input type="hidden" name="item" value="<?php echo $row['id']; ?>" />
                    <button class="btn btn-sm btn-danger" name="delete-<?php echo $q; ?>"><i class="fa fa-trash"></i> Delete</button>
                </form>
                </td>
            </tr>
        <?php
                endwhile;
            endif;
        ?>
        </tbody>
      </table>
    </div>
</section>