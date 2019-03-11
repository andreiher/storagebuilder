<p>
    Buna ziua,<br>
    Ati primit o cerere de oferta de la 
    {{ $data->nume }} {{ $data->prenume }} ( {{ $data->email }} - {{ $data->telefon }}) cu urmatoarele informatii:
</p>
<p>
    @foreach($data->fillable as $input) 
        @if($data->getAttribute($input))
            <strong>{{ ucfirst(str_replace("_"," ",$input)) }}:</strong> {{ $data->getAttribute($input)}} <br>
        @endif
    @endforeach
</div>