<section class="appointment section-bg pb-5 mt-5">
    <div class="container">
        <div class="section-title">
            <h2>Doctors List:</h2>
        </div>
        <a href="?p=new-doctor" class="appointment-btn"><i class="fa fa-logout-alt"></i> Add New</a>
        <hr class="mt-5 mb-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">specialty</th>
                    <th scope="col">Contact No</th>
                    <th scope="col">About</th>
                    <th scope="col"></th>
                </tr>
            </thead>
        <tbody>
        <?php
            $q = htmlspecialchars($_GET['q']);
            
            $sql = "SELECT * FROM doctors ORDER BY id DESC";

            $result = $db->query($sql);
            if($result->num_rows != 0):
                while($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['specialty']; ?></td>
            <td><?php echo $row['contact_no']; ?></td>
            <td><?php echo $row['about']; ?></td>
            <td>
                <form method="post" onsubmit="return confirm('Are you sure you want to delete?')">
                    <input type="hidden" name="item" value="<?php echo $row['id']; ?>" />
                    <button class="btn btn-sm btn-danger" name="delete-doctors"><i class="fa fa-trash"></i> Delete</button>
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