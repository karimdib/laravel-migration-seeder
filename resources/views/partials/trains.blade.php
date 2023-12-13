@vite('resources/js/app.js')
<div class="container">
    <div class="row">
        @foreach ($trainss as $key =>$value)
        <div class="col-4 card">
            <ul>
                <li>{{$value->azienda}}</li>
                <li>{{$value->stazione_di_arrivo}}</li>
                <li>{{$value->orario_di_partenza}}</li>
                <li>{{$value->orario_di_arrivo}}</li>
                <li>{{$value->codice_treno}}</li>
                <li>{{$value->numero_carrozze}}</li>
                <li>{{$value->in_orario}}</li>
                <li>{{$value->cancellato}}</li>
            </ul>
        </div>
        @endforeach
    </div>
</div>