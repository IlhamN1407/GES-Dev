<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Data Penawaran</h1>
    <table id="customers">
        <tr>
            <th>ID</th>
            <th>email</th>
            <th>nama perusahaan</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Perihal</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->id_penawaran }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->nama_PT }}</td>
                <td>{{ $item->Alamat }}</td>
                <td>{{ $item->No_HP }}</td>
                <td>{{ $item->Perihal }}</td>
            </tr>
        @endforeach

    </table>

</body>

</html>
