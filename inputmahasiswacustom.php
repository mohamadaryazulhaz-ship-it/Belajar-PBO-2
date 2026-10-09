<?php
    // Menyiapkan variabel
    $nim = "";
    $nama = "";
    $fakultas = "";
    $prodi = "";
    $asal_sekolah = "";
    $semester = "";
    $hobi = "";

    // Mengecek apakah form sudah dikirim
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $fakultas = $_POST["fakultas"];
        $prodi = $_POST["prodi"];
        $asal_sekolah = $_POST["asal_sekolah"];
        $semester = $_POST["semester"];
        $hobi = $_POST["hobi"];
    }
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Mahasiswa</title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #0f2747, #234f7d, #4f8bc9);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px 15px;
            overflow-x: hidden;
        }

        /* =========================
           ANIMASI BACKGROUND
        ========================= */

        .circle {
            position: fixed;
            border-radius: 50%;
            background: rgba(255,255,255,0.08);
            animation: floating 8s infinite ease-in-out;
            z-index: 0;
        }

        .circle1 {
            width: 250px;
            height: 250px;
            top: -80px;
            left: -80px;
        }

        .circle2 {
            width: 350px;
            height: 350px;
            bottom: -150px;
            right: -100px;
            animation-delay: 2s;
        }

        .circle3 {
            width: 120px;
            height: 120px;
            top: 20%;
            right: 15%;
            animation-delay: 4s;
        }

        @keyframes floating {

            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-25px) rotate(10deg);
            }
        }


        /* =========================
           CONTAINER
        ========================= */

        .container {
            position: relative;
            z-index: 2;

            width: 100%;
            max-width: 650px;

            background: rgba(255, 255, 255, 0.96);

            padding: 35px;

            border-radius: 22px;

            box-shadow:
                0 20px 50px rgba(0,0,0,0.25);

            animation: muncul 0.8s ease;
        }

        @keyframes muncul {

            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }


        /* =========================
           HEADER
        ========================= */

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .icon {
            width: 70px;
            height: 70px;

            margin: auto;
            margin-bottom: 15px;

            border-radius: 50%;

            background: linear-gradient(135deg, #234f7d, #4f8bc9);

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 32px;

            box-shadow: 0 8px 20px rgba(35,79,125,0.3);

            animation: iconFloat 3s infinite ease-in-out;
        }

        @keyframes iconFloat {

            0%, 100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-7px);
            }
        }

        h1 {
            color: #234f7d;
            margin-bottom: 8px;
            font-size: 28px;
        }

        .subtitle {
            color: #777;
            font-size: 14px;
        }


        /* =========================
           FORM
        ========================= */

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            color: #333;
            font-weight: bold;
            font-size: 14px;
        }

        .required {
            color: #e74c3c;
        }

        input,
        select {

            width: 100%;

            padding: 13px 15px;

            border: 2px solid #e1e5ea;

            border-radius: 10px;

            font-size: 14px;

            outline: none;

            background-color: #fafafa;

            transition: 0.3s;
        }

        input:focus,
        select:focus {

            border-color: #234f7d;

            background-color: white;

            box-shadow: 0 0 0 4px rgba(35,79,125,0.1);

            transform: translateY(-1px);
        }

        input::placeholder {
            color: #aaa;
        }


        /* =========================
           GRID
        ========================= */

        .row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }


        /* =========================
           BUTTON
        ========================= */

        button {

            width: 100%;

            margin-top: 10px;

            padding: 14px;

            border: none;

            border-radius: 10px;

            background: linear-gradient(
                135deg,
                #234f7d,
                #3d78ad
            );

            color: white;

            font-size: 16px;

            font-weight: bold;

            cursor: pointer;

            transition: 0.3s;

            box-shadow: 0 8px 18px rgba(35,79,125,0.25);
        }

        button:hover {

            transform: translateY(-3px);

            box-shadow:
                0 12px 25px rgba(35,79,125,0.35);
        }

        button:active {

            transform: translateY(0);

        }


        /* =========================
           HASIL
        ========================= */

        .hasil {

            margin-top: 30px;

            padding: 25px;

            background: linear-gradient(
                135deg,
                #eef5fa,
                #f8fbfd
            );

            border-radius: 15px;

            border-left: 5px solid #234f7d;

            animation: hasilMuncul 0.7s ease;
        }

        @keyframes hasilMuncul {

            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .hasil h2 {

            color: #234f7d;

            margin-bottom: 18px;

            text-align: center;

        }

        .data {

            background: white;

            padding: 12px 15px;

            margin-bottom: 8px;

            border-radius: 8px;

            display: flex;

            justify-content: space-between;

            gap: 15px;

            border: 1px solid #edf0f2;

        }

        .data strong {

            color: #234f7d;

        }

        .data span {

            color: #444;

            text-align: right;

        }


        /* =========================
           FOOTER
        ========================= */

        .footer {

            text-align: center;

            margin-top: 20px;

            color: #999;

            font-size: 12px;
        }


        /* =========================
           RESPONSIVE HP
        ========================= */

        @media (max-width: 600px) {

            .container {

                padding: 25px 20px;

                border-radius: 18px;
            }

            h1 {
                font-size: 24px;
            }

            .row {

                grid-template-columns: 1fr;

                gap: 0;
            }

            .data {

                flex-direction: column;

                gap: 5px;
            }

            .data span {

                text-align: left;
            }

        }

    </style>

</head>


<body>

    <!-- Animasi background -->

    <div class="circle circle1"></div>
    <div class="circle circle2"></div>
    <div class="circle circle3"></div>


    <div class="container">

        <!-- HEADER -->

        <div class="header">

            <div class="icon">
                👨‍🎓
            </div>

            <h1>Data Mahasiswa</h1>

            <p class="subtitle">
                Silakan isi data diri kamu dengan lengkap
            </p>

        </div>


        <!-- FORM -->

        <form method="POST">

            <div class="row">

                <div class="form-group">

                    <label>
                        NIM <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        name="nim"
                        placeholder="Contoh: 231234567"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>
                        Nama Mahasiswa <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        name="nama"
                        placeholder="Nama lengkap"
                        required
                    >

                </div>

            </div>


            <div class="row">

                <div class="form-group">

                    <label>
                        Fakultas <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        name="fakultas"
                        placeholder="Contoh: Saintek"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>
                        Program Studi <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        name="prodi"
                        placeholder="Contoh: Teknik Informatika"
                        required
                    >

                </div>

            </div>


            <div class="form-group">

                <label>
                    Asal Sekolah <span class="required">*</span>
                </label>

                <input
                    type="text"
                    name="asal_sekolah"
                    placeholder="Contoh: SMAN 1 Sukabumi"
                    required
                >

            </div>


            <div class="row">

                <div class="form-group">

                    <label>
                        Semester <span class="required">*</span>
                    </label>

                    <select name="semester" required>

                        <option value="">
                            -- Pilih Semester --
                        </option>

                        <option value="1">
                            Semester 1
                        </option>

                        <option value="2">
                            Semester 2
                        </option>

                        <option value="3">
                            Semester 3
                        </option>

                        <option value="4">
                            Semester 4
                        </option>

                        <option value="5">
                            Semester 5
                        </option>

                        <option value="6">
                            Semester 6
                        </option>

                        <option value="7">
                            Semester 7
                        </option>

                        <option value="8">
                            Semester 8
                        </option>

                    </select>

                </div>


                <div class="form-group">

                    <label>
                        Hobi
                    </label>

                    <input
                        type="text"
                        name="hobi"
                        placeholder="Contoh: Basket, Gaming"
                    >

                </div>

            </div>


            <button type="submit">
                💾 Simpan Data Mahasiswa
            </button>

        </form>


        <!-- HASIL DATA -->

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>

            <div class="hasil">

                <h2>✨ Data Berhasil Disimpan!</h2>


                <div class="data">

                    <strong>NIM</strong>

                    <span>
                        <?= htmlspecialchars($nim) ?>
                    </span>

                </div>


                <div class="data">

                    <strong>Nama</strong>

                    <span>
                        <?= htmlspecialchars($nama) ?>
                    </span>

                </div>


                <div class="data">

                    <strong>Fakultas</strong>

                    <span>
                        <?= htmlspecialchars($fakultas) ?>
                    </span>

                </div>


                <div class="data">

                    <strong>Program Studi</strong>

                    <span>
                        <?= htmlspecialchars($prodi) ?>
                    </span>

                </div>


                <div class="data">

                    <strong>Asal Sekolah</strong>

                    <span>
                        <?= htmlspecialchars($asal_sekolah) ?>
                    </span>

                </div>


                <div class="data">

                    <strong>Semester</strong>

                    <span>
                        Semester <?= htmlspecialchars($semester) ?>
                    </span>

                </div>


                <div class="data">

                    <strong>Hobi</strong>

                    <span>
                        <?= htmlspecialchars($hobi) ?: "Tidak diisi" ?>
                    </span>

                </div>

            </div>

        <?php } ?>


        <div class="footer">
            Sistem Informasi Data Mahasiswa © 2026
        </div>

    </div>

</body>

</html>