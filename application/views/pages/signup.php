<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/icons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/app.min.css" rel="stylesheet">
    <style>
        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
        }
        .form-control {
            border-radius: 0.5rem;
        }
        .btn-primary {
            border-radius: 0.5rem;
        }
    </style>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card p-4">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">User Signup</h3>

                    <?= $this->session->flashdata('msg'); ?>
                    <?= validation_errors('<div class="alert alert-danger">', '</div>'); ?>

                    <form method="post" action="<?= base_url('users/register') ?>">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="firstName">First Name</label>
                                <input id="firstName" type="text" name="firstName" class="form-control" value="<?= set_value('firstName') ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="middleName">Middle Name</label>
                                <input id="middleName" type="text" name="middleName" class="form-control" value="<?= set_value('middleName') ?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="lastName">Last Name</label>
                                <input id="lastName" type="text" name="lastName" class="form-control" value="<?= set_value('lastName') ?>" required>
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" name="email" class="form-control" value="<?= set_value('email') ?>" required>
                        </div> -->

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input id="password" type="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="confirm_password">Confirm Password</label>
                                <input id="confirm_password" type="password" name="confirm_password" class="form-control" required>
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="division">Division</label>
                            <select id="division" name="division" class="form-control" required>
                                <option value="">Select Division</option>
                                <?php foreach ($divisions as $row): ?>
                                    <option value="<?= $row->id ?>"><?= $row->description; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="school_id">School Name</label>
                            <select id="school_id" name="school_id" class="form-control" required>
                                <option value="">Select Division first</option>
                            </select>
                        </div>



                        <button type="submit" class="btn btn-primary btn-block mt-3">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    $('#division').change(function(){
        var division = $(this).val();
        if (division !== '') {
            $.ajax({
                url: "<?= base_url('users/get_schools_by_division') ?>",
                method: "POST",
                data: {division: division},
                dataType: "json",
                success: function(data){
                    $('#school_id').html('<option value="">Select School</option>');
                    $.each(data, function(i, school){
                        $('#school_id').append('<option value="'+school.id+'">'+school.schoolName+'</option>');
                    });
                }
            });
        } else {
            $('#school_id').html('<option value="">Select Division first</option>');
        }
    });
});
</script>


</body>
</html>
