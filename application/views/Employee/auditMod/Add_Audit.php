<style>
    .form_add_photo {
        height: 50px;
    }
</style>

<body>


    <div class="page-wrapper" style="min-height: 314px;">
        <div class="content">
            <!-- content -->
            <div class="container-fluid content-top-gap">

                <!-- breadcrumbs -->
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb my-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">process</li>
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
                                    <form id="audits" action="<?php echo base_url(); ?>Employee_Account/Submit_add_audit " enctype="multipart/form-data" method="post">
                                        <div class="row">
                                            <div class="col-md-6">


                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-3"></label>
                                                    <div class="col-md-9">
                                                        <input type="hidden" class="form-control" name="Create_date_audit" value="<?php echo date('Y/m/d') ?>">
                                                        </textarea>

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-4">Planned Date</label>
                                                    <div class="col-md-8">
                                                        <input type="date" class="form-control" name="planned_date_audit">


                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-4">Donneur d’ordre</label>
                                                    <div class="col-md-8">
                                                        <textarea class="form-control" name="Mission_audit">
                                                        </textarea>

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-4">Sites d’audit</label>
                                                    <div class="col-md-8">
                                                        <textarea class="form-control" name="Lieu_audit">
                                                        </textarea>

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-4">Membre d’audit </label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="Membre_audit" id="ID_employee">
                                                            <?php
                                                            foreach ($employee as $row) {

                                                                if (isset($ID_employee)) {

                                                                    if ($row['ID_employee'] == $ID_employee) {

                                                            ?>

                                                                        <option value=<?= $row['ID_employee'] ?> selected><?= $row['Name_employee']  . ' ' . $row['Lastname_employee']  ?></option>

                                                                    <?php } else {
                                                                    ?>

                                                                        <option value=<?= $row['ID_employee'] ?>><?= $row['Name_employee'] . ' ' . $row['Lastname_employee'] ?></option>

                                                                    <?php }
                                                                } else {
                                                                    ?>
                                                                    <option value=<?= $row['ID_employee'] ?>><?= $row['Name_employee'] . ' ' . $row['Lastname_employee'] ?></option>


                                                            <?php }
                                                            }
                                                            ?>


                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-4">referencial </label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="ID_referencial" id="ID_referencial">
                                                            <?php
                                                            foreach ($referencial as $row) {

                                                                if (isset($ID_referencial)) {

                                                                    if ($row['ID_rerencial'] == $ID_referencial) {

                                                            ?>

                                                                        <option value=<?= $row['ID_rerencial'] ?> selected><?= $row['Name_rerencial'] . " " . $row['Version_rerencial'] ?></option>

                                                                    <?php } else {
                                                                    ?>

                                                                        <option value=<?= $row['ID_rerencial'] ?>><?= $row['Name_rerencial'] . " " . $row['Version_rerencial'] ?></option>

                                                                    <?php }
                                                                } else {
                                                                    ?>
                                                                    <option value=<?= $row['ID_rerencial'] ?>><?= $row['Name_rerencial'] . " " . $row['Version_rerencial'] ?></option>


                                                            <?php }
                                                            }
                                                            ?>


                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-4">Type d’audit</label>
                                                    <div class="col-md-8">
                                                       <input type="text" name="Type_audit" class="form-control" >

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-4">Auditeur </label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="Auditeur" id="ID_employee">
                                                            <?php
                                                            foreach ($employee as $row) {

                                                                if (isset($ID_employee)) {

                                                                    if ($row['ID_employee'] == $ID_employee) {

                                                            ?>

                                                                        <option value=<?= $row['ID_employee'] ?> selected><?= $row['Name_employee']  . ' ' . $row['Lastname_employee']  ?></option>

                                                                    <?php } else {
                                                                    ?>

                                                                        <option value=<?= $row['ID_employee'] ?>><?= $row['Name_employee'] . ' ' . $row['Lastname_employee'] ?></option>

                                                                    <?php }
                                                                } else {
                                                                    ?>
                                                                    <option value=<?= $row['ID_employee'] ?>><?= $row['Name_employee'] . ' ' . $row['Lastname_employee'] ?></option>


                                                            <?php }
                                                            }
                                                            ?>


                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-4">processus </label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="ID_processus" id="ID_processus">
                                                            <?php
                                                            foreach ($processus as $row) {

                                                                if (isset($ID_processus)) {

                                                                    if ($row['ID_processus'] == $ID_processus) {

                                                            ?>

                                                                        <option value=<?= $row['ID_processus'] ?> selected><?= $row['Title_processus'] ?></option>

                                                                    <?php } else {
                                                                    ?>

                                                                        <option value=<?= $row['ID_processus'] ?>><?= $row['Title_processus'] ?></option>

                                                                    <?php }
                                                                } else {
                                                                    ?>
                                                                    <option value=<?= $row['ID_processus'] ?>><?= $row['Title_processus'] ?></option>


                                                            <?php }
                                                            }
                                                            ?>


                                                        </select>
                                                    </div>
                                                </div>


                                                <input type="hidden" name="ID_audit_plan" value="<?= $_GET['ID_audit_plan'] ?>">


                                            </div>

                                        </div>



                                        <div class="text-right">
                                            <button id="btn_add" type="button" class="btn btn-primary">Confirmer</button>
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


                        $('form#audits').submit();
                        //	swal('its OK '+result.value);
                    } else {
                        swal("This operation is canceled");
                        return false;
                    }
                });
            });

        });
    </script>
    <script>
        function populate(ID_processus, post) {



            var jArray = <?php echo json_encode($phpArray); ?>;
            var jArrayname = <?php echo json_encode($phpArrayname); ?>;




            var ID_processus = document.getElementById(ID_processus);
            var post = document.getElementById(post);
            post.innerHTML = "";
            for (var i = 0; i < jArray.length; i++) {
                if (jArray[i] == ID_processus.value) {
                    var name = jArrayname[i];

                    var optionArray = ["name|".name];
                }
                alert(jArrayname[i]);
            }

            for (var option in optionArray) {
                var pair = optionArray[option].split("|");
                var newOption = document.createElement("option");
                newOption.value = pair[0];
                newOption.innerHTML = pair[1];
                post.options.add(newOption);
            }
        }
    </script>
    <script>
        function triggerClick() {
            document.querySelector('#File_identification').click();
        }

        function displayImage(e) {
            if (e.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(e.files[0]);
            }
        }
    </script>