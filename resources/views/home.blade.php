@extends('layouts.master')

@section('content')
    <ul>
        @foreach ($trains as $train)
            <li><p>{{ $train->azienda }}, {{ $train->stazione_partenza }}, {{ $train->stazione_arrivo }}, {{ $train->orario_partenza }}, 
                {{ $train->orario_arrivo }}, {{ $train->codice_treno }}, {{ $train->totale_carrozze }}, {{ $train->in_orario }}, {{ $train->cancellato }}</p></li>
        @endforeach
    </ul>
@endsection