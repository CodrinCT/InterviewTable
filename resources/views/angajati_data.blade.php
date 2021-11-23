@if (!empty($angajati))
    <div>
        @if (empty($departementSearch))
            @foreach ($angajati as $key => $angajat)
                <tr>
                    <td>{{ $angajat->id_angajati }}</td>
                    <td>{{ $angajat->nume }}</td>
                    <td>{{ $angajat->departament->nume }}</td>
                    <td>{{ $angajat->departament->descriere }}</td>
                    <td>{{ $angajat->CNP }}</td>
                    <td>{{ $angajat->functie }}</td>
                    <td>{{ $angajat->salariu }}</td>
                    <td>{{ $angajat->zile_concediu }}</td>
                </tr>
            @endforeach
        @endif
    </div>
    <ul class="pagination">
        <li class="page-item">{!! $angajati->links() !!}</li>
    </ul>
@endif
