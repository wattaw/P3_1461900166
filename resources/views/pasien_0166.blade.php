<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Data Pasien</title>
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
 <h1>TABEL Pasien</h1>
    
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasien_0166_data as $psn)
            <tr>
                <td>{{$psn->id}}</td>
                <td>{{$psn->nama}}</td>
                <td>{{$dtr->alamat}}</td>
                <td>
                   <a href="/pasien/{{$psn->id}}/edit">Edit</a>
                    <form action="{{url('pasien/'.$psn->id)}}" method="post">
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
    <a href="pasien/create">Tambah Pasien</a>
    </div>
</body>