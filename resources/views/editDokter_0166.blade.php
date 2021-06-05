<h1>Edit Dokter</h1>
<form action="{{url('dokter/'. $data->id)}}" method="POST">
@csrf
    <input type="hidden" name="_method" value="patch">
    nama: <input type="text" name="nama" value="{{$data->nama}}"/>
    jabatan: <input type="text" name="jbt" value="{{$data->jabatan}}"/>
    <button type="submit">Simpan</button>
</form>
