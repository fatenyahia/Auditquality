<?php include "Header.php"; ?>

<body>

    <?php include "Menu.php"; ?>

    <div class="page-wrapper" style="min-height: 314px;">
        <div class="content">
            <!-- content -->
            <div class="container-fluid content-top-gap">

                <!-- breadcrumbs -->
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb my-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Evaluation Form</li>
                    </ol>
                </nav>
                <!-- //breadcrumbs -->
                <!-- forms -->
                <section class="forms">
                    <!-- forms 1 -->

                    <div class="content">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title">Affect Department / Position to Employee</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="card-title">Employee : .. </h4>
                                    <form action="<?php echo base_url(); ?>Technical/submit_department_position/" enctype="multipart/form-data" method="post">
                                        <div class="row">
                                            <div class="col-md-6">



                                                <div class="form-group row">

                                                </div>


                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-3">Department</label>
                                                    <div class="col-md-9">

                                                    <input type="hidden" value="<?= $ID_department ?>" name="ID_department">
                                                    <input type="hidden" value="<?= $ID_employee ?>" name="ID_employee">

                                                        <select class="form-control" name="ID_department" id="ID_department" disabled>
                                                            <?php
                                                            foreach ($department as $row) {
                                                                if ($row['ID_department']== $ID_department){
                                                                   ?>
                                                                    <option value=<?= $row['ID_department'] ?> selected><?= $row['Name_department'] ?></option>
   
                                                               <?php  }else{
                                                            ?>

                                                                <option value=<?= $row['ID_department'] ?>><?= $row['Name_department'] ?></option>

                                                            <?php }}


                                                            ?>


                                                        </select>

                                                      
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-3">Position</label>
                                                    <div class="col-md-9">
                                                     
                                                                <select class="form-control" name="ID_post" id="ID_post" >
                                                                    <?php
                                                                    foreach ($position as $row) {
                                                                    ?>

                                                                        <option value=<?= $row['ID_post'] ?>><?= $row['Name_post'] ?></option>

                                                                    <?php }


                                                                    ?>


                                                                </select>

                                                       


                                                                </select>
                                                          
                                                        

                                                      

                                                     
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Confirm</button>
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
        function populate(ID_department, post) {



            var jArray = <?php echo json_encode($phpArray); ?>;
            var jArrayname = <?php echo json_encode($phpArrayname); ?>;




            var ID_department = document.getElementById(ID_department);
            var post = document.getElementById(post);
            post.innerHTML = "";
            for (var i = 0; i < jArray.length; i++) {
                if (jArray[i] == ID_department.value) {
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
    <?php include "Footer.php"; ?>