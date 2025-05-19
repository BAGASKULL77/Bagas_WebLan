<!DOCTYPE html>
<html>
<head>
    <title>Form Admin</title>
</head>
<body>
    <h1>Form Tambah Admin</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/admin">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama"><br>

        <label>Email:</label>
        <input type="email" name="email"><br>

        <label>No. HP:</label>
        <input type="text" name="no_hp"><br>

        <label>Alamat:</label>
        <textarea name="alamat"></textarea><br>

        <label>Role:</label>
        <select name="role">
            <option value="Super Admin">Super Admin</option>
            <option value="Kasir">Kasir</option>
        </select><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>