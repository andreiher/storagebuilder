<p>
    Buna ziua,<br>
    Ati primit o cerere de oferta de la 
    {{ $data->nume }} {{ $data->prenume }} ( {{ $data->email }} - {{ $data->telefon }}) cu urmatoarele informatii:
</p>
<p>
    @foreach($data->fillable as $input)
        @if($data->getAttribute($input))
            <?php
            if(in_array($input, ["nume","prenume","email","telefon"])) continue;

            $label = str_replace(["_","-"]," ",$input);
            $value = $data->getAttribute($input);
            $value = is_array($value) ? implode(", ", $value) : $value;

            // checkboxes
            if(in_array($input, ["avize_autorizatii","teren_disponibil","finantare"])) {
                $value = $value > 0 ? "Da" : "Nu";
            }

            // adauga unitatea de masura
            if(in_array($input, ["tip_acoperis-grosime", "tip_acoperis-grosime-vata", "tip_acoperis-grosime-membrana","tip_pereti-grosime"])) { $value = $value."mm"; }
            if(in_array($input, ["lungime", "latime", "inaltime"])) { $value = $value."m"; }
            if(in_array($input, [
                "suprafata_totala",
                "suprafata_construita",
                "mezanin_suprafata",
                "copertina_suprafata",
                "pod_rulant_sarcina",
            ])) { $value = $value."m2"; }

            ?>
            <strong>{{ ucfirst($label) }}:</strong> {{ ucfirst(str_replace(["-","_"], " ", $value)) }} <br>
        @endif
    @endforeach
</p>