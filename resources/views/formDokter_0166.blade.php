<h1>Input Dokter</h1>
<form action="{{route('dokter.store')}}" method="POST">
@csrf
    nama: <input type="text" name="nama" value=""/>
    jabatan: <input type="text" name="jbt" value=""/>
    <button type="submit">Simpan</button>
</form>
