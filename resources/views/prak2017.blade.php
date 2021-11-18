<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script>
        function validate() {
            let n = document.getElementById("tel").value;
            let arr = Array.from(document.getElementById("name").value);
            for (let i = 0; i < arr.length; i++) {
                if (arr[i] != " ") {
                    if (isFinite(arr[i])) {
                        alert("Name cannot consist number");
                        return false;
                    }
                }
            }
            if (isNaN(n)) {
                alert("Telephone can only consist of numbers");
                return false;
            }
        }
    </script>
    <style>
        body {
            background-color: rgb(21, 0, 80);
        }
    </style>
</head>

<body>

    <div class="container pt-3">

        <div class="card bg-light mb-3">
            <h1 class="display-4 text-center">Registration Form</h1>
        </div>

        <div class="card bg-light mb-3">

            <div class="card-body">
                <form method="post" action="https://www.youtube.com/watch?v=fNbYfQH_q2Y" onsubmit="return validate()">

                    <div class="form-group">

                        <label for="name">Name:</label><br>
                        <input type="text" id="name" name="name" placeholder="Enter Name" class="form-control"
                            required><br>

                        <label for="address">Address:</label><br>
                        <input type="text" id="address" name="address" placeholder="Enter Address" class="form-control"
                            required><br>

                        <label for="email">E-mail Address:</label><br>
                        <input type="email" id="email" name="email" placeholder="Enter E-mail Address"
                            class="form-control" required><br>

                        <label for="pass">Password:</label><br>
                        <input type="password" id="pass" name="pass" minlength="8" maxlength="16"
                            title="8-16 characters" placeholder="Enter Password" class="form-control" required><br>

                        <label for="tel">Telephone:</label><br>
                        <input type="text" id="tel" name="tel" minlength="7" title="min. 7 digits of number"
                            placeholder="Enter Telephone Number" class="form-control" required><br>

                        <label for="course">Select Your Course:</label>
                        <select class="form-control" id="course" name="course" required>
                            <option selected disabled></option>
                            <option>BTECH</option>
                            <option>BBA</option>
                            <option>BCA</option>
                            <option>B.COM</option>
                            <option>GEEKFORFEEKS</option>
                        </select><br>

                        <label for="zcode">Zip Code:</label><br>
                        <input type="text" id="zcode" name="zcode" pattern="[0-9]{6}" title="Format: 6 digits of number"
                            placeholder="Enter Zip Code" class="form-control" required><br>

                        <input type="submit" value="Send" class="btn btn-dark">
                        <input type="reset" value="Reset" class="btn btn-dark">
                    </div>

                </form>
            </div>
        </div>

    </div>

</body>

</html>
