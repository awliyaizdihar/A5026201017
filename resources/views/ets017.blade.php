<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pendaftaran Kuota Internet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        function validate() {
            let arr = Array.from(document.getElementById("nama").value);
            for (let i = 0; i < arr.length; i++) {
                if (arr[i] != " ") {
                    if (!arr[i].match(/^[a-zA-Z\s]*$/)) {
                        alert("Nama Mahasiswa harus berisi alfabet");
                        return false;
                    }
                }
            }
            if (arr.length <= 1) {
                alert("Nama Mahasiswa harus lebih dari 1 huruf");
                return false;
            }
            let n = document.getElementById("nopon").value;
            if (isNaN(n)) {
                alert("Nomor Handphone hanya boleh berisi angka");
                return false;
            }
        }
    </script>
    <style>
        .card {
            border-style: solid;
            border-width: 1px;
            padding: 20px 50px;
        }
        * {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }
        .identity {
            text-align: left;
            font-size: 14px;
        }
        .judul {
            font-size: large;
        }
        input[type=text],
        select {
            width: 50%;
            margin: 8px 0;
            display: inline-block;
            padding: 5px 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type=submit] {
            width: 150px;
            background-color: blue;
            color: white;
            padding: 5px 5px;
            margin: 10px;
            border: none;
            cursor: pointer;
            font-size: medium;
        }
        input[type=reset] {
            width: 150px;
            background-color: chartreuse;
            padding: 5px 5px;
            margin: 10px;
            border: none;
            cursor: pointer;
            font-size: medium;
        }
    </style>
</head>

<body>

    <div class="container pt-3">

        <div class="card">
            <div class="identity">
                Nama Mahasiswa: Awliya Hanun Izdihar<br>
                Nama Panggilan: Awliya<br>
                NRP: 5026201017
            </div>

            <div>
                <p class="judul">Form Pendaftaran Kuota Internet</p>
            </div>


            <div>
                <form method="post" action="https://www.bukalapak.com/" onsubmit="return validate()">

                    <div class="form-group">

                        <label for="nama">Nama Mahasiswa    :</label>
                        <input type="text" id="nama" name="nama" class="form-control" required><br>

                        <label for="nrp">NRP Mahasiswa  :</label>
                        <input type="text" id="nrp" name="nrp" pattern="[0-9]{10}"
                            title="NRP Mahasiswa harus berisi 10 digit angka" class="form-control" required><br>

                        <label for="course">Jurusan :</label>
                        <select class="form-control" id="course" name="course" required>
                            <option selected disabled></option>
                            <option>Sistem Informasi</option>
                            <option>Elektro</option>
                            <option>Informatika</option>
                        </select><br>

                        <label for="nopon">Nomor Handphone  :</label>
                        <input type="text" id="nopon" name="nopon" minlength="10"
                            title="Nomor Handphone minimal 10 digit angka" class="form-control" required><br>

                        <input type="submit" value="Kirim">
                        <input type="reset" value="Reset">
                    </div>

                </form>
            </div>

        </div>
    </div>

</body>

</html>
