<!DOCTYPE html>
<html>

<head>
    <title>Update Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        h2 {
            margin-top: 25px;
            margin-bottom: 0.5rem;
            font-weight: bolder;
            line-height: 1.2;
            padding-left: 120px;
        }
    </style> 
</head>

<body>

    <nav class="navbar navbar-dark bg-dark" style="margin-top: 3px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="padding-left: 100px ; font-weight: bolder; "> Curd Application </a>
        </div>
    </nav>

    <h2>Update Student Data</h2>
    <hr>
    <form method="POST" name="addStudent" action="<?php echo base_url() ."index.php/student/edit/".$user['Roll_No'];  ?>">

        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div>
                        <label style="font-weight: 700 ;">ID</label>
                        <input type="number" class="form-control" name="Roll_No" value="<?php echo set_value('Roll_No',$user['Roll_No']); ?>" placeholder="0123">
                        <?php echo form_error('Roll_No'); ?>
                    </div>

                    <div>
                        <label style="font-weight: 700 ;">Name</label>
                        <input type="text" class="form-control" name="Student_Name" value="<?php echo set_value('Student_Name',$user['Student_Name']); ?>" placeholder="Enter Name">
                        <?php echo form_error('Student_Name'); ?>
                    </div>
                    <div>
                        <label style="font-weight: 700 ;">Email</label>
                        <input type="email" class="form-control" name="Email" value="<?php echo set_value('Email',$user['Email']); ?>" placeholder="@example.com">
                        <?php echo form_error('Email'); ?>
                    </div>
                    <div>
                        <label style="font-weight: 700 ;">Semester</label>
                        <input type="text" class="form-control" name="Semester" value="<?php echo set_value('Semester',$user['Semester']); ?>" placeholder=" Semester">
                        <?php echo form_error('Semester'); ?>
                    </div>
                    <div>
                        <button class="btn btn-primary">Update</button>
                        <a href="<?php echo base_url().'index.php/student/index'  ?>" class="btn btn-secondary "> Cancel </a>
                    </div>
                </div>
            </div>
        </div>
    </form>

</body>
 
</html>