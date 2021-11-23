<!DOCTYPE html>
<html>

<head>
    <title>Tabel Departamente</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
        rel="stylesheet">
</head>

<body>

    <div class="container">
        <h1 style="margin: 10px 0 20px; text-align:center">Tabel Departamente</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nume</th>
                    <th width="300px;">Salariu mediu</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($data))

                    @foreach ($data as $key => $value)

                        <tr>
                            <td>{{ $value[0]->nume }}</td>
                            <td>{{ $value[1] }}</td>
                            {{-- <td>
                                <button class="btn btn-danger">Delete</button>
                            </td> --}}
                        </tr>

                    @endforeach
                @else
                    <tr>
                        <td colspan="10">There are no data.</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <p style="font-size: 20px">{{ $departamente->onEachSide(2)->links() }}</p>
    </div>
    <style>
        .w-5 {
            display: none;
        }

    </style>
</body>

</html>
