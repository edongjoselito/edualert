<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <!-- App css -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="<?= base_url(); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

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

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" name="email" class="form-control" value="<?= set_value('email') ?>" required>
                        </div>

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
                            <label for="school_id">School Name</label>
                            <input id="school_id" type="text" name="school_id" class="form-control" value="<?= set_value('school_id') ?>">
                        </div>

                        <div class="form-group">
                            <label for="sdo_id">SDO</label>
                            <input id="sdo_id" type="text" name="sdo_id" class="form-control" value="<?= set_value('sdo_id') ?>">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block mt-3">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
