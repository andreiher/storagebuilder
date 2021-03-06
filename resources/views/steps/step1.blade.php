<div class="row">


    <div class="col-md-9 col-sm-6 canvas-container" id="building-preview"></div>

    <div class="col-md-3 col-sm-6 details-section-side offset-md-9 offset-sm-6 pt-5">
        <br>
        <h2>@lang("messages.building_information")</h2>
        <div class="form-group">
            <label>@lang("messages.building_type")*</label>
            <select class="form-control" id="type" name="destinatie_cladire" required>
                <option value="">@lang("messages.select_option")</option>
                <option value="hala_productie" {{ old("destinatie_cladire") == "hala_productie" ? 'selected="selected"' : ''}}>@lang("messages.building_type_production_hall")</option>
                <option value="hala_logistica" {{ old("destinatie_cladire") == "hala_logistica" ? 'selected="selected"' : ''}}>@lang("messages.building_type_logistics_hall")</option>
                <option value="depozit" {{ old("destinatie_cladire") == "depozit" ? 'selected="selected"' : ''}}>@lang("messages.building_type_warehouse")</option>
                <option value="centru_administrativ" {{ old("destinatie_cladire") == "centru_administrativ" ? 'selected="selected"' : ''}}>@lang("messages.building_type_adm_center")</option>
                <option value="sala_de_sport" {{ old("destinatie_cladire") == "sala_de_sport" ? 'selected="selected"' : ''}}>@lang("messages.building_type_gym")</option>
                <option value="altele" {{ old("destinatie_cladire") == "altele" ? 'selected="selected"' : ''}}>@lang("messages.building_type_other")</option>
            </select>
        </div>

        <div class="form-group">
            <label>@lang("messages.structure_type")*</label>
            <select class="form-control" id="structure_type" name="tip_structura" required>
                <option value="">@lang("messages.select_option")</option>
                <option value="metal" {{ old("tip_structura") == "metal" ? 'selected="selected"' : ''}}>@lang("messages.structure_type_metal")</option>
                <option value="beton" {{ old("tip_structura") == "beton" ? 'selected="selected"' : ''}}>@lang("messages.structure_type_concrete")</option>
                <option value="mixta" {{ old("tip_structura") == "mixta" ? 'selected="selected"' : ''}}>@lang("messages.structure_type_mixed")</option>
            </select>
        </div>

        <div class="form-group">
            <label>@lang("messages.color")</label>
            <ul class="list-unstyled list-inline color-picker">
                <li>
                    <label data-toggle="tooltip" data-placement="top" title="RAL 1015">
                        <input type="radio" {{ old("color") == "RAL 1015" ? 'checked="checked"' : ''}} name="color" class="shed-color" value="RAL 1015">
                        <span class="color-sample" style="background-color: #deccaa"></span>
                    </label>
                </li>
                <li>
                    <label data-toggle="tooltip" data-placement="top" title="RAL 1021">
                        <input type="radio" {{ old("color") == "RAL 1021" ? 'checked="checked"' : ''}} name="color" class="shed-color" value="RAL 1021">
                        <span class="color-sample" style="background-color: #ffd92d"></span>
                    </label>
                </li>
                <li>
                    <label data-toggle="tooltip" data-placement="top" title="RAL 2008">
                        <input type="radio" {{ old("color") == "RAL 2008" ? 'checked="checked"' : ''}} name="color" class="shed-color" value="RAL 2008">
                        <span class="color-sample" style="background-color: #f37f2d"></span>
                    </label>
                </li>
                <li>
                    <label data-toggle="tooltip" data-placement="top" title="RAL 3000">
                        <input type="radio" {{ old("color") == "RAL 3000" ? 'checked="checked"' : ''}} name="color" class="shed-color" value="RAL 3000">
                        <span class="color-sample" style="background-color: #be1729"></span>
                    </label>
                </li>
                <li>
                    <label data-toggle="tooltip" data-placement="top" title="RAL 3005">
                        <input type="radio" {{ old("color") == "RAL 3005" ? 'checked="checked"' : ''}} name="color" class="shed-color" value="RAL 3005">
                        <span class="color-sample" style="background-color: #871027"></span>
                    </label>
                </li>
                <li>
                    <label data-toggle="tooltip" data-placement="top" title="RAL 3011">
                        <input type="radio" {{ old("color") == "RAL 3011" ? 'checked="checked"' : ''}} name="color" class="shed-color" value="RAL 3011">
                        <span class="color-sample" style="background-color: #87121c"></span>
                    </label>
                </li>
                <li>
                    <label data-toggle="tooltip" data-placement="top" title="RAL 5010">
                        <input type="radio" {{ old("color") == "RAL 5010" ? 'checked="checked"' : ''}} name="color" class="shed-color" value="RAL 5010">
                        <span class="color-sample" style="background-color: #0b5481"></span>
                    </label>
                </li>
                <li>
                    <label data-toggle="tooltip" data-placement="top" title="RAL 6005">
                        <input type="radio" {{ old("color") == "RAL 6005" ? 'checked="checked"' : ''}} name="color" class="shed-color" value="RAL 6005">
                        <span class="color-sample" style="background-color: #0b3923"></span>
                    </label>
                </li>
                <li>
                    <label data-toggle="tooltip" data-placement="top" title="RAL 6011">
                        <input type="radio" {{ old("color") == "RAL 6011" ? 'checked="checked"' : ''}} name="color" class="shed-color" value="RAL 6011">
                        <span class="color-sample" style="background-color: #678259"></span>
                    </label>
                </li>
                <li>
                    <label data-toggle="tooltip" data-placement="top" title="RAL 7016">
                        <input type="radio" {{ old("color") == "RAL 7016" ? 'checked="checked"' : ''}} name="color" class="shed-color" value="RAL 7016">
                        <span class="color-sample" style="background-color: #2a3237"></span>
                    </label>
                </li>
                <li>
                    <label data-toggle="tooltip" data-placement="top" title="RAL 8012">
                        <input type="radio" {{ old("color") == "RAL 8012" ? 'checked="checked"' : ''}} name="color" class="shed-color" value="RAL 8012">
                        <span class="color-sample" style="background-color: #99453a"></span>
                    </label>
                </li>
                <li>
                    <label data-toggle="tooltip" data-placement="top" title="RAL 8017">
                        <input type="radio" {{ old("color") == "RAL 8017" ? 'checked="checked"' : ''}} name="color" class="shed-color" value="RAL 8017">
                        <span class="color-sample" style="background-color: #6d261b"></span>
                    </label>
                </li>
                <li>
                    <label data-toggle="tooltip" data-placement="top" title="RAL 8019">
                        <input type="radio" {{ old("color") == "RAL 8019" ? 'checked="checked"' : ''}} name="color" class="shed-color" value="RAL 8019">
                        <span class="color-sample" style="background-color: #2b1512"></span>
                    </label>
                </li>
                <li>
                    <label data-toggle="tooltip" data-placement="top" title="RAL 9002">
                        <input type="radio" {{ old("color") == "RAL 9002" ? 'checked="checked"' : ''}} name="color" class="shed-color" value="RAL 9002">
                        <span class="color-sample" style="background-color: #e7e4d3"></span>
                    </label>
                </li>
                <li>
                    <label data-toggle="tooltip" data-placement="top" title="RAL 9006">
                        <input type="radio" {{ old("color") == "RAL 9006" ? 'checked="checked"' : ''}} name="color" class="shed-color" value="RAL 9006">
                        <span class="color-sample" style="background-color: #a8aba5"></span>
                    </label>
                </li>
                <li>
                    <label data-toggle="tooltip" data-placement="top" title="RAL 9007">
                        <input type="radio" {{ old("color") == "RAL 9007" ? 'checked="checked"' : ''}} name="color" class="shed-color" value="RAL 9007">
                        <span class="color-sample" style="background-color: #868177"></span>
                    </label>
                </li>
                <li>
                    <label data-toggle="tooltip" data-placement="top" title="RAL 9010">
                        <input type="radio" {{ old("color") == "RAL 9010" ? 'checked="checked"' : ''}} name="color" class="shed-color" value="RAL 9010">
                        <span class="color-sample" style="background-color: #fbfae8"></span>
                    </label>
                </li>
            </ul>
        </div>

        <hr>

        <div class="form-group">
            <label>@lang("messages.length")*</label>
            <input type="number" lang="en" class="form-control" id="lungime" name="lungime" min="5" max="100" placeholder="@lang("messages.units_meters")" value="{{ old('lungime') }}" required>
            <div role="group" class="btn-group autofill-length">
                <button type="button" class="btn btn-primary" data-value="18">18m</button>
                <button type="button" class="btn btn-primary" data-value="24">24m</button>
                <button type="button" class="btn btn-primary" data-value="30">30m</button>
                <button type="button" class="btn btn-primary" data-value="36">36m</button>
                <button type="button" class="btn btn-primary" data-value="42">42m</button>
                <button type="button" class="btn btn-primary" data-value="48">48m</button>
            </div>
        </div>

        <div class="form-group">
            <label>@lang("messages.width")*</label>
            <input type="number" lang="en" class="form-control" id="latime" name="latime" min="5" max="100" placeholder="@lang("messages.units_meters")" value="{{ old('latime') }}" required>
            <div class="btn-group autofill-width" role="group">
                <button type="button" class="btn btn-primary" data-value="12">12m</button>
                <button type="button" class="btn btn-primary" data-value="14">14m</button>
                <button type="button" class="btn btn-primary" data-value="16">16m</button>
                <button type="button" class="btn btn-primary" data-value="18">18m</button>
                <button type="button" class="btn btn-primary" data-value="20">20m</button>
                <button type="button" class="btn btn-primary" data-value="22">22m</button>
            </div>
        </div>

        <div class="form-group">
            <label>@lang("messages.height")*</label>
            <input type="number" lang="en" class="form-control" id="inaltime" name="inaltime"  min="5" max="50" placeholder="@lang("messages.units_meters")" value="{{ old('inaltime') }}" required>
            <div class="btn-group autofill-height" role="group">
                <button type="button" class="btn btn-primary" data-value="5">5m</button>
                <button type="button" class="btn btn-primary" data-value="7.5">7.5m</button>
                <button type="button" class="btn btn-primary" data-value="10">10m</button>
                <button type="button" class="btn btn-primary" data-value="12.5">12.5m</button>
            </div>
        </div>

        <div class="form-group">
            <label>@lang("messages.total_area")</label>
            <input type="number" readonly lang="en" class="form-control" id="suprafata_totala" name="suprafata_totala" placeholder="@lang("messages.units_sqmeters")" value="{{ old('suprafata_totala') }}">
        </div>

        <div class="form-group">
            <label>@lang("messages.built_area")</label>
            <input type="number" lang="en" class="form-control" id="suprafata_construita" name="suprafata_construita" placeholder="@lang("messages.units_sqmeters")" value="{{ old('suprafata_construita') }}">
        </div>

        <hr>

        <div class="form-group">
            <label>@lang("messages.pluvial_system")</label>
            <select class="form-control" id="sistem_pluvial" name="sistem_pluvial">
                <option value="">@lang("messages.select_option")</option>
                <option value="jgheaburi-burlane" {{ old("sistem_pluvial") == "jgheaburi-burlane" ? 'selected="selected"' : ''}}>@lang("messages.pluvial_system_drains")</option>
                <option value="tip-geberit" {{ old("sistem_pluvial") == "tip-geberit" ? 'selected="selected"' : ''}}>@lang("messages.pluvial_system_gerberit")</option>
                <option value="nu-stiu" {{ old("sistem_pluvial") == "nu-stiu" ? 'selected="selected"' : ''}}>@lang("messages.pluvial_system_dontknow")</option>
            </select>
        </div>

        <div class="form-group">
            <label>@lang("messages.roof_slope")</label>
            <select class="form-control" id="panta_acoperis" name="panta_acoperis">
                <option value="">@lang("messages.select_option")</option>
                <option value="mic" {{ old("panta_acoperis") == "mic" ? 'selected="selected"' : ''}}>@lang("messages.roof_slope_morethan5")</option>
                <option value="mare" {{ old("panta_acoperis") == "mare" ? 'selected="selected"' : ''}}>@lang("messages.roof_slope_lessthan5")</option>
                <option value="nu-stiu" {{ old("panta_acoperis") == "nu-stiu" ? 'selected="selected"' : ''}}>@lang("messages.roof_slope_dontknow")</option>
            </select>
        </div>

        <hr>

        <div class="form-group">
            <label>@lang("messages.entresol")</label>
            <div class="float-right">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="mezanin-da" {{ old("mezanin") == trans("messages.yes") ? 'checked="checked"' : ''}} name="mezanin" class="custom-control-input" value="@lang("messages.yes")" data-checked-toggle="#mezanin-suprafata" data-toggle-value="@lang("messages.yes")">
                    <label class="custom-control-label" for="mezanin-da">@lang("messages.yes")</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="mezanin-nu" {{ old("mezanin") == trans("messages.no") ? 'checked="checked"' : ''}} name="mezanin" class="custom-control-input" value="@lang("messages.no")">
                    <label class="custom-control-label" for="mezanin-nu">@lang("messages.no")</label>
                </div>
            </div>
        </div>
        <div class="form-group p-2" id="mezanin-suprafata" {!! old("mezanin") && old("mezanin") == trans("messages.yes") ? '' : 'style="display:none"' !!}>
            <div class="form-group">
                <label>@lang("messages.entresol_area")</label>
                <input type="number" lang="en" class="form-control" id="mezanin_suprafata" name="mezanin_suprafata" placeholder="@lang("messages.units_sqmeters")" value="{{ old('mezanin_suprafata') }}">
            </div>
            <hr>
        </div>

        <div class="form-group">
            <label>@lang("messages.blind")</label>
            <div class="float-right">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="copertina-da" {{ old("copertina") == trans("messages.yes") ? 'checked="checked"' : ''}} name="copertina" class="custom-control-input" value="@lang("messages.yes")" data-checked-toggle="#copertina-suprafata" data-toggle-value="@lang("messages.yes")">
                    <label class="custom-control-label" for="copertina-da">@lang("messages.yes")</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="copertina-nu" {{ old("copertina") == trans("messages.no") ? 'checked="checked"' : ''}} name="copertina" class="custom-control-input" value="@lang("messages.no")">
                    <label class="custom-control-label" for="copertina-nu">@lang("messages.no")</label>
                </div>
            </div>
        </div>
        <div class="form-group p-2" id="copertina-suprafata" {!! old("copertina") && old("copertina") == trans("messages.yes") ? '' : 'style="display:none"' !!}>
            <div class="form-group">
                <label>@lang("messages.blind_area")</label>
                <input type="number" lang="en" class="form-control" id="copertina_suprafata" name="copertina_suprafata" placeholder="@lang("messages.units_sqmeters")" value="{{ old('copertina_suprafata') }}">
            </div>
            <hr>
        </div>


        <div class="form-group">
            <label>@lang("messages.slide_bridge")</label>
            <div class="float-right">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="pod_rulant-da" {{ old("pod_rulant") == trans("messages.yes") ? 'checked="checked"' : ''}} name="pod_rulant" class="custom-control-input" value="@lang("messages.yes")" data-checked-toggle="#pod_rulant-sarcina" data-toggle-value="@lang("messages.yes")">
                    <label class="custom-control-label" for="pod_rulant-da">@lang("messages.yes")</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="pod_rulant-nu" {{ old("pod_rulant") == trans("messages.no") ? 'checked="checked"' : ''}} name="pod_rulant" class="custom-control-input" value="@lang("messages.no")">
                    <label class="custom-control-label" for="pod_rulant-nu">@lang("messages.no")</label>
                </div>
            </div>
        </div>
        <div class="form-group p-2" id="pod_rulant-sarcina" {!! old("pod_rulant") && old("pod_rulant") == trans("messages.yes") ? '' : 'style="display:none"' !!}>
            <div class="form-group">
                <label for="pod_rulant_sarcina">@lang("messages.slide_bridge_load")</label>
                <input type="number" lang="en" class="form-control" id="pod_rulant_sarcina" name="pod_rulant_sarcina" placeholder="@lang("messages.units_tonnes")" value="{{ old('pod_rulant_sarcina') }}">
            </div>
        </div>

        <div class="form-group">
            <label>@lang("messages.insulated_building")</label>
            <div class="float-right">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="cladire_izolata-da" {{ old("cladire_izolata") == trans("messages.yes") ? 'checked="checked"' : ''}} name="cladire_izolata" class="custom-control-input" value="@lang("messages.yes")" data-checked-toggle="#cladire_izolata-detalii" data-toggle-value="@lang("messages.yes")">
                    <label class="custom-control-label" for="cladire_izolata-da">@lang("messages.yes")</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="cladire_izolata-nu" {{ old("cladire_izolata") == trans("messages.no") ? 'checked="checked"' : ''}} name="cladire_izolata" class="custom-control-input" value="@lang("messages.no")">
                    <label class="custom-control-label" for="cladire_izolata-nu">@lang("messages.no")</label>
                </div>
            </div>
        </div>
        <div class="form-group p-2" id="cladire_izolata-detalii" {!! old("cladire_izolata") && old("cladire_izolata") == trans("messages.yes") ? '' : 'style="display:none"' !!}>
            <div class="form-group">
                <div class="form-group">
                    <label>@lang("messages.roof_type")</label>
                    <select class="form-control" id="roof_type" name="tip_acoperis">
                        <option value="">@lang("messages.select_option")</option>
                        <option value="tabla-vata-membrana" {{ old("tip_acoperis") == "tabla-vata-membrana" ? 'selected="selected"' : ''}}>@lang("messages.roof_type_sheet_metal")</option>
                        <option value="panou-sandwich-vata-minerala" {{ old("tip_acoperis") == "panou-sandwich-vata-minerala" ? 'selected="selected"' : ''}}>@lang("messages.roof_type_sandwich_panel_mineral_wool")</option>
                        <option value="panou-sandwich-spuma-PIR" {{ old("tip_acoperis") == "panou-sandwich-spuma-PIR" ? 'selected="selected"' : ''}}>@lang("messages.roof_type_sandwich_panel_foam")</option>
                        <option value="panou-sandwich-spuma-PUR" {{ old("tip_acoperis") == "panou-sandwich-spuma-PIR" ? 'selected="selected"' : ''}}>@lang("messages.roof_type_sandwich_panel_foam")</option>
                    </select>
                </div>
                <div class="tip_acoperis_toggle tip_acoperis-tabla-vata-membrana" style="display: none">
                    <div class="form-group">
                        <label>@lang("messages.mineral_wool_thickness")</label>
                        <input type="number" step="2" min="8" max="12" lang="en" class="form-control" id="tip_acoperis-grosime-vata" name="tip_acoperis-grosime-vata" placeholder="@lang("messages.units_milimeters")" value="{{ old('tip_acoperis-grosime-vata') }}">
                        <div class="btn-group autofill-input" role="group">
                            <button type="button" class="btn btn-primary" data-value="8">8mm</button>
                            <button type="button" class="btn btn-primary" data-value="10">10mm</button>
                            <button type="button" class="btn btn-primary" data-value="12">12mm</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>@lang("messages.membrane_type")</label>
                        <select class="form-control" name="tip_acoperis-tip_membrana">
                                <option value="">@lang("messages.select_option")</option>
                                <option value="PVC" {{ old("tip_acoperis-tip_membrana") == "PVC" ? 'selected="selected"' : ''}}>@lang("messages.membrane_type_pvc")</option>
                                <option value="bituminoasa" {{ old("tip_acoperis-tip_membrana") == "bituminoasa" ? 'selected="selected"' : ''}}>@lang("messages.membrane_type_bituminous")</option>
                        </select>
                    </div>
                    <div class="form-group">
                            <label>@lang("messages.membrane_thickness")</label>
                            <input type="number" step="0.3" min="1.5" max="1.8" lang="en" class="form-control" id="tip_acoperis-grosime-membrana" name="tip_acoperis-grosime-membrana" placeholder="@lang("messages.units_milimeters")" value="{{ old('tip_acoperis-grosime-membrana') }}">
                            <div class="btn-group autofill-input" role="group">
                                <button type="button" class="btn btn-primary" data-value="1.5">1.5mm</button>
                                <button type="button" class="btn btn-primary" data-value="1.8">1.8mm</button>
                            </div>
                    </div>
                </div>
                <div class="tip_acoperis_toggle tip_acoperis-panou-sandwich-vata-minerala tip_acoperis-panou-sandwich-spuma-PIR tip_acoperis-panou-sandwich-spuma-PUR" style="display: none">
                    <div class="form-group">
                        <label>@lang("messages.roof_thickness")</label>
                        <input type="number" step="20" min="60" max="150" lang="en" class="form-control" id="tip_acoperis-grosime" name="tip_acoperis-grosime" placeholder="@lang("messages.units_milimeters")" value="{{ old('tip_acoperis-grosime') }}">
                        <div class="btn-group autofill-input" role="group">
                            <button type="button" class="btn btn-primary" data-value="80">80mm</button>
                            <button type="button" class="btn btn-primary" data-value="100">100mm</button>
                            <button type="button" class="btn btn-primary" data-value="120">120mm</button>
                            <button type="button" class="btn btn-primary" data-value="150">150mm</button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="form-group">
                <div class="form-group">
                    <label>@lang("messages.walls_type")</label>
                    <select class="form-control" id="walls_type" name="tip_pereti">
                        <option value="">@lang("messages.select_option")</option>
                        <option value="caseta-vata-tabla" {{ old("tip_pereti") == "caseta-vata-tabla" ? 'selected="selected"' : ''}}>@lang("messages.walls_type_metal")</option>
                        <option value="panou-sandwich-vata-minerala" {{ old("tip_pereti") == "panou_sandwich-vata-minerala" ? 'selected="selected"' : ''}}>@lang("messages.walls_type_sandwich_panel")</option>
                        <option value="spuma-pir" {{ old("tip_pereti") == "spuma-pir" ? 'selected="selected"' : ''}}>@lang("messages.walls_type_pir_foam")</option>
                        <option value="spuma-pur" {{ old("tip_pereti") == "spuma-pur" ? 'selected="selected"' : ''}}>@lang("messages.walls_type_pur_foam")</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>@lang("messages.walls_thickness")</label>
                    <input type="number" step="20" min="80" max="150" lang="en" class="form-control" id="tip_pereti-grosime" name="tip_pereti-grosime" placeholder="@lang("messages.units_milimeters")" value="{{ old('copertina_suprafata') }}">
                    <div class="btn-group autofill-input" role="group">
                        <button type="button" class="btn btn-primary" data-value="80" style="display:none">80mm</button>
                        <button type="button" class="btn btn-primary" data-value="100">100mm</button>
                        <button type="button" class="btn btn-primary" data-value="120">120mm</button>
                        <button type="button" class="btn btn-primary" data-value="140">140mm</button>
                        <button type="button" class="btn btn-primary" data-value="150" style="display:none">150mm</button>
                    </div>
                </div>
            </div>
            <hr>
        </div>

        <div class="form-group">
            <label>@lang("messages.smoke_hatches")</label>
            <button type="button" class="btn btn-primary float-right add-dynamic_input-trigger" data-data-dynamic-name="trape_fum"><i class="fas fa-plus"></i></button>
            <p><small>@lang("messages.smoke_hatches_note")</small></p>
            <ol class="dynamic-wrap"></ol>
        </div>
        <hr>
        <div class="form-group">
            <label>@lang("messages.windows")</label>
            <button type="button" class="btn btn-primary float-right add-dynamic_input-trigger" data-dynamic-name="ferestre"><i class="fas fa-plus"></i></button>
            <p></p>
            <div class="clearfix pt-1"></div>
            <ol class="dynamic-wrap"></ol>
        </div>
        <hr>

        <div class="form-group">
            <label>@lang("messages.industrial_doors")</label>
            <button type="button" class="btn btn-primary float-right add-dynamic_input-trigger" data-dynamic-name="usi_sectionale"><i class="fas fa-plus"></i></button>
            <p></p>
            <div class="clearfix pt-1"></div>
            <ol class="dynamic-wrap"></ol>
        </div>
        <hr>

        <div class="form-group">
            <label>@lang("messages.pedestrian_doors")</label>
            <button type="button" class="btn btn-primary float-right add-dynamic_input-trigger" data-dynamic-name="usi_pietonale"><i class="fas fa-plus"></i></button>
            <p></p>
            <div class="clearfix pt-1"></div>
            <ol class="dynamic-wrap"></ol>
        </div>
        <hr>

        <div class="form-group">
            <label>@lang("messages.tir_access_ramps")</label>
            <button type="button" class="btn btn-primary float-right add-dynamic_input-trigger" data-dynamic-name="rampe_acces_tir"><i class="fas fa-plus"></i></button>
            <p></p>
            <div class="clearfix pt-1"></div>
            <ol class="dynamic-wrap"></ol>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <button type="button" class="btn btn-default prevstep">@lang("messages.back")</button>
            </div>
            <div class="col-md-6 text-right">
                <button type="button" class="btn btn-primary nextstep">@lang("messages.continue")</button>
            </div>
        </div>
        <ul id="errors"></ul>
    </div>
