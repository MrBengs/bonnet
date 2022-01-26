<?php include('functions.php'); ?>
<?php include('variables.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonnet Php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid col-6">

        <table class="table table-dark table-bordered border-secondary table-striped table-hover">
            <?php
            foreach ($bonnets as $key => $value) {
                displayProduct($key, $value);
            }
            ?>
        </table>
    </div>




</body>

</html>