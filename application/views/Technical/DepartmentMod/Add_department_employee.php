<!--?php include "/../Header.php"; ?-->

<body>

    <!--?php include "/../Menu.php"; ?-->

    <div class="page-wrapper" style="min-height: 314px;">
        <div class="content">
            <!-- content -->
            <div class="container-fluid content-top-gap">

                <!-- breadcrumbs -->
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb my-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Positions</li>
                    </ol>
                </nav>
                <!-- //breadcrumbs -->
                <!-- forms -->
                <section class="forms">
                    <!-- forms 1 -->

                    <div class="content">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <form id ="popup" action="<?php echo base_url(); ?>Technical_Account/Submit_add_department_employee/" enctype="multipart/form-data" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-3">Name Employee</label>
                                                    <div class="col-md-9">
                                                    <input type="hidden" name="ID_department_post" value="<?php echo $ID_department_post ?>">
 
                                                        <?php if (isset($ID_employee)) {
                                                        ?>
                                                            <input type="hidden" name="ID_employee" value="<?php echo $ID_employee ?>">
                                                        <?php } ?>
                                                        <input type="text" name="Name_employee" value="<?php if (isset($Name_employee)) {
                                                                                                            echo $Name_employee;
                                                                                                        } ?>" placeholder="Name employee" class="form-control">

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-3">Lastname employee</label>
                                                    <div class="col-md-9">

                                                        <input type="text" name="Lastname_employee" value="<?php if (isset($Lastname_employee)) {
                                                                                                                echo $Lastname_employee;
                                                                                                            } ?>" placeholder="Lastname employee" class="form-control">

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-3">Phone employee</label>
                                                    <div class="col-md-9">

                                                        <input type="text" name="Phone_employee" value="<?php if (isset($Phone_employee)) {
                                                                                                            echo $Phone_employee;
                                                                                                        } ?>" placeholder="Phone" class="form-control">

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-3">Email employee</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="Email_employee" value="<?php if (isset($Email_employee)) {
                                                                                                            echo $Email_employee;
                                                                                                        } ?>" placeholder="Email" class="form-control">

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-3">Login employee</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="Login_employee" value="<?php if (isset($Login_employee)) {
                                                                                                            echo $Login_employee;
                                                                                                        } ?>" placeholder="Login" class="form-control">

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-3">Password employee</label>
                                                    <div class="col-md-9">
                                                        <input type="password" name="Password_employee" value="<?php if (isset($Password_employee)) {
                                                                                                                echo $Password_employee;
                                                                                                            } ?>" placeholder="Password" class="form-control">

                                                    </div>
                                                </div>

                                                <!--div class="form-group row">
                                                    <label class="col-form-label col-md-3">Position</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="ID_department_post" id="ID_department_post">
                                                            <?php
                                                            foreach ($positiondepartment as $row) {

                                                                if (isset($ID_department_post)) {

                                                                    if ($row['ID_department_post'] == $ID_department_post) {

                                                            ?>

                                                                        <option value=<?= $row['ID_department_post'] ?> selected><?= $row['Name_post'] ?></option>

                                                                    <?php } else {
                                                                    ?>
                                                                        <option value=<?= $row['ID_department_post'] ?>><?= $row['Name_post'] ?></option>

                                                                    <?php }
                                                                } else {
                                                                    ?>
                                                                    <option value=<?= $row['ID_department_post'] ?>><?= $row['Name_post'] ?></option>
                                                            <?php }
                                                            }
                                                            ?>
                                                        </select>


                                                    </div>
                                                </div-->

                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-3">Access group</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="ID_access_group" id="ID_access_group">
                                                            <?php
                                                            foreach ($accessgroup as $row) {

                                                                if (isset($ID_access_group)) {

                                                                    if ($row['ID_access_group'] == $ID_access_group) {

                                                            ?>

                                                                        <option value=<?= $row['ID_access_group'] ?> selected><?= $row['Name_access_group'] ?></option>

                                                                    <?php } else {
                                                                    ?>
                                                                        <option value=<?= $row['ID_access_group'] ?>><?= $row['Name_access_group'] ?></option>

                                                                    <?php }
                                                                } else {
                                                                    ?>
                                                                    <option value=<?= $row['ID_access_group'] ?>><?= $row['Name_access_group'] ?></option>
                                                            <?php }
                                                            }
                                                            ?>
                                                        </select>


                                                    </div>
                                                </div>



                                            </div>

                                        </div>
                                        <div class="text-right">
                                            <button type="button" id="btn_add" class="btn btn-primary">Confirm</button>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>

                    </div>

                </section>
                <!-- //forms -->
            </div>
        </div>
    </div>

    <!--?php include "/../Footer.php"; ?-->

        
    <script>
        $(document).ready(function() {




            $("#btn_add").click(function() {
                swal({
                    title: 'Save',
                    text: "Are you sure?",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Cancel',

                    confirmButtonText: 'Yes'
                }).then((result) => {

                    if (result.value) {
                        //$("#action").val(1);


                        $('form#popup').submit();
                        //	swal('its OK '+result.value);
                    } else {
                        swal("This operation is canceled");
                        return false;
                    }
                });
            });

        });
    </script>