</div>

<br/>


@section('scripts')
    @parent
    {{--Dependencies moved to webpack dependencies--}}
    {{--<script src="/js/three-js/build/three.js"></script>--}}
    {{--<script src="/js/three-js/libraries/js/controls/OrbitControls.js"></script>--}}
    {{--<script src="/js/three-js/libraries/js/WebGL.js"></script>--}}

    <script>

        if ( WEBGL.isWebGLAvailable() === false ) {
            document.body.appendChild( WEBGL.getWebGLErrorMessage() );
        }

        var camera, controls, scene = false, renderer, lungime, latime, inaltime, tip_cladire, culoare;

        $(function() {
            init();
            animate();
        });

        function init() {
            if(!scene) {
                window.addEventListener( 'resize', onWindowResize, false );
            }

            var wrapper = document.getElementById("building-preview");
            scene = new THREE.Scene();
            scene.background = new THREE.Color( 0x00b2ff );

            renderer = new THREE.WebGLRenderer({
                preserveDrawingBuffer: true
            });
            renderer.setPixelRatio( window.devicePixelRatio );

            renderer.setSize( wrapper.offsetWidth, wrapper.offsetHeight );
            $("#building-preview").html(renderer.domElement);

            camera = new THREE.PerspectiveCamera( 45, wrapper.offsetWidth / wrapper.offsetHeight, 1, 400 );
            camera.position.set( -40, 24, 35 );

            // controls
            controls = new THREE.OrbitControls( camera, renderer.domElement );

            controls.enableDamping = true;
            controls.dampingFactor = 0.25;

            controls.screenSpacePanning = true;

            var minDistance = parseInt($("#lungime").val());
            minDistance = minDistance > 0 ? minDistance : 30;

            controls.minDistance = minDistance;
            controls.maxDistance = 100;

            controls.maxPolarAngle = Math.PI / 2;

            


            $("#lungime, #latime, #inaltime, #type, .shed-color").on("change", refreshScene);

            createGeometries();
            generateSnapshot();
        }

        function createGeometries() {

            lungime = parseInt($("#lungime").val());
            latime = parseInt($("#latime").val());
            inaltime = parseInt($("#inaltime").val());
            tip_cladire = $("#type").val();
            culoare = $(".shed-color:checked").val();

            lungime = lungime > 5 ? lungime : 30;
            latime = latime > 5 ? latime : 16;
            inaltime = inaltime > 5 ? inaltime : 5;

            lungime = lungime > 100 ? 100 : lungime;
            latime = latime > 100 ? 100 : latime;
            inaltime = inaltime > 20 ? 20 : inaltime;

            controls.minDistance = lungime;

            addGround();
            addSidewalk();

            addShed();
            addShedBase();
            addShedRoof();
            addShedAccesories();
            addGarageDoors();
            addPedestrianDoors();
            addWindows();


            addLights();
        }

        function addGround() {

            var grassTexture = THREE.ImageUtils.loadTexture('images/textures/grass-texture.jpg');
            grassTexture.wrapS = grassTexture.wrapT = THREE.RepeatWrapping;
            grassTexture.repeat.x = 60;
            grassTexture.repeat.y = 60;

            // var material = new THREE.MeshLambertMaterial({ color: 0x3e3e3e, flatShading: true });
            var material = new THREE.MeshLambertMaterial({ color: 0xffffff,  map:grassTexture });
            var geometry = new THREE.PlaneGeometry(1400,1400);

            var ground = new THREE.Mesh(geometry,material);

            ground.position.y = -1;

            ground.rotation.x = -Math.PI/2;

            scene.add(ground);
        }
        function addShed() {
            var frontBackTexture = new THREE.TextureLoader().load( 'images/textures/walls-texture.jpg' );
            frontBackTexture.wrapS = frontBackTexture.wrapT = THREE.RepeatWrapping;
            frontBackTexture.repeat.set( 0.3, 0.3 );
            frontBackTexture.offset.set( 0,0 );

            var SidesTexture = new THREE.TextureLoader().load( 'images/textures/walls-texture.jpg' );
            SidesTexture.wrapS = SidesTexture.wrapT = THREE.RepeatWrapping;
            SidesTexture.repeat.set( 0.3, 0.3 );
            SidesTexture.offset.set( 0,0 );
            SidesTexture.rotation = THREE.Math.degToRad(90);

            var shedColor = culoare ? ral2hex(culoare) : '#a1a1a0';

            var building2DShape = new THREE.Shape();
            building2DShape.moveTo( 0,0 );
            building2DShape.lineTo( 0, inaltime );
            building2DShape.lineTo( latime/2, inaltime + 1 );
            building2DShape.lineTo( latime, inaltime );
            building2DShape.lineTo( latime, 0 );
            building2DShape.lineTo( 0, 0 );
            var shedGeometry = new THREE.ExtrudeGeometry( building2DShape, { depth: lungime, bevelEnabled: false } );


            var shedMaterials = [
                new THREE.MeshLambertMaterial({ color: new THREE.Color(shedColor), map: frontBackTexture }), // front back material
                new THREE.MeshLambertMaterial({ color: new THREE.Color(shedColor), map: SidesTexture }),  // sides material - same as front back - the only difference is that the textureis rotated with 90 degrees
            ];
            var shed = new THREE.Mesh( shedGeometry, shedMaterials ) ;

            shed.geometry.faces[6].materialIndex = 1;
            shed.geometry.faces[7].materialIndex = 1;
            shed.geometry.faces[12].materialIndex = 1;
            shed.geometry.faces[13].materialIndex = 1;

            shed.rotateY(THREE.Math.degToRad(90));
            shed.position.z = latime/2;
            shed.position.x = -lungime/2;
            shed.position.y = -1;

            scene.add( shed );
        }
        function addSidewalk() {
            var sidewalkMaterial = new THREE.MeshLambertMaterial({ color: 0x8d9295 });
            var sidewalkGeometry = new THREE.BoxGeometry(lungime + 3, 0.1, latime + 3);
            var sidewalk = new THREE.Mesh(sidewalkGeometry,sidewalkMaterial);

            sidewalk.position.z = 0;
            sidewalk.position.x = 0;
            sidewalk.position.y = -1;

            scene.add(sidewalk);
        }
        function addShedBase() {
            var shedBaseTexture = new THREE.TextureLoader().load( 'images/textures/walls-texture.jpg' );
            shedBaseTexture.wrapS = shedBaseTexture.wrapT = THREE.RepeatWrapping;
            shedBaseTexture.repeat.set( 0.8, 0.8 );
            shedBaseTexture.offset.set( 0,0 );
            shedBaseTexture.rotation = THREE.Math.degToRad(90);

            var shedBaseSideTexture = new THREE.TextureLoader().load( 'images/textures/walls-texture.jpg' );
            shedBaseSideTexture.wrapS = shedBaseSideTexture.wrapT = THREE.RepeatWrapping;
            shedBaseSideTexture.repeat.set( 0.8, 0.8 );
            shedBaseSideTexture.offset.set( 0,0 );

            var shedBaseMaterial = new THREE.MeshLambertMaterial({ color: 0x2a292a, map: shedBaseTexture });
            var shedBaseSideMaterial = new THREE.MeshLambertMaterial({ color: 0x2a292a, map: shedBaseSideTexture });
            var shedBaseGeometry = new THREE.BoxGeometry(lungime + 0.001, 0.5, latime + 0.001);
            var shedBase = new THREE.Mesh(shedBaseGeometry, [
                shedBaseMaterial, 
                shedBaseSideMaterial, 
            ]);

            shedBase.position.z = 0;
            shedBase.position.x = 0;
            shedBase.position.y = -0.7;

            shedBase.geometry.faces[0].materialIndex = 1;
            shedBase.geometry.faces[1].materialIndex = 1;
            shedBase.geometry.faces[2].materialIndex = 1;
            shedBase.geometry.faces[3].materialIndex = 1;

            shedBase.geometry.faces[8].materialIndex = 1;
            shedBase.geometry.faces[9].materialIndex = 1;
            shedBase.geometry.faces[10].materialIndex = 1;
            shedBase.geometry.faces[11].materialIndex = 1;

            scene.add(shedBase);
        }
        function addShedRoof() {

            if(tip_cladire === "sala_de_sport") {
                var roofTexture = new THREE.TextureLoader().load( 'images/textures/walls-texture.jpg' );
                roofTexture.wrapS = roofTexture.wrapT = THREE.RepeatWrapping;
                roofTexture.repeat.set( 0.3, 0.3 );
                roofTexture.offset.set( 0,0 );

                var shedColor = culoare ? ral2hex(culoare) : '#a1a1a0';

                var roof2DShape = new THREE.Shape();
                roof2DShape.moveTo( 0, inaltime );
                roof2DShape.quadraticCurveTo( latime /2, inaltime+3, latime, inaltime );

                var shedGeometry = new THREE.ExtrudeGeometry( roof2DShape, { depth: lungime, bevelEnabled: false } );
                var shedMaterials = [
                    new THREE.MeshLambertMaterial({ color: new THREE.Color(shedColor), map: roofTexture }), // front back material
                    new THREE.MeshLambertMaterial({ color: 0xd7d5cb }), // roof material
                ];
                var roof = new THREE.Mesh( shedGeometry, shedMaterials ) ;

                roof.rotateY(THREE.Math.degToRad(90));
                roof.position.z = latime/2;
                roof.position.x = -lungime/2;
                roof.position.y = -1;

                scene.add(roof);
                return;
            }

            var roofSideWidth = Math.sqrt((latime/2)*(latime/2) + 1);

            var roofSide1Geometry = new THREE.BoxGeometry(lungime, roofSideWidth, 0.1);
            var roofSide2Geometry = new THREE.BoxGeometry(lungime, roofSideWidth, 0.1);
            var roofMaterial = new THREE.MeshLambertMaterial({ color: 0xd7d5cb });
            var roofMaterialDark = new THREE.MeshLambertMaterial({ color: 0x2a292a });

            // prevents flickering
            roofMaterial.polygonOffset = true;
            roofMaterial.polygonOffsetFactor = -0.1;
            roofMaterialDark.polygonOffset = true;
            roofMaterialDark.polygonOffsetFactor = -0.1;

            var roofSide1 = new THREE.Mesh( roofSide1Geometry, [
                roofMaterial,
                roofMaterialDark
            ] ) ;
            var roofSide2 = new THREE.Mesh( roofSide2Geometry, [
                roofMaterial,
                roofMaterialDark
            ] ) ;

            var offset = Math.atan(1 / (latime/2)) * 180 / Math.PI; // * 180 / Math.PI - radians to degrees

            roofSide1.rotateX(THREE.Math.degToRad(90-offset));
            roofSide1.position.z = -(latime/4);
            roofSide1.position.x = 0;
            roofSide1.position.y = inaltime-0.5;

            roofSide2.rotateX(THREE.Math.degToRad(-(90-offset)));
            roofSide2.position.z = (latime/4);
            roofSide2.position.x = 0;
            roofSide2.position.y = inaltime-0.5;

            roofSide1.geometry.faces[0].materialIndex = 1;
            roofSide1.geometry.faces[1].materialIndex = 1;
            roofSide1.geometry.faces[2].materialIndex = 1;
            roofSide1.geometry.faces[3].materialIndex = 1;
            roofSide1.geometry.faces[4].materialIndex = 1;
            roofSide1.geometry.faces[5].materialIndex = 1;
            roofSide1.geometry.faces[6].materialIndex = 1;
            roofSide1.geometry.faces[7].materialIndex = 1;
            roofSide1.geometry.faces[8].materialIndex = 0;
            roofSide1.geometry.faces[9].materialIndex = 0;
            roofSide1.geometry.faces[10].materialIndex = 0;
            roofSide1.geometry.faces[11].materialIndex = 0;

            roofSide2.geometry.faces[0].materialIndex = 1;
            roofSide2.geometry.faces[1].materialIndex = 1;
            roofSide2.geometry.faces[2].materialIndex = 1;
            roofSide2.geometry.faces[3].materialIndex = 1;
            roofSide2.geometry.faces[4].materialIndex = 0;
            roofSide2.geometry.faces[5].materialIndex = 0;
            roofSide2.geometry.faces[6].materialIndex = 1;
            roofSide2.geometry.faces[7].materialIndex = 1;
            roofSide2.geometry.faces[8].materialIndex = 0;
            roofSide2.geometry.faces[9].materialIndex = 0;
            roofSide2.geometry.faces[10].materialIndex = 0;
            roofSide2.geometry.faces[11].materialIndex = 0;


            scene.add(roofSide1);
            scene.add(roofSide2);
        }
        function addLights() {

            var light = new THREE.DirectionalLight( 0xffffff );
            light.position.set( -50, 20, 25 );
            scene.add( light );


            var light = new THREE.AmbientLight( 0xcccccc );
            scene.add( light );
        }
        function addShedAccesories() {

            var drainGeometry = new THREE.BoxGeometry(lungime, 0.1, 0.1);
            var drain = new THREE.Mesh(drainGeometry,new THREE.MeshLambertMaterial({ color: 0x003319 }));

            drain.position.z = - (latime/2) - 0.05;
            drain.position.x = 0;
            drain.position.y = inaltime - 1.1;
            scene.add(drain);

            var drainGeometry2 = new THREE.CylinderGeometry(0.05, 0.05, inaltime);
            var drain2 = new THREE.Mesh(drainGeometry2,new THREE.MeshLambertMaterial({ color: 0x003319 }));
            drain2.position.z = - (latime/2) - 0.05;
            drain2.position.x = -(lungime/2) + 0.3;
            drain2.position.y = (inaltime / 2) - 1.1;
            scene.add(drain2);


            var drainGeometry2 = new THREE.CylinderGeometry(0.05, 0.05, inaltime);
            var drain2 = new THREE.Mesh(drainGeometry2,new THREE.MeshLambertMaterial({ color: 0x003319 }));
            drain2.position.z = - (latime/2) - 0.05;
            drain2.position.x = (lungime/2) - 0.3;
            drain2.position.y = (inaltime / 2) - 1.1;
            scene.add(drain2);

            var drainGeometry = new THREE.BoxGeometry(lungime, 0.1, 0.1);
            var drain = new THREE.Mesh(drainGeometry,new THREE.MeshLambertMaterial({ color: 0x003319 }));

            drain.position.z = (latime/2) + 0.05;
            drain.position.x = 0;
            drain.position.y = inaltime - 1.1;
            scene.add(drain);

            var drainGeometry2 = new THREE.CylinderGeometry(0.05, 0.05, inaltime);
            var drain2 = new THREE.Mesh(drainGeometry2,new THREE.MeshLambertMaterial({ color: 0x003319 }));
            drain2.position.z = (latime/2) + 0.05;
            drain2.position.x = -(lungime/2) + 0.3;
            drain2.position.y = (inaltime / 2) - 1.1;
            scene.add(drain2);


            var drainGeometry2 = new THREE.CylinderGeometry(0.05, 0.05, inaltime);
            var drain2 = new THREE.Mesh(drainGeometry2,new THREE.MeshLambertMaterial({ color: 0x006633 }));
            drain2.position.z = (latime/2) + 0.05;
            drain2.position.x = (lungime/2) - 0.3;
            drain2.position.y = (inaltime / 2) - 1.1;
            scene.add(drain2);
        }
        function addGarageDoors() {
            var doorTexture = new THREE.TextureLoader().load( 'images/textures/garage-door-texture.jpg' );
            doorTexture.wrapS = doorTexture.wrapT = THREE.RepeatWrapping;
            doorTexture.repeat.set( 1,1 );
            doorTexture.offset.set( 0,0 );
            doorTexture.rotation = THREE.Math.degToRad(180);

            var doorMaterial = new THREE.MeshLambertMaterial({ color: 0xa1a1a0, map: doorTexture });
            var doorGeometry = new THREE.BoxGeometry(4, 4, 0.05);
            var door = new THREE.Mesh(doorGeometry, doorMaterial);

            door.position.z = (latime/2) +0.01;
            door.position.x = 0;
            door.position.y = 0.5;

            scene.add(door);
        }
        function addPedestrianDoors() {
            var doorTexture = new THREE.TextureLoader().load( 'images/textures/pedestrian-door-texture.jpg' );
            doorTexture.wrapS = doorTexture.wrapT = THREE.RepeatWrapping;
            doorTexture.repeat.set( 1,1 );
            doorTexture.offset.set( 0,0 );
            doorTexture.rotation = THREE.Math.degToRad(180);

            var doorMaterial = new THREE.MeshLambertMaterial({ color: 0xa1a1a0, map: doorTexture });
            var doorGeometry = new THREE.BoxGeometry(1.1, 2, 0.05);
            var door = new THREE.Mesh(doorGeometry, doorMaterial);

            door.position.z = (latime/2) +0.01;
            door.position.x = -(lungime/2) + (0.8 + 2);
            door.position.y = 0;

            scene.add(door);

            var doorTexture = new THREE.TextureLoader().load( 'images/textures/pedestrian-door-texture.jpg' );
            doorTexture.wrapS = doorTexture.wrapT = THREE.RepeatWrapping;
            doorTexture.repeat.set( 1,1 );
            doorTexture.offset.set( 0,0 );
            doorTexture.rotation = THREE.Math.degToRad(180);

            var doorMaterial = new THREE.MeshLambertMaterial({ color: 0xa1a1a0, map: doorTexture });
            var doorGeometry = new THREE.BoxGeometry(0.05, 2, 1.1);
            var door = new THREE.Mesh(doorGeometry, doorMaterial);

            door.position.z = -(latime/2) + 2;
            door.position.x = lungime/2;
            door.position.y = 0;

            scene.add(door);
        }
        function addWindows() {
            var windowTexture = new THREE.TextureLoader().load( 'images/textures/windows-texture.jpg' );
            windowTexture.wrapS = windowTexture.wrapT = THREE.RepeatWrapping;
            windowTexture.repeat.set( 8,1 );
            windowTexture.offset.set( 0,0 );
            windowTexture.rotation = THREE.Math.degToRad(180);

            var windowMaterial = new THREE.MeshLambertMaterial({ color: 0xa1a1a0, map: windowTexture });
            var windowGeometry = new THREE.BoxGeometry( (lungime - 4), 1.2, 0.05);
            var window = new THREE.Mesh(windowGeometry, windowMaterial);

            window.position.z = - (latime/2) +0.01;
            window.position.x = 0;
            window.position.y = 2.5;

            scene.add(window);

            var windowTexture = new THREE.TextureLoader().load( 'images/textures/windows-texture.jpg' );
            windowTexture.wrapS = windowTexture.wrapT = THREE.RepeatWrapping;
            windowTexture.repeat.set( 8,1 );
            windowTexture.offset.set( 0,0 );
            windowTexture.rotation = THREE.Math.degToRad(180);

            var windowMaterial = new THREE.MeshLambertMaterial({ color: 0xa1a1a0, map: windowTexture });
            var windowGeometry = new THREE.BoxGeometry( 0.05, 1.2, (latime / 2) - 2);
            var window = new THREE.Mesh(windowGeometry, windowMaterial);

            window.position.z = (latime/4) ;
            window.position.x = (lungime/2) +0.01;
            window.position.y = 2.5;

            scene.add(window);

        }

        function clearScene() {
            while(scene.children.length > 0){
                scene.remove(scene.children[0]);
            }
        }

        function onWindowResize() {
            var wrapper = document.getElementById("building-preview");

            camera.aspect = wrapper.offsetWidth / wrapper.offsetHeight;
            camera.updateProjectionMatrix();

            renderer.setSize( wrapper.offsetWidth, wrapper.offsetHeight );

        }

        function animate() {

            requestAnimationFrame( animate );
            controls.update(); 
            render();
        }

        function render() {

            renderer.render( scene, camera );

        }

        function refreshScene () {
            clearScene();
            createGeometries();
            generateSnapshot();
        }

        function generateSnapshot() {
            try {

                $("#preview-image").attr("src", renderer.domElement.toDataURL("image/jpeg"));
                $("#preview-image-input").val(renderer.domElement.toDataURL("image/jpeg"));
            } catch (e) {
                return;
            }
        }

        function ral2hex(ral) {
            var hexColor = "";
            switch(ral) {
                case "RAL 1015": hexColor = '#deccaa'; break;
                case "RAL 1021": hexColor = '#ffd92d'; break;
                case "RAL 2008": hexColor = '#f37f2d'; break;
                case "RAL 3000": hexColor = '#be1729'; break;
                case "RAL 3005": hexColor = '#871027'; break;
                case "RAL 3011": hexColor = '#87121c'; break;
                case "RAL 5010": hexColor = '#0b5481'; break;
                case "RAL 6005": hexColor = '#0b3923'; break;
                case "RAL 6011": hexColor = '#678259'; break;
                case "RAL 7016": hexColor = '#2a3237'; break;
                case "RAL 8012": hexColor = '#99453a'; break;
                case "RAL 8017": hexColor = '#6d261b'; break;
                case "RAL 8019": hexColor = '#2b1512'; break;
                case "RAL 9002": hexColor = '#e7e4d3'; break;
                case "RAL 9006": hexColor = '#a8aba5'; break;
                case "RAL 9007": hexColor = '#868177'; break;
                case "RAL 9010": hexColor = '#fbfae8'; break;
            }
            return hexColor;
        }

    </script>
@endsection