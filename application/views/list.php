<!DOCTYPE html>
<html>

<head>
    <title>Add Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        h2 {
            margin-top: 25px;
            /* margin-bottom: 0.5rem;
            font-weight: bolder;
            line-height: 1.2;
            padding-left: 120px; */
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark" style="margin-top: 3px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="padding-left: 100px ; font-weight: bolder; "> Curd Application </a>

        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 
                $success = $this->session->userdata('success');
                if($success != ""){
                ?>
                <div class="alert alert-success" ><?php echo $success; ?></div>

                <?php }?>
                <?php 
                $failuer = $this->session->userdata('failure');
                if($failuer != ""){
                ?>
                <div class="alert alert-danger" ><?php echo $failuer; ?></div>

                <?php }?>
            </div>
        </div>
    </div>

    <div class="container">
        <h2>List Of Student Data</h2>
        <a style="margin-left: 700px; " href="<?php echo base_url() . 'index.php/student/add'; ?>" class="btn btn-primary">Create</a>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <table class="table table-striped table-dark">
                    <tr>
                        <th>Roll No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Semester</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php if (!empty($users)) {
                        foreach ($users as $user) { ?>
                            <tr>
                                <td><?php echo $user['Roll_No']; ?></td>
                                <td><?php echo $user['Student_Name']; ?></td>
                                <td><?php echo $user['Email']; ?></td>
                                <td><?php echo $user['Semester']; ?></td>
                                <td>
                                    <a href="<?php echo base_url() . 'index.php/student/edit/' . $user['Roll_No'] ?>" class="btn btn-primary "> Edit </a>
                                </td>
                                <td>
                                    <a href="<?php echo base_url() . 'index.php/student/delete/' . $user['Roll_No'] ?>" class="btn btn-danger "> Delete </a>
                                </td>
                            </tr>
                        <?php  }
                    } else { ?>
                        <tr>
                            <td colspan="6">Record Is Not Found</td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>


</body>

</html>