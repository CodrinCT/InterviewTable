@if (!empty($angajati))
        @if (empty($searchLocation))
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
            {{--  <ul class="pagination">
                <li class="page-item">{!! $angajati->links() !!}</li>
            </ul>  --}}
        @endif
        @if (!empty($searchLocation))
        @foreach ($angajati as $key => $angajatiArr)
            @foreach ($angajatiArr as $value)
                <tr>
                    <td>{{ $value->id_angajati }}</td>
                    <td>{{ $value->nume }}</td>
                    <td>{{ $value->departament->nume }}</td>
                    <td>{{ $value->departament->descriere }}</td>
                    <td>{{ $value->CNP }}</td>
                    <td>{{ $value->functie }}</td>
                    <td>{{ $value->salariu }}</td>
                    <td>{{ $value->zile_concediu }}</td>
                    {{--  <td>{{ $value }}</td>  --}}
                </tr>
            @endforeach
         @endforeach
         {{--  <ul class="pagination">
            <li class="page-item">{!! $angajati->links() !!}</li>
        </ul>  --}}
        @endif

   
@endif
