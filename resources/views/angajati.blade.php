<!DOCTYPE html>
<html>

<head>
    <title>Tabel Angajati</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
        rel="stylesheet">
</head>

<body>
    <div class="container fluid">
        <h1 style="padding: 10px; margin:10px 0 20px; text-align:center">Tabel Angajati</h1>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="text-align: center">id angajat</th>
                    <th style="text-align: center">Nume</th>
                    <th style="text-align: center">Departament</th>
                    <th style="text-align: center">Descriere Dep.</th>
                    <th style="text-align: center">cnp</th>
                    <th style="text-align: center">functie</th>
                    <th style="text-align: center">salariu</th>
                    <th style="text-align: center">zile concediu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input class="form-control" type="number" placeholder="ID angajat" name="id_angajat"
                            id="id_angajati" />
                    </td>
                    <td><input class="form-control" type="text" placeholder="nume" name="nume" id="nume" /></td>
                    <td>
                    <input class="form-control" type="text" placeholder="departament" name="departament" id="departament" />
                    </td>
                    <td>
                    </td>
                    <td><input class="form-control" type="number" placeholder="CNP" name="CNP" id="CNP" /></td>
                    <td><input class="form-control" type="text" placeholder="Functie" name="functie" id="functie" />
                    </td>
                    <td><input class="form-control" type="number" placeholder="Salariu" name="salariu" id="salariu" />
                    </td>
                    <td><input class="form-control" type="number" placeholder="Zile Concediu" name="zile_concediu"
                            id="zile_concediu" />
                    </td>
                </tr>
            </tbody>
            <tbody id="angajati_data">
                @include('angajati_data')
            </tbody>
        </table>
    </div>
    <style>
        .w-5 {
            font-size: 20px;
        }

    </style>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script>
    $(document).ready(function() {

        $(document).on('click', ' .pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            getMoreAngajati(page);
        });
    });

    function getMoreAngajati(page) {
        $.ajax({
            type: "GET",
            url: "{{ route('get-more-angajati') }}" + "?page=" + page,
            success: function(data) {
                console.log(data);
                $('#angajati_data').html(data);

            }
        })
    }
    $(document).ready(function() {
        getMoreAngajati(1)
        $('#nume , #descriere, #id_angajati, #departament, #functie, #zile_concediu, #salariu, #CNP')
            .on('keyup ', function() {
                var query = $(this).val();
                $.ajax({
                    url: "search",
                    type: "GET",
                    data: {
                        "search": query,
                        "searchLocation": $(this).attr('id')
                    },
                    async: true,
                    success: function(data) {
                        if (data !== null) {
                            console.log(data);
                            $('#angajati_data').html(data)
                        } else {
                            location.reload();
                        }

                    }
                });
            });
    })
</script>

</html>
