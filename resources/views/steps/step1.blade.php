<div class="row">


    <div class="col-md-9 col-sm-6 canvas-container" id="building-preview"></div>

    <div class="col-md-3 col-sm-6 details-section-side offset-md-9 offset-sm-6">
        <br>
        <h2>Informatii cladire</h2>
        <div class="form-group">
            <label for="type">Destinatie cladire*</label>
            <select class="form-control" id="type" name="destinatie_cladire" required>
                <option value="hala_productie" {{ old("destinatie_cladire") == "hala_productie" ? 'selected="selected"' : ''}}>Hala productie</option>
                <option value="hala_logistica" {{ old("destinatie_cladire") == "hala_logistica" ? 'selected="selected"' : ''}}>Hala logistica</option>
                <option value="depozit" {{ old("destinatie_cladire") == "depozit" ? 'selected="selected"' : ''}}>Depozit</option>
                <option value="centru_administrativ" {{ old("destinatie_cladire") == "centru_administrativ" ? 'selected="selected"' : ''}}>Centru administrativ</option>
                <option value="sala_de_sport" {{ old("destinatie_cladire") == "sala_de_sport" ? 'selected="selected"' : ''}}>Sala de sport</option>
                <option value="altele" {{ old("destinatie_cladire") == "altele" ? 'selected="selected"' : ''}}>Altele</option>
            </select>
        </div>

        <div class="form-group">
            <label for="type">Tip Structura*</label>
            <select class="form-control" id="type" name="tip_structura" required>
                <option value="metal" {{ old("tip_structura") == "metal" ? 'selected="selected"' : ''}}>Metal</option>
                <option value="beton" {{ old("tip_structura") == "beton" ? 'selected="selected"' : ''}}>Beton</option>
                <option value="mixta" {{ old("tip_structura") == "mixta" ? 'selected="selected"' : ''}}>Mixta</option>
            </select>
        </div>

        <hr>

        <div class="form-group">
            <label for="lungime">Lungime*</label>
            <input type="number" lang="en" class="form-control" id="lungime" name="lungime" placeholder="Lungime cladire" value="{{ old('lungime') }}" required>
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
            <label for="latime">Latime*</label>
            <input type="number" lang="en" class="form-control" id="latime" name="latime" placeholder="Latime cladire" value="{{ old('latime') }}" required>
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
            <label for="inaltime">Inaltime libera (utila)*</label>
            <input type="number" lang="en" class="form-control" id="inaltime" name="inaltime" placeholder="Inaltime cladire" value="{{ old('inaltime') }}" required>
            <div class="btn-group autofill-height" role="group">
                <button type="button" class="btn btn-primary" data-value="5">5m</button>
                <button type="button" class="btn btn-primary" data-value="7.5">7.5m</button>
                <button type="button" class="btn btn-primary" data-value="10">10m</button>
                <button type="button" class="btn btn-primary" data-value="12.5">12.5m</button>
            </div>
        </div>

        <div class="form-group">
            <label for="suprafata_totala">Suprafata totala</label>
            <input type="number" readonly lang="en" class="form-control" id="suprafata_totala" name="suprafata_totala" placeholder="Suprafata totala" value="{{ old('suprafata_totala') }}">
        </div>

        <div class="form-group">
            <label for="suprafata_construita">Suprafata construita spatiu administrativ</label>
            <input type="number" lang="en" class="form-control" id="suprafata_construita" name="suprafata_construita" placeholder="In m2" value="{{ old('suprafata_construita') }}">
        </div>

        <hr>

        <div class="form-group">
            <label for="sistem_pluvial">Sistem pluvial</label>
            <select class="form-control" id="sistem_pluvial" name="sistem_pluvial">
                <option value="jgheaburi-burlane" {{ old("sistem_pluvial") == "jgheaburi-burlane" ? 'selected="selected"' : ''}}>Jgheaburi + burlane</option>
                <option value="tip-geberit" {{ old("sistem_pluvial") == "tip-geberit" ? 'selected="selected"' : ''}}>Tip geberit</option>
                <option value="nu-stiu" {{ old("sistem_pluvial") == "nu-stiu" ? 'selected="selected"' : ''}}>Nu stiu</option>
            </select>
        </div>

        <div class="form-group">
            <label for="panta_acoperis">Panta acoperis</label>
            <select class="form-control" id="panta_acoperis" name="panta_acoperis">
                <option value="mic" {{ old("panta_acoperis") == "mic" ? 'selected="selected"' : ''}}>Mai mica de 5%</option>
                <option value="mare" {{ old("panta_acoperis") == "mare" ? 'selected="selected"' : ''}}>Mai mare de 5%</option>
                <option value="nu-stiu" {{ old("panta_acoperis") == "nu-stiu" ? 'selected="selected"' : ''}}>Nu stiu</option>
            </select>
        </div>

        <hr>

        <div class="form-group">
            <label for="mezanin">Mezanin</label>
            <div class="float-right">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="mezanin-da" {{ old("mezanin") == "Da" ? 'checked="checked"' : ''}} name="mezanin" class="custom-control-input" value="Da" data-checked-toggle="#mezanin-suprafata" data-toggle-value="Da">
                    <label class="custom-control-label" for="mezanin-da">Da</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="mezanin-nu" {{ old("mezanin") == "Nu" ? 'checked="checked"' : ''}} name="mezanin" class="custom-control-input" value="Nu">
                    <label class="custom-control-label" for="mezanin-nu">Nu</label>
                </div>
            </div>
        </div>
        <div class="form-group p-2" id="mezanin-suprafata" {!! old("mezanin") && old("mezanin") == "Da" ? '' : 'style="display:none"' !!}>
            <div class="form-group">
                <label for="mezanin_suprafata">Suprafata Mezanin (m<sup>2</sup>)</label>
                <input type="number" lang="en" class="form-control" id="mezanin_suprafata" name="mezanin_suprafata" placeholder="Suprafata Mezanin" value="{{ old('mezanin_suprafata') }}">
            </div>
            <hr>
        </div>

        <div class="form-group">
            <label for="copertina">Copertina</label>
            <div class="float-right">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="copertina-da" {{ old("copertina") == "Da" ? 'checked="checked"' : ''}} name="copertina" class="custom-control-input" value="Da" data-checked-toggle="#copertina-suprafata" data-toggle-value="Da">
                    <label class="custom-control-label" for="copertina-da">Da</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="copertina-nu" {{ old("copertina") == "Nu" ? 'checked="checked"' : ''}} name="copertina" class="custom-control-input" value="Nu">
                    <label class="custom-control-label" for="copertina-nu">Nu</label>
                </div>
            </div>
        </div>
        <div class="form-group p-2" id="copertina-suprafata" {!! old("copertina") && old("copertina") == "Da" ? '' : 'style="display:none"' !!}>
            <div class="form-group">
                <label for="copertina_suprafata">Suprafata copertina (m<sup>2</sup>)</label>
                <input type="number" lang="en" class="form-control" id="copertina_suprafata" name="copertina_suprafata" placeholder="Suprafata copertina" value="{{ old('copertina_suprafata') }}">
            </div>
            <hr>
        </div>


        <div class="form-group">
            <label for="pod_rulant">Pod Rulant</label>
            <div class="float-right">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="pod_rulant-da" {{ old("pod_rulant") == "Da" ? 'checked="checked"' : ''}} name="pod_rulant" class="custom-control-input" value="Da" data-checked-toggle="#pod_rulant-sarcina" data-toggle-value="Da">
                    <label class="custom-control-label" for="pod_rulant-da">Da</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="pod_rulant-nu" {{ old("pod_rulant") == "Nu" ? 'checked="checked"' : ''}} name="pod_rulant" class="custom-control-input" value="Nu">
                    <label class="custom-control-label" for="pod_rulant-nu">Nu</label>
                </div>
            </div>
        </div>
        <div class="form-group p-2" id="pod_rulant-sarcina" {!! old("pod_rulant") && old("pod_rulant") == "Da" ? '' : 'style="display:none"' !!}>
            <div class="form-group">
                <label for="pod_rulant_sarcina">Sarcina Pod Rulant (m<sup>2</sup>)</label>
                <input type="number" lang="en" class="form-control" id="pod_rulant_sarcina" name="pod_rulant_sarcina" placeholder="Sarcina Pod Rulant" value="{{ old('pod_rulant_sarcina') }}">
            </div>
        </div>

        <div class="form-group">
            <label for="cladire_izolata">Cladire izolata</label>
            <div class="float-right">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="cladire_izolata-da" {{ old("cladire_izolata") == "Da" ? 'checked="checked"' : ''}} name="cladire_izolata" class="custom-control-input" value="Da" data-checked-toggle="#cladire_izolata-detalii" data-toggle-value="Da">
                    <label class="custom-control-label" for="cladire_izolata-da">Da</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="cladire_izolata-nu" {{ old("cladire_izolata") == "Nu" ? 'checked="checked"' : ''}} name="cladire_izolata" class="custom-control-input" value="Nu">
                    <label class="custom-control-label" for="cladire_izolata-nu">Nu</label>
                </div>
            </div>
        </div>
        <div class="form-group p-2" id="cladire_izolata-detalii" {!! old("cladire_izolata") && old("cladire_izolata") == "Da" ? '' : 'style="display:none"' !!}>
            <div class="form-group">
                <div class="form-group">
                    <label for="type">Tip Acoperis</label>
                    <select class="form-control" id="type" name="tip_acoperis">
                        <option value="">Selectati o optiune</option>
                        <option value="tabla-vata-membrana" {{ old("tip_acoperis") == "tabla-vata-membrana" ? 'selected="selected"' : ''}}>Sistem tabla cu cuta inalta + vata + membrana</option>
                        <option value="panou-sandwich-vata-minerala" {{ old("tip_acoperis") == "panou-sandwich-vata-minerala" ? 'selected="selected"' : ''}}>Panou sandwich vata minerala</option>
                        <option value="panou-sandwich-spuma" {{ old("tip_acoperis") == "panou-sandwich-spuma" ? 'selected="selected"' : ''}}>Panou sandwich spuma</option>
                    </select>
                </div>
                <div id="tip_acoperis-tabla-vata-membrana" class="tip_acoperis_toggle" style="display: none">
                    <div class="form-group">
                        <label for="tip_acoperis-grosime-vata">Grosime vata (mm)</label>
                        <input type="number" step="2" min="8" max="12" lang="en" class="form-control" id="tip_acoperis-grosime-vata" name="tip_acoperis-grosime-vata" placeholder="Grosime Vata" value="{{ old('tip_acoperis-grosime-vata') }}">
                        <div class="btn-group autofill-input" role="group">
                            <button type="button" class="btn btn-primary" data-value="8">8mm</button>
                            <button type="button" class="btn btn-primary" data-value="10">10mm</button>
                            <button type="button" class="btn btn-primary" data-value="12">12mm</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tip membrana</label>
                        <select class="form-control" name="tip_acoperis-tip_membrana">
                                <option value="">Selectati o optiune</option>
                                <option value="PVC" {{ old("tip_acoperis-tip_membrana") == "PVC" ? 'selected="selected"' : ''}}>Membrana PVC</option>
                                <option value="bituminoasa" {{ old("tip_acoperis-tip_membrana") == "bituminoasa" ? 'selected="selected"' : ''}}>Membrana bituminoasa</option>
                        </select>
                    </div>
                    <div class="form-group">
                            <label for="tip_acoperis-grosime-membrana">Grosime membrana (mm)</label>
                            <input type="number" step="0.3" min="1.5" max="1.8" lang="en" class="form-control" id="tip_acoperis-grosime-membrana" name="tip_acoperis-grosime-membrana" placeholder="Grosime membrana" value="{{ old('tip_acoperis-grosime-membrana') }}">
                            <div class="btn-group autofill-input" role="group">
                                <button type="button" class="btn btn-primary" data-value="1.5">1.5mm</button>
                                <button type="button" class="btn btn-primary" data-value="1.8">1.8mm</button>
                            </div>
                    </div>
                </div>
                <div id="tip_acoperis-panou-sandwich-spuma" class="tip_acoperis_toggle" style="display: none">
                    <div class="form-group">
                            <label>Tip spuma</label>
                            <select class="form-control" name="tip_acoperis-panou-sandwich-spuma-tip">
                                    <option value="">Selectati o optiune</option>
                                    <option value="PIR" {{ old("tip_acoperis-panou-sandwich-spuma-tip") == "PIR" ? 'selected="selected"' : ''}}>PIR (rezistenta la foc 15 minute)</option>
                                    <option value="PUR" {{ old("tip_acoperis-panou-sandwich-spuma-tip") == "PUR" ? 'selected="selected"' : ''}}>PUR</option>
                            </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tip_acoperis-grosime">Grosime Acoperis (mm)</label>
                    <input type="number" step="20" min="60" max="150" lang="en" class="form-control" id="tip_acoperis-grosime" name="tip_acoperis-grosime" placeholder="Grosime" value="{{ old('tip_acoperis-grosime') }}">
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
                    <label for="type">Tip Pereti</label>
                    <select class="form-control" id="type" name="tip_pereti">
                        <option value="caseta-vata-tabla" {{ old("tip_pereti") == "caseta-vata-tabla" ? 'selected="selected"' : ''}}>Caseta vata tabla </option>
                        <option value="panou-sandwich-vata-minerala" {{ old("tip_pereti") == "panou_sandwich-vata-minerala" ? 'selected="selected"' : ''}}>Panou sandwich vata minerala</option>
                        <option value="spuma-pir" {{ old("tip_pereti") == "spuma-pir" ? 'selected="selected"' : ''}}>Spuma PIR </option>
                        <option value="spuma-pur" {{ old("tip_pereti") == "spuma-pur" ? 'selected="selected"' : ''}}>Spuma PUR </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tip_pereti-grosime">Grosime Pereti (mm)</label>
                    <input type="number" step="20" min="80" max="150" lang="en" class="form-control" id="tip_pereti-grosime" name="tip_pereti-grosime" placeholder="Grosime" value="{{ old('copertina_suprafata') }}">
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
            <label>Trape fum</label>
            <button type="button" class="btn btn-primary float-right add-dynamic_input-trigger" dynamic-name="trape_fum"><i class="fas fa-plus"></i></button>
            <p><small>Uzual, suprafata totala a trapelor de fum este 1.5% din suprafata totala a acoperisului.</small></p>
            <ol class="dynamic-wrap"></ol>
        </div>
        <hr>
        <div class="form-group">
            <label>Ferestre</label>
            <button type="button" class="btn btn-primary float-right add-dynamic_input-trigger" dynamic-name="ferestre"><i class="fas fa-plus"></i></button>
            <p></p>
            <div class="clearfix pt-1"></div>
            <ol class="dynamic-wrap"></ol>
        </div>
        <hr>

        <div class="form-group">
            <label>Usi Sectionale (industriale)</label>
            <button type="button" class="btn btn-primary float-right add-dynamic_input-trigger" dynamic-name="usi_sectionale"><i class="fas fa-plus"></i></button>
            <p></p>
            <div class="clearfix pt-1"></div>
            <ol class="dynamic-wrap"></ol>
        </div>
        <hr>

        <div class="form-group">
            <label>Usi Pietonale</label>
            <button type="button" class="btn btn-primary float-right add-dynamic_input-trigger" dynamic-name="usi_pietonale"><i class="fas fa-plus"></i></button>
            <p></p>
            <div class="clearfix pt-1"></div>
            <ol class="dynamic-wrap"></ol>
        </div>
        <hr>

        <div class="form-group">
            <label>Rampe Acces TIR</label>
            <button type="button" class="btn btn-primary float-right add-dynamic_input-trigger" dynamic-name="rampe_acces_tir"><i class="fas fa-plus"></i></button>
            <p></p>
            <div class="clearfix pt-1"></div>
            <ol class="dynamic-wrap"></ol>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <button type="button" class="btn btn-default prevstep">Inapoi</button>
            </div>
            <div class="col-md-6 text-right">
                <button type="button" class="btn btn-primary nextstep">Continua</button>
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

        var camera, controls, scene = false, renderer;

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

            renderer = new THREE.WebGLRenderer({
                preserveDrawingBuffer: true
            });
            renderer.setPixelRatio( window.devicePixelRatio );

            renderer.setSize( wrapper.offsetWidth, wrapper.offsetHeight );
            $("#building-preview").html(renderer.domElement);

            camera = new THREE.PerspectiveCamera( 60, wrapper.offsetWidth / wrapper.offsetHeight, 1, 1500 );
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

            $("#lungime, #latime, #inaltime").on("change", refreshScene);

            createGeometries();
            generateSnapshot();
        }

        // functia care va creea geometriile in scena
        function createGeometries() {

            // se preiau valorile lungimii, latimii si inaltimii care au fost introduse in formular
            // prin jquery
            var lungime = parseInt($("#lungime").val());
            var latime = parseInt($("#latime").val());
            var inaltime = parseInt($("#inaltime").val());

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

            // Pamantul:
            // se creeaza un obiect plan (PlaneGeometry) de dimensiuni 1400x1400, folosind
            // MeshLambertMaterial ca si material (MeshLambertMaterial - material for non-shiny surfaces, without specular highlights )

            // se configureaza textura pamantului
            var grassTexture = THREE.ImageUtils.loadTexture('images/grass-texture.jpg');
            grassTexture.wrapS = THREE.RepeatWrapping;
            grassTexture.wrapT = THREE.RepeatWrapping;
            grassTexture.repeat.x = 80;
            grassTexture.repeat.y = 80;

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


            // Cladirea:
            // in acest caz, vom desena in 2D conturul cladirii, apoi vom face extrude (ExtrudeBufferGeometry)
            var shape = new THREE.Shape();
            shape.moveTo( 0,0 );
            shape.lineTo( 0, inaltime );
            shape.lineTo( latime/2, inaltime + 1 );
            shape.lineTo( latime, inaltime );
            shape.lineTo( latime, 0 );
            shape.lineTo( 0, 0 );

            var texture = new THREE.TextureLoader().load( 'images/shed-texture.jpg' );
            texture.wrapS = THREE.ClampToEdgeWrapping;
            texture.wrapT = THREE.ClampToEdgeWrapping;
            texture.repeat.set( 13, 13 );

            var geometry = new THREE.ExtrudeBufferGeometry( shape, { depth: lungime, bevelEnabled: false } );
            // var material = new THREE.MeshLambertMaterial({ color: 0x6d98aa  });
            var material = new THREE.MeshLambertMaterial({ color: 0xffffff, map: texture });
            var mesh = new THREE.Mesh( geometry, material ) ;

            // se roteste cladirea cu 90 de grade pe axa Y - pentru aspect
            // apoi se va pozitiona cladirea pe centru (0,0)
            mesh.rotateY(THREE.Math.degToRad(90));
            mesh.position.z = latime/2;
            mesh.position.x = -lungime/2;
            mesh.position.y = -1;

            scene.add( mesh );

            // Lumini:
            // se adauga luminile in scena
            var light = new THREE.DirectionalLight( 0xffffff );
            light.position.set( -50, 20, 25 );
            scene.add( light );


            var light = new THREE.AmbientLight( 0xcccccc );
            scene.add( light );
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