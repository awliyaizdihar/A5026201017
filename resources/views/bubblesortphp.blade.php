<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bubble Sorting</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: rgb(81, 112, 124);
        }
    </style>
</head>

<body>

    <div class="container pt-5">

        <div class="card bg-light mb-3">
            <h1 class="display-4 text-center">Let's Sort It Up!</h1>
        </div>

        <div class="card bg-light text-center mb-3">
            <div class="card-body">
                Sorted:
                <?php
                    $input = $_POST["bubsort"];
                    $arr = str_split($input);
                    for ($i = count($arr) - 1; $i > 0; $i--) {
                        for ($j = 0; $j < $i; $j++) {
                            if ($arr[$j + 1] < $arr[$j]) {
                                $temp = $arr[$j];
                                $arr[$j] = $arr[$j + 1];
                                $arr[$j + 1] = $temp;
                            }
                        }
                    }
                    for ($i = 0; $i < count($arr); $i++) {
                        echo $arr[$i] . " ";
                    }
                ?>
            </div>
        </div>
    </div>

</body>

</html>
