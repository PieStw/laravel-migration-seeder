@extends('layouts.master')

@section('content')
    <h1>Benvenuto nella pagina principale</h1>
    <p>Di seguito trovi la lista dei treni disponibili:</p>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Azienda</th>
            <th scope="col">Stazione di partenza</th>
            <th scope="col">Stazione di arrivo</th>
            <th scope="col">Orario partenza</th>
            <th scope="col">Orario arrivo</th>
            <th scope="col">Codice treno</th>
            <th scope="col">N° carrozze</th>
            <th scope="col">In orario</th>
            <th scope="col">Cancellato</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $index => $train)
            <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $train->azienda }}</td>
                <td>{{ $train->stazione_partenza }}</td>
                <td>{{ $train->stazione_arrivo }}</td>
                <td>{{ $train->orario_partenza }}</td>
                <td>{{ $train->orario_arrivo }}</td>
                <td>{{ $train->codice_treno }}</td>
                <td>{{ $train->totale_carrozze }}</td>
                <td>{{ $train->in_orario ? 'Sì' : 'No' }}</td>
                <td>{{ $train->cancellato ? 'Sì' : 'No' }}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection