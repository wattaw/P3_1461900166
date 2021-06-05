<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Data Dokter</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>
<body>
 <h1>TABEL DOKTER</h1>
    
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Pasien</th>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($dokter_0166_data as $dtr)
            <tr>
                <td>{{$dtr->id}}</td>
                <td>{{$dtr->nama}}</td>
                <td>{{$dtr->jabatan}}</td>
                <td>Dino , Joko</td>
                <td>
                   <a href="/dokter/{{$dtr->id}}/edit">Edit</a>
                    <form action="{{url('dokter/'.$dtr->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                    <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br>
    <a href="dokter/create">Tambah Dokter</a>
    </div>
</body>