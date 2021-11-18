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
            <div class="card-header">Bubble Sorting</div>
            <div class="card-body">

                <form method="post" action="bubblesort">
                    @csrf

                    <div class="form-group">
                        <label for="bubsort">Insert Numbers or Letters</label>
                        <input type="text" id="bubsort" name="bubsort" placeholder="example: 3214; or 'whatsup'"
                            class="form-control text-center">
                    </div>

                    <input type="submit" class="btn btn-outline-dark btn-block" id="submit" value="Sort!">

                </form>

            </div>
        </div>

    </div>

</body>

</html>
