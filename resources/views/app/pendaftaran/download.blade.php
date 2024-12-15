<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9fafb;
        }

        .card {
            width: 100%;
            max-width: 600px;
            margin: 30px auto;
            background-color: white;
            border: 2px solid #4CAF50;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border-radius: 8px;
            text-align: center;
        }

        .card-header img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
            vertical-align: middle;
        }

        .card-header h1 {
            font-size: 18px;
            margin: 0;
            font-weight: bold;
        }

        .card-header p {
            font-size: 12px;
            margin: 5px 0;
        }

        .card-body {
            display: flex;
            margin-top: 20px;
        }

        .card-body img {
            width: 120px;
            height: 160px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .card-body .info {
            margin-left: 20px;
        }

        .card-body .info h2 {
            font-size: 22px;
            margin-bottom: 5px;
            color: #4CAF50;
        }

        .card-body .info p {
            font-size: 14px;
            margin: 5px 0;
            color: #555;
        }

        .card-footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>

<body>
    <div class="card">
        <!-- Card Header -->
        <div class="card-header">
            <img src="https://via.placeholder.com/50" alt="Logo Universitas" />
            <div>
                <h1>Universitas Terbaik</h1>
                <p>Jl. Batu Angus Kel. Dufa-Dufa, Kec. Ternate Utara</p>
                <p>Tlp. (021) 7690901 | Email: admin@univterbaik.ac.id</p>
            </div>
        </div>

        <!-- Card Body -->
        <div class="card-body">
            <!-- Photo -->
            <img src="{{ Storage::url($mahasiswa->foto) }}" alt="Foto Mahasiswa" />
            <!-- Info -->
            <div class="info">
                <h2>{{ $mahasiswa->nama }}</h2>
                <p>Email: {{ $mahasiswa->email }}</p>
                <p>NPM: {{ $mahasiswa->nim }}</p>
                <p>Jenis Kelamin: {{ $mahasiswa->jenis_kelamin }}</p>
                <p>Agama: {{ $mahasiswa->agama }}</p>
            </div>
        </div>

        <!-- Card Footer -->
        <div class="card-footer">
            <p>Printed on: {{ date('Y-m-d') }}</p>
        </div>
    </div>
</body>

</html>
