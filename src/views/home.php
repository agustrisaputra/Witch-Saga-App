<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Witch Saga</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row mt-5"></div>
        <h1>The story: Geekseat Witch Saga: Return of The Coder!</h1>
        <div class="row mt-3"></div>

        <?php
            if (!is_null(get_value('success'))) {
        ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><?php echo get_value('success'); ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        <?php
            }
        ?>

        <form method="post" action="<?php echo BASEURL . "/home/store"; ?>">
            <div class="card">
                <div class="card-header">
                    <h6>Person 1</h6>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="person1">Age Of Death</label>
                            <input type="text" class="form-control" id="person1.age_of_death" name="persons[0][age_of_death]" placeholder="Input Age Of Death Person 1" value="<?php echo get_value('person1-age_of_death');?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="person1">Year Of Death</label>
                            <input type="text" class="form-control" id="person1.year_od_death" name="persons[0][year_od_death]" placeholder="Input Year Of Death Person 1" value="<?php echo get_value('person1-year_od_death');?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h6>Person 2</h6>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="person1">Age Of Death</label>
                            <input type="text" class="form-control" id="person2.age_of_death" name="persons[1][age_of_death]" placeholder="Input Age Of Death Person 2" value="<?php echo get_value('person2-age_of_death');?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="person1">Year Of Death</label>
                            <input type="text" class="form-control" id="person2.year_od_death" name="persons[1][year_od_death]" placeholder="Input Year Of Death Person 2" value="<?php echo get_value('person2-year_od_death');?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Calculate</button>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="person1">Average</label>
                            <input type="text" class="form-control" id="avarage" name="avarage" disabled="disabled" value="<?php echo get_value('average'); ?>">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <?php
        session_destroy();
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>