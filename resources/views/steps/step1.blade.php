<div class="row">


    <div class="col-md-9 col-sm-6 canvas-container" id="building-preview"></div>

    <div class="col-md-3 col-sm-6 details-section-side offset-md-9 offset-sm-6 pt-5">
        <br>
        <h2>@lang("messages.building_information")</h2>
        <div class="form-group">
            <label for="type">@lang("messages.building_type")*</label>
            <select class="form-control" id="type" name="destinatie_cladire" required>
                <option value="hala_productie" {{ old("destinatie_cladire") == "hala_productie" ? 'selected="selected"' : ''}}>@lang("messages.building_type_production_hall")</option>
                <option value="hala_logistica" {{ old("destinatie_cladire") == "hala_logistica" ? 'selected="selected"' : ''}}>@lang("messages.building_type_logistics_hall")</option>
                <option value="depozit" {{ old("destinatie_cladire") == "depozit" ? 'selected="selected"' : ''}}>@lang("messages.building_type_warehouse")</option>
                <option value="centru_administrativ" {{ old("destinatie_cladire") == "centru_administrativ" ? 'selected="selected"' : ''}}>@lang("messages.building_type_adm_center")</option>
                <option value="sala_de_sport" {{ old("destinatie_cladire") == "sala_de_sport" ? 'selected="selected"' : ''}}>@lang("messages.building_type_gym")</option>
                <option value="altele" {{ old("destinatie_cladire") == "altele" ? 'selected="selected"' : ''}}>@lang("messages.building_type_other")</option>
            </select>
        </div>

        <div class="form-group">
            <label for="type">@lang("messages.structure_type")*</label>
            <select class="form-control" id="type" name="tip_structura" required>
                <option value="metal" {{ old("tip_structura") == "metal" ? 'selected="selected"' : ''}}>@lang("messages.structure_type_metal")</option>
                <option value="beton" {{ old("tip_structura") == "beton" ? 'selected="selected"' : ''}}>@lang("messages.structure_type_concrete")</option>
                <option value="mixta" {{ old("tip_structura") == "mixta" ? 'selected="selected"' : ''}}>@lang("messages.structure_type_mixed")</option>
            </select>
        </div>

        <hr>

        <div class="form-group">
            <label for="lungime">@lang("messages.length")*</label>
            <input type="number" lang="en" class="form-control" id="lungime" name="lungime" placeholder="@lang("messages.units_meters")" value="{{ old('lungime') }}" required>
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
            <label for="latime">@lang("messages.width")*</label>
            <input type="number" lang="en" class="form-control" id="latime" name="latime" placeholder="@lang("messages.units_meters")" value="{{ old('latime') }}" required>
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
            <label for="inaltime">@lang("messages.height")*</label>
            <input type="number" lang="en" class="form-control" id="inaltime" name="inaltime" placeholder="@lang("messages.units_meters")" value="{{ old('inaltime') }}" required>
            <div class="btn-group autofill-height" role="group">
                <button type="button" class="btn btn-primary" data-value="5">5m</button>
                <button type="button" class="btn btn-primary" data-value="7.5">7.5m</button>
                <button type="button" class="btn btn-primary" data-value="10">10m</button>
                <button type="button" class="btn btn-primary" data-value="12.5">12.5m</button>
            </div>
        </div>

        <div class="form-group">
            <label for="suprafata_totala">@lang("messages.total_area")</label>
            <input type="number" readonly lang="en" class="form-control" id="suprafata_totala" name="suprafata_totala" placeholder="@lang("messages.units_sqmeters")" value="{{ old('suprafata_totala') }}">
        </div>

        <div class="form-group">
            <label for="suprafata_construita">@lang("messages.built_area")</label>
            <input type="number" lang="en" class="form-control" id="suprafata_construita" name="suprafata_construita" placeholder="@lang("messages.units_sqmeters")" value="{{ old('suprafata_construita') }}">
        </div>

        <hr>

        <div class="form-group">
            <label for="sistem_pluvial">@lang("messages.pluvial_system")</label>
            <select class="form-control" id="sistem_pluvial" name="sistem_pluvial">
                <option value="jgheaburi-burlane" {{ old("sistem_pluvial") == "jgheaburi-burlane" ? 'selected="selected"' : ''}}>@lang("messages.pluvial_system_drains")</option>
                <option value="tip-geberit" {{ old("sistem_pluvial") == "tip-geberit" ? 'selected="selected"' : ''}}>@lang("messages.pluvial_system_gerberit")</option>
                <option value="nu-stiu" {{ old("sistem_pluvial") == "nu-stiu" ? 'selected="selected"' : ''}}>@lang("messages.pluvial_system_dontknow")</option>
            </select>
        </div>

        <div class="form-group">
            <label for="panta_acoperis">@lang("messages.roof_slope")</label>
            <select class="form-control" id="panta_acoperis" name="panta_acoperis">
                <option value="mic" {{ old("panta_acoperis") == "mic" ? 'selected="selected"' : ''}}>@lang("messages.roof_slope_morethan5")</option>
                <option value="mare" {{ old("panta_acoperis") == "mare" ? 'selected="selected"' : ''}}>@lang("messages.roof_slope_lessthan5")</option>
                <option value="nu-stiu" {{ old("panta_acoperis") == "nu-stiu" ? 'selected="selected"' : ''}}>@lang("messages.roof_slope_dontknow")</option>
            </select>
        </div>

        <hr>

        <div class="form-group">
            <label for="mezanin">@lang("messages.entresol")</label>
            <div class="float-right">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="mezanin-da" {{ old("mezanin") == "Da" ? 'checked="checked"' : ''}} name="mezanin" class="custom-control-input" value="Da" data-checked-toggle="#mezanin-suprafata" data-toggle-value="Da">
                    <label class="custom-control-label" for="mezanin-da">@lang("messages.yes")</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="mezanin-nu" {{ old("mezanin") == "Nu" ? 'checked="checked"' : ''}} name="mezanin" class="custom-control-input" value="Nu">
                    <label class="custom-control-label" for="mezanin-nu">@lang("messages.no")</label>
                </div>
            </div>
        </div>
        <div class="form-group p-2" id="mezanin-suprafata" {!! old("mezanin") && old("mezanin") == "Da" ? '' : 'style="display:none"' !!}>
            <div class="form-group">
                <label for="mezanin_suprafata">@lang("messages.entresol_area")</label>
                <input type="number" lang="en" class="form-control" id="mezanin_suprafata" name="mezanin_suprafata" placeholder="@lang("messages.units_sqmeters")" value="{{ old('mezanin_suprafata') }}">
            </div>
            <hr>
        </div>

        <div class="form-group">
            <label for="copertina">@lang("messages.blind")</label>
            <div class="float-right">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="copertina-da" {{ old("copertina") == "Da" ? 'checked="checked"' : ''}} name="copertina" class="custom-control-input" value="Da" data-checked-toggle="#copertina-suprafata" data-toggle-value="Da">
                    <label class="custom-control-label" for="copertina-da">@lang("messages.yes")</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="copertina-nu" {{ old("copertina") == "Nu" ? 'checked="checked"' : ''}} name="copertina" class="custom-control-input" value="Nu">
                    <label class="custom-control-label" for="copertina-nu">@lang("messages.no")</label>
                </div>
            </div>
        </div>
        <div class="form-group p-2" id="copertina-suprafata" {!! old("copertina") && old("copertina") == "Da" ? '' : 'style="display:none"' !!}>
            <div class="form-group">
                <label for="copertina_suprafata">@lang("messages.blind_area")</label>
                <input type="number" lang="en" class="form-control" id="copertina_suprafata" name="copertina_suprafata" placeholder="@lang("messages.units_sqmeters")" value="{{ old('copertina_suprafata') }}">
            </div>
            <hr>
        </div>


        <div class="form-group">
            <label for="pod_rulant">@lang("messages.slide_bridge")</label>
            <div class="float-right">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="pod_rulant-da" {{ old("pod_rulant") == "Da" ? 'checked="checked"' : ''}} name="pod_rulant" class="custom-control-input" value="Da" data-checked-toggle="#pod_rulant-sarcina" data-toggle-value="Da">
                    <label class="custom-control-label" for="pod_rulant-da">@lang("messages.yes")</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="pod_rulant-nu" {{ old("pod_rulant") == "Nu" ? 'checked="checked"' : ''}} name="pod_rulant" class="custom-control-input" value="Nu">
                    <label class="custom-control-label" for="pod_rulant-nu">@lang("messages.no")</label>
                </div>
            </div>
        </div>
        <div class="form-group p-2" id="pod_rulant-sarcina" {!! old("pod_rulant") && old("pod_rulant") == "Da" ? '' : 'style="display:none"' !!}>
            <div class="form-group">
                <label for="pod_rulant_sarcina">@lang("messages.slide_bridge_load")</label>
                <input type="number" lang="en" class="form-control" id="pod_rulant_sarcina" name="pod_rulant_sarcina" placeholder="@lang("messages.units_sqmeters")" value="{{ old('pod_rulant_sarcina') }}">
            </div>
        </div>

        <div class="form-group">
            <label for="cladire_izolata">@lang("messages.insulated_building")</label>
            <div class="float-right">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="cladire_izolata-da" {{ old("cladire_izolata") == "Da" ? 'checked="checked"' : ''}} name="cladire_izolata" class="custom-control-input" value="Da" data-checked-toggle="#cladire_izolata-detalii" data-toggle-value="Da">
                    <label class="custom-control-label" for="cladire_izolata-da">@lang("messages.yes")</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="cladire_izolata-nu" {{ old("cladire_izolata") == "Nu" ? 'checked="checked"' : ''}} name="cladire_izolata" class="custom-control-input" value="Nu">
                    <label class="custom-control-label" for="cladire_izolata-nu">@lang("messages.no")</label>
                </div>
            </div>
        </div>
        <div class="form-group p-2" id="cladire_izolata-detalii" {!! old("cladire_izolata") && old("cladire_izolata") == "Da" ? '' : 'style="display:none"' !!}>
            <div class="form-group">
                <div class="form-group">
                    <label for="type">@lang("messages.roof_type")</label>
                    <select class="form-control" id="type" name="tip_acoperis">
                        <option value="">@lang("messages.select_option")</option>
                        <option value="tabla-vata-membrana" {{ old("tip_acoperis") == "tabla-vata-membrana" ? 'selected="selected"' : ''}}>@lang("messages.roof_type_sheet_metal")</option>
                        <option value="panou-sandwich-vata-minerala" {{ old("tip_acoperis") == "panou-sandwich-vata-minerala" ? 'selected="selected"' : ''}}>@lang("messages.roof_type_sandwich_panel_mineral_wool")</option>
                        <option value="panou-sandwich-spuma" {{ old("tip_acoperis") == "panou-sandwich-spuma" ? 'selected="selected"' : ''}}>@lang("messages.roof_type_sandwich_panel_foam")</option>
                    </select>
                </div>
                <div id="tip_acoperis-tabla-vata-membrana" class="tip_acoperis_toggle" style="display: none">
                    <div class="form-group">
                        <label for="tip_acoperis-grosime-vata">@lang("messages.mineral_wool_thickness")</label>
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
                            <label for="tip_acoperis-grosime-membrana">@lang("messages.membrane_thickness")</label>
                            <input type="number" step="0.3" min="1.5" max="1.8" lang="en" class="form-control" id="tip_acoperis-grosime-membrana" name="tip_acoperis-grosime-membrana" placeholder="@lang("messages.units_milimeters")" value="{{ old('tip_acoperis-grosime-membrana') }}">
                            <div class="btn-group autofill-input" role="group">
                                <button type="button" class="btn btn-primary" data-value="1.5">1.5mm</button>
                                <button type="button" class="btn btn-primary" data-value="1.8">1.8mm</button>
                            </div>
                    </div>
                </div>
                <div id="tip_acoperis-panou-sandwich-spuma" class="tip_acoperis_toggle" style="display: none">
                    <div class="form-group">
                            <label>@lang("messages.foam_type")</label>
                            <select class="form-control" name="tip_acoperis-panou-sandwich-spuma-tip">
                                    <option value="">@lang("messages.select_option")</option>
                                    <option value="PIR" {{ old("tip_acoperis-panou-sandwich-spuma-tip") == "PIR" ? 'selected="selected"' : ''}}>@lang("messages.foam_type_pir")</option>
                                    <option value="PUR" {{ old("tip_acoperis-panou-sandwich-spuma-tip") == "PUR" ? 'selected="selected"' : ''}}>@lang("messages.foam_type_pur")</option>
                            </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tip_acoperis-grosime">@lang("messages.roof_thickness")</label>
                    <input type="number" step="20" min="60" max="150" lang="en" class="form-control" id="tip_acoperis-grosime" name="tip_acoperis-grosime" placeholder="@lang("messages.units_milimeters")" value="{{ old('tip_acoperis-grosime') }}">
                    <div class="btn-group autofill-input" role="group">
                        <button type="button" class="btn btn-primary" data-value="80">80mm</button>
                        <button type="button" class="btn btn-primary" data-value="100">100mm</button>
                        <button type="button" class="btn btn-primary" data-value="120">120mm</button>
                        <button type="button" class="btn btn-primary" data-value="150">150mm</button>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-group">
                    <label for="type">@lang("messages.walls_type")</label>
                    <select class="form-control" id="type" name="tip_pereti">
                        <option value="caseta-vata-tabla" {{ old("tip_pereti") == "caseta-vata-tabla" ? 'selected="selected"' : ''}}>@lang("messages.walls_type_metal")</option>
                        <option value="panou-sandwich-vata-minerala" {{ old("tip_pereti") == "panou_sandwich-vata-minerala" ? 'selected="selected"' : ''}}>@lang("messages.walls_type_sandwich_panel")</option>
                        <option value="spuma-pir" {{ old("tip_pereti") == "spuma-pir" ? 'selected="selected"' : ''}}>@lang("messages.walls_type_pir_foam")</option>
                        <option value="spuma-pur" {{ old("tip_pereti") == "spuma-pur" ? 'selected="selected"' : ''}}>@lang("messages.walls_type_pur_foam")</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tip_pereti-grosime">@lang("messages.walls_thickness")</label>
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
            <button type="button" class="btn btn-primary float-right add-dynamic_input-trigger" dynamic-name="trape_fum"><i class="fas fa-plus"></i></button>
            <p><small>@lang("messages.smoke_hatches_note")</small></p>
            <ol class="dynamic-wrap"></ol>
        </div>
        <hr>
        <div class="form-group">
            <label>@lang("messages.windows")</label>
            <button type="button" class="btn btn-primary float-right add-dynamic_input-trigger" dynamic-name="ferestre"><i class="fas fa-plus"></i></button>
            <p></p>
            <div class="clearfix pt-1"></div>
            <ol class="dynamic-wrap"></ol>
        </div>
        <hr>

        <div class="form-group">
            <label>@lang("messages.industrial_doors")</label>
            <button type="button" class="btn btn-primary float-right add-dynamic_input-trigger" dynamic-name="usi_sectionale"><i class="fas fa-plus"></i></button>
            <p></p>
            <div class="clearfix pt-1"></div>
            <ol class="dynamic-wrap"></ol>
        </div>
        <hr>

        <div class="form-group">
            <label>@lang("messages.pedestrian_doors")</label>
            <button type="button" class="btn btn-primary float-right add-dynamic_input-trigger" dynamic-name="usi_pietonale"><i class="fas fa-plus"></i></button>
            <p></p>
            <div class="clearfix pt-1"></div>
            <ol class="dynamic-wrap"></ol>
        </div>
        <hr>

        <div class="form-group">
            <label>@lang("messages.tir_access_ramps")</label>
            <button type="button" class="btn btn-primary float-right add-dynamic_input-trigger" dynamic-name="rampe_acces_tir"><i class="fas fa-plus"></i></button>
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
    <script src="/js/three-js/build/three.js"></script>
    <script src="/js/three-js/examples/js/controls/OrbitControls.js"></script>
    <script src="/js/three-js/examples/js/WebGL.js"></script>

    <script>

        if ( WEBGL.isWebGLAvailable() === false ) {
            document.body.appendChild( WEBGL.getWebGLErrorMessage() );
        }

        var camera, controls, scene = false, renderer, lungime, latime, inaltime, tip_cladire;

        // urmatoarele functii se se trigger-uiesc dupa ce a incarcat complet pagina
        $(function() {
            init(); // initializeaza three js si creeaza scena initiala
            animate();
        });

        // functia va reimprospata scena - se foloseste atunci cand se schimba dimensiunile in formular
        function refreshScene () {
            clearScene();
            createGeometries();
            generateSnapshot();
        }

        // genereaza snapshot-ul de la finalul formularului (summary)
        function generateSnapshot() {
            try {
                // renderer.domElement.toDataURL("image/jpeg") - va genera imaginea in format base64, pe care o
                // putem folosi in atributul "src" al imaginii, pentru afisarea snapshotului
                // anume: <img src="<CODUL BASE64 GENERAT DE FUNCTIE>">
                $("#preview-image").attr("src", renderer.domElement.toDataURL("image/jpeg"));
            } catch (e) {
                return;
            }
        }

        function init() {
            if(!scene) {
                window.addEventListener( 'resize', onWindowResize, false );
            }

            var wrapper = document.getElementById("building-preview");
            scene = new THREE.Scene();
            // scene.background = new THREE.Color( 0x3e3e3e );
            scene.background = new THREE.Color( 0x00b2ff );
            // scene.fog = new THREE.Fog( 0xcccccc, 10, 400 );

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

            $("#lungime, #latime, #inaltime, #type").on("change", refreshScene);

            createGeometries();
            generateSnapshot();
        }

        // functia care va creea geometriile in scena
        function createGeometries() {

            // se preiau valorile lungimii, latimii si inaltimii care au fost introduse in formular
            // prin jquery
            lungime = parseInt($("#lungime").val());
            latime = parseInt($("#latime").val());
            inaltime = parseInt($("#inaltime").val());
            tip_cladire = $("#type").val();

            // asta e un fallback - cand unul din inputuri este gol, sau este mai mic ca 0, sa foloseasca o valoare
            // predefinita (de ex: 30, 16 sau 5) - astfel previi sa afiseze un corp defectuos
            lungime = lungime > 0 ? lungime : 30;
            latime = latime > 0 ? latime : 16;
            inaltime = inaltime > 0 ? inaltime : 5;

            // reprezinta distanta minima la care poti face zoom la corp
            // pentru a nu intra cu camera in interiorul corpului, setam ca
            // distanta minima sa fie cat lungimea cladirii
            controls.minDistance = lungime;


            // crearea geometriilor propriu-zise

            addGround();
            addSidewalk();

            addShed();
            addShedBase();
            addShedRoof();
            addShedAccesories();

            addLights();
        }

        function addGround() {
            // Pamantul:
            // se creeaza un obiect plan (PlaneGeometry) de dimensiuni 1400x1400, folosind
            // MeshLambertMaterial ca si material (MeshLambertMaterial - material for non-shiny surfaces, without specular highlights )

            // se configureaza textura pamantului
            var grassTexture = THREE.ImageUtils.loadTexture('images/textures/grass-texture.jpg');
            grassTexture.wrapS = grassTexture.wrapT = THREE.RepeatWrapping;
            grassTexture.repeat.x = 60;
            grassTexture.repeat.y = 60;

            // var material = new THREE.MeshLambertMaterial({ color: 0x3e3e3e, flatShading: true });
            var material = new THREE.MeshLambertMaterial({ color: 0xffffff,  map:grassTexture });
            var geometry = new THREE.PlaneGeometry(1400,1400);

            var ground = new THREE.Mesh(geometry,material);

            // pozitionam pamantul sa fie sub axa Y cu 1 - daca o lasam normal, cand miscam camera sa fie la nivelul
            // orizontului, camera va intra in obiect - astfel, daca este mutata cu -1, acest lucru nu se va mai intampla
            ground.position.y = -1;

            // rotim planul creeat anterior cu -90 de grade in jurul axei X, pentru a o pozitiona orizontal
            // (axa x si z se afla in plan orizontal, iar axa y se afla in plan vertical)
            ground.rotation.x = -Math.PI/2;

            // adaugam obiectul creeat, in scena
            scene.add(ground);
        }
        function addShed() {
            // Cladirea:
            // in acest caz, vom desena in 2D conturul cladirii, apoi vom face extrude (ExtrudeBufferGeometry)
            var building2DShape = new THREE.Shape();
            building2DShape.moveTo( 0,0 );
            building2DShape.lineTo( 0, inaltime );
            building2DShape.lineTo( latime/2, inaltime + 1 );
            building2DShape.lineTo( latime, inaltime );
            building2DShape.lineTo( latime, 0 );
            building2DShape.lineTo( 0, 0 );

            // textura pentru fata si spate
            var frontBackTexture = new THREE.TextureLoader().load( 'images/textures/walls-texture.jpg' );
            frontBackTexture.wrapS = frontBackTexture.wrapT = THREE.RepeatWrapping;
            frontBackTexture.repeat.set( 0.3, 0.3 );
            frontBackTexture.offset.set( 0,0 );

            // textura pentru laterale (lafel ca si fata, insa e rotita cu 90 de grade)
            var SidesTexture = new THREE.TextureLoader().load( 'images/textures/walls-texture.jpg' );
            SidesTexture.wrapS = SidesTexture.wrapT = THREE.RepeatWrapping;
            SidesTexture.repeat.set( 0.3, 0.3 );
            SidesTexture.offset.set( 0,0 );
            SidesTexture.rotation = THREE.Math.degToRad(90);

            var shedGeometry = new THREE.ExtrudeGeometry( building2DShape, { depth: lungime, bevelEnabled: false } );
            var shedMaterials = [
                new THREE.MeshLambertMaterial({ color: 0xa1a1a0, map: frontBackTexture }), // front back material
                new THREE.MeshLambertMaterial({ color: 0xd7d5cb }), // roof material
                new THREE.MeshLambertMaterial({ color: 0xa1a1a0, map: SidesTexture }),  // sides material - same as frint back - the only diff is that we rotated texture 90 degrees
            ];
            var shed = new THREE.Mesh( shedGeometry, shedMaterials ) ;

            // Aici asignam ce material sa folosesti pentru fiecare fata a geometriei
            // fata
            shed.geometry.faces[0].materialIndex = 0;
            shed.geometry.faces[1].materialIndex = 0;
            shed.geometry.faces[2].materialIndex = 0;

            // spate
            shed.geometry.faces[3].materialIndex = 0;
            shed.geometry.faces[4].materialIndex = 0;
            shed.geometry.faces[5].materialIndex = 0;

            // lateral stanga
            shed.geometry.faces[6].materialIndex = 2;
            shed.geometry.faces[7].materialIndex = 2;

            // lateral dreapta
            shed.geometry.faces[12].materialIndex = 2;
            shed.geometry.faces[13].materialIndex = 2;

            // deasupra
            shed.geometry.faces[8].materialIndex = 1;
            shed.geometry.faces[9].materialIndex = 1;
            shed.geometry.faces[10].materialIndex = 1;
            shed.geometry.faces[11].materialIndex = 1;

            // se roteste cladirea cu 90 de grade pe axa Y - pentru aspect
            // apoi se va pozitiona cladirea pe centru (0,0)
            // si z = -1 - pentru a nu vedea sub cladire, o aducem la acelasi nivel cu pamantul
            shed.rotateY(THREE.Math.degToRad(90));
            shed.position.z = latime/2;
            shed.position.x = -lungime/2;
            shed.position.y = -1;

            scene.add( shed );
        }
        function addSidewalk() {
            // trotuar
            var sidewalkMaterial = new THREE.MeshLambertMaterial({ color: 0x8d9295 });
            var sidewalkGeometry = new THREE.BoxGeometry(lungime + 3, 0.1, latime + 3);
            var sidewalk = new THREE.Mesh(sidewalkGeometry,sidewalkMaterial);

            sidewalk.position.z = 0;
            sidewalk.position.x = 0;
            sidewalk.position.y = -0.9;

            scene.add(sidewalk);
        }
        function addShedBase() {
            // soclu
            // textura pentru soclu
            var shedBaseTexture = new THREE.TextureLoader().load( 'images/textures/walls-texture.jpg' );
            shedBaseTexture.wrapS = shedBaseTexture.wrapT = THREE.RepeatWrapping;
            shedBaseTexture.repeat.set( 0.8, 0.8 );
            shedBaseTexture.offset.set( 0,0 );
            shedBaseTexture.rotation = THREE.Math.degToRad(90);

            var shedBaseSideTexture = new THREE.TextureLoader().load( 'images/textures/walls-texture.jpg' );
            shedBaseSideTexture.wrapS = shedBaseSideTexture.wrapT = THREE.RepeatWrapping;
            shedBaseSideTexture.repeat.set( 0.8, 0.8 );
            shedBaseSideTexture.offset.set( 0,0 );
            // shedBaseSideTexture.rotation = THREE.Math.degToRad(90);

            var shedBaseMaterial = new THREE.MeshLambertMaterial({ color: 0x2a292a, map: shedBaseTexture });
            var shedBaseSideMaterial = new THREE.MeshLambertMaterial({ color: 0x2a292a, map: shedBaseSideTexture });
            var shedBaseGeometry = new THREE.BoxGeometry(lungime + 0.01, latime + 0.01, 2);
            var shedBase = new THREE.Mesh(shedBaseGeometry, [
                shedBaseMaterial, // front back material
                shedBaseSideMaterial, // sides material
            ]);

            shedBase.rotateX(THREE.Math.degToRad(-90));
            shedBase.position.z = 0;
            shedBase.position.x = 0;
            shedBase.position.y = -0.9;

            // assingam ce material sa foloseasca pe fiecare fata
            shedBase.geometry.faces[0].materialIndex = 0;
            shedBase.geometry.faces[1].materialIndex = 0;
            shedBase.geometry.faces[2].materialIndex = 0;
            shedBase.geometry.faces[3].materialIndex = 0;

            shedBase.geometry.faces[4].materialIndex = 1;
            shedBase.geometry.faces[5].materialIndex = 1;
            shedBase.geometry.faces[6].materialIndex = 1;
            shedBase.geometry.faces[7].materialIndex = 1;

            scene.add(shedBase);
        }
        function addShedRoof() {
            // acoperis

            if(tip_cladire === "sala_de_sport") {
                var roof2DShape = new THREE.Shape();
                roof2DShape.moveTo( 0, inaltime );
                roof2DShape.bezierCurveTo( latime /2, inaltime+ 3, latime, inaltime, latime, inaltime );
                roof2DShape.lineTo( 0, inaltime );

                // textura pentru fata si spate
                var roofTexture = new THREE.TextureLoader().load( 'images/textures/walls-texture.jpg' );
                roofTexture.wrapS = roofTexture.wrapT = THREE.RepeatWrapping;
                roofTexture.repeat.set( 0.3, 0.3 );
                roofTexture.offset.set( 0,0 );

                var shedGeometry = new THREE.ExtrudeGeometry( roof2DShape, { depth: lungime, bevelEnabled: false } );
                var shedMaterials = [
                    new THREE.MeshLambertMaterial({ color: 0xa1a1a0, map: roofTexture }), // front back material
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

            // roofSide width - pentru asta aplicam teorema lui Pitagora
            // calculul ipotenuzei = ipotenuza = radical din latime la patrat + inaltimea la patrat

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
            // Lumini:
            // se adauga luminile in scena
            var light = new THREE.DirectionalLight( 0xffffff );
            light.position.set( -50, 20, 25 );
            scene.add( light );


            var light = new THREE.AmbientLight( 0xcccccc );
            scene.add( light );
        }
        function addShedAccesories() {
            // scoc & burlan
            // lateral stanga
            var drainGeometry = new THREE.BoxGeometry(lungime, 0.1, 0.1);
            var drain = new THREE.Mesh(drainGeometry,new THREE.MeshLambertMaterial({ color: 0x003319 }));

            drain.position.z = - (latime/2) - 0.05;
            drain.position.x = 0;
            drain.position.y = inaltime - 1.1;
            scene.add(drain);

            var drainGeometry2 = new THREE.CylinderGeometry(0.05, 0.05, inaltime + 1);
            var drain2 = new THREE.Mesh(drainGeometry2,new THREE.MeshLambertMaterial({ color: 0x003319 }));
            drain2.position.z = - (latime/2) - 0.05;
            drain2.position.x = -(lungime/2) + 0.3;
            drain2.position.y = (inaltime / 2) - 1.1;
            scene.add(drain2);


            var drainGeometry2 = new THREE.CylinderGeometry(0.05, 0.05, inaltime + 1);
            var drain2 = new THREE.Mesh(drainGeometry2,new THREE.MeshLambertMaterial({ color: 0x003319 }));
            drain2.position.z = - (latime/2) - 0.05;
            drain2.position.x = (lungime/2) - 0.3;
            drain2.position.y = (inaltime / 2) - 1.1;
            scene.add(drain2);

            // lateral dreapta
            var drainGeometry = new THREE.BoxGeometry(lungime, 0.1, 0.1);
            var drain = new THREE.Mesh(drainGeometry,new THREE.MeshLambertMaterial({ color: 0x003319 }));

            drain.position.z = (latime/2) + 0.05;
            drain.position.x = 0;
            drain.position.y = inaltime - 1.1;
            scene.add(drain);

            var drainGeometry2 = new THREE.CylinderGeometry(0.05, 0.05, inaltime, 10, 10, 10, 10);
            var drain2 = new THREE.Mesh(drainGeometry2,new THREE.MeshLambertMaterial({ color: 0x003319 }));
            drain2.position.z = (latime/2) + 0.05;
            drain2.position.x = -(lungime/2) + 0.3;
            drain2.position.y = (inaltime / 2) - 1.1;
            scene.add(drain2);


            var drainGeometry2 = new THREE.CylinderGeometry(0.05, 0.05, inaltime + 1);
            var drain2 = new THREE.Mesh(drainGeometry2,new THREE.MeshLambertMaterial({ color: 0x006633 }));
            drain2.position.z = (latime/2) + 0.05;
            drain2.position.x = (lungime/2) - 0.3;
            drain2.position.y = (inaltime / 2) - 1.1;
            scene.add(drain2);
        }

        // urmatoarea functie va sterge toate elementele din scena
        // corpuri, lumini, etc
        function clearScene() {
            while(scene.children.length > 0){
                scene.remove(scene.children[0]);
            }
        }

        // function for keeping the aspect ration when resizing the browser
        function onWindowResize() {
            var wrapper = document.getElementById("building-preview");

            camera.aspect = wrapper.offsetWidth / wrapper.offsetHeight;
            camera.updateProjectionMatrix();

            renderer.setSize( wrapper.offsetWidth, wrapper.offsetHeight );

        }

        function animate() {
            // https://developer.mozilla.org/en-US/docs/Web/API/window/requestAnimationFrame
            // urmatoarea functiei anunta browserul ca va avea loc o animatie
            // astfel, callback-ul (adica ce e in paranteze - anume functia animate) se va reincarca de 60 de ori pe secunda
            // si practic asta va realiza animatia (cand misti cladirea etc)
            requestAnimationFrame( animate );
            controls.update(); // recalibreaza control-urile (miscarea camerei in scena)
            render(); // apeleaza functia render, care va genera scena (in functie de pozitia camerei samd)
        }

        // genereaza scena, in functie de pozitia camerei
        function render() {

            renderer.render( scene, camera );

        }

    </script>
@endsection