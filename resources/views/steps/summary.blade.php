<h1>@lang("messages.summary_title")</h1>
<p>@lang("messages.summary_text")</p>

<br/>
<div class="summary-screen">
    <div class="row">
        <div class="col-md-6">
            <h3></h3>
            <p><span class="firma">-</span></p>
            <p><i class="far fa-envelope"></i> <span class="email">-</span><p>
            <p><i class="fas fa-phone"></i> <span class="telefon">-</span><p>
        </div>
        <div class="col-md-6">
            <h3@lang("messages.objective")></h3>
            <p><span class="destinatie_cladire">-</span></p>
            <p>@lang("messages.structure_type"): <span class="tip_structura">-</span></p>
            <p>@lang("messages.built_area"): <span class="suprafata_construita">-</span> m<sup>2</sup></p>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-6">
            <h3>@lang("messages.details")</h3>
            <p>@lang("messages.length"): <span class="lungime">-</span>m </p>
            <p>@lang("messages.width"): <span class="latime">-</span>m </p>
            <p>@lang("messages.height"): <span class="inaltime">-</span> m </p>
            <p>@lang("messages.roof_slope"): <span class="panta_acoperis">-</span></p>
            <p>@lang("messages.pluvial_system"): <span class="sistem_pluvial">-</span></p>
            <p>@lang("messages.entresol"): <span class="mezanin">-</span> <span class="toggle-mezanin hidden">(@lang("messages.entresol_area"): <span class="mezanin_suprafata">-</span>m<sup>2</sup>)</span></p>
            <p>@lang("messages.blind"): <span class="copertina">-</span> <span class="toggle-copertina hidden">(@lang("messages.blind_area"): <span class="copertina_suprafata">-</span>m<sup>2</sup>)</span></p>
            <p>@lang("messages.slide_bridge"): <span class="pod_rulant">-</span> <span class="toggle-pod_rulant hidden">(@lang("messages.slide_bridge_load"): <span class="pod_rulant_sarcina">-</span>m<sup>2</sup>)</span></p>
            <p>@lang("messages.insulated_building"): <span class="cladire_izolata">-</span></p>
            <div class="toggle-cladire_izolata hidden">
                <p>@lang("messages.roof_type"): <span class="tip_acoperis">-</span></p>
                <div class="toggle-tabla-vata-membrana hidden">
                    <p>@lang("messages.mineral_wool_thickness"): <span class="tip_acoperis-grosime-vata">-</span> mm</p>
                    <p>@lang("messages.membrane_type"): <span class="tip_acoperis-tip_membrana">-</span> <span class="tip_acoperis-grosime-membrana">-</span> mm</p>
                    <hr>
                </div>
                <div class="toggle-panou-sandwich-spuma hidden">
                    <p>@lang("messages.roof_thickness"): <span class="tip_acoperis-grosime">-</span> mm</p>
                    <hr>
                </div>
                <p>@lang("messages.walls_type"): <span class="tip_pereti">-</span> (@lang("messages.walls_thickness"): <span class="tip_pereti-grosime">-</span>mm)</p>
            </div>
            <p>@lang("messages.smoke_hatches"): <span class="trape_fum">-</span> </p>
            <p>@lang("messages.windows"): <span class="ferestre">-</span> </p>
            <p>@lang("messages.industrial_doors"): <span class="usi_sectionale">-</span> </p>
            <p>@lang("messages.pedestrian_doors"): <span class="usi_pietonale">-</span> </p>
            <p>@lang("messages.tir_access_ramps"): <span class="rampe_acces_tir">-</span> </p>
        </div>
        <div class="col-md-6">
            <img id="preview-image" src="" class="img-fluid">
            <input id="preview-image-input" type="hidden" name="snapshot" value="">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p><span class="teren_disponibil"><i class="fas fa-times"></i></span> @lang("messages.building_land_available")</p>
            <p><span class="avize_autorizatii"><i class="fas fa-times"></i></span> @lang("messages.authorizations_obtained")</p>
        </div>
        <div class="col-md-6">
            <p><span class="finantare"><i class="fas fa-times"></i></span> @lang("messages.financing_available")</p>
            {{-- <p><span class="teren_disponibil"><i class="fas fa-check"></i>-</span> Proiectul de arhitectura este gata</p> --}}
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <p>@lang("messages.project_start_date"): <span class="data_inceput">-</span></p>
        </div>
        <div class="col">
            <p>@lang("messages.project_end_date"): <span class="data_sfarsit">-</span></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>@lang("messages.extra_information"): <span class="extra_info">-</span></p>
        </div>
    </div>
</div>

<hr/>
<div class="row">
    <div class="col-md-3">
        <button type="button" class="btn btn-default prevstep">@lang("messages.back")</button>
    </div>
    <div class="col-md-9 text-right">
        <label class="mr-4">@lang("messages.terms-and-conditions") <input id="terms_and_conditions" type="checkbox" value="1"> </label>
        <button type="submit" disabled="disabled" class="btn btn-primary">@lang("messages.submit")</button>
    </div>
</div>
