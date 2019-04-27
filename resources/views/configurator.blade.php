@extends('layouts.fullscreen')

@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{ route("proceseaza") }}" id="wizzard_form" enctype="multipart/form-data">
        {{csrf_field()}}
       <div id="step1" class="wizzard-steps active">
            @include("steps.step1") 
       </div>
       <div id="step2" class="wizzard-steps" style="padding-top:100px;">
            <div class="container">
                @include("steps.step2")
            </div>
        </div>
        <div id="step3" class="wizzard-steps" style="padding-top:100px;">
            <div class="container">
                @include("steps.summary")
            </div>
        </div>
   </form>
@endsection

@section('scripts')
   @parent

   <script>
        var currentstep=1;
        $(function(){
            $('[data-toggle="tooltip"]').tooltip()

            detailsSectionHeight();

            $(".add-dynamic_input-trigger").on("click", function() {
                var wrap = $(this).parent().find(".dynamic-wrap");
                var inputName = $(this).attr("data-dynamic-name");

                var newItem =
                    '<li class="pb-1 pt-1">'+
                        '<input type="hidden" class="form-control main-input" name="'+ inputName +'[]" placeholder="L x l x H">' +
                        '<div class="row">' +
                            '<div class="col-md-7">' +
                                '<input type="text" class="form-control dynamic-input sizes" placeholder="L x l x H">' +
                            '</div>' +
                            '<div class="col-md-3">' +
                                '<input type="number" class="form-control dynamic-input pieces" placeholder="Buc" value="1">' +
                            '</div>' +
                            '<div class="col-md-2">' +
                                '<button type="button" class="btn btn-danger remove-dynamic-element"><i class="fas fa-minus"></i></button> ' +
                            '</div>' +
                        '</div>' +
                    '</li>';
                wrap.append(newItem);
            });

            $("body").on("change paste keyup", ".dynamic-input", function() {
                var that = $(this);
                var wrap = that.closest("li");
                var input = wrap.find(".main-input");
                var sizes = wrap.find(".dynamic-input.sizes");
                var pcs = wrap.find(".dynamic-input.pieces");

                var formattedText = sizes.val() + " - " + pcs.val() + " pcs";
                input.val(formattedText);

            });

            $("body").on("click", ".remove-dynamic-element", function() {
                var wrap = $(this).closest("li");
                wrap.remove();
            });

            $('input[type="radio"][data-checked-toggle]').each(function() {
               var that = $(this);
               var toggle = $(that.attr("data-checked-toggle"));
               var toggleValue = that.attr("data-toggle-value");
               var radios = $('input[name="'+that.attr("name")+'"]');
               radios.on("change click", function() {
                   if($(this).val() == toggleValue) {
                        toggle.show();
                   } else {
                       toggle.hide();
                   }
               })
            });

            $('*[data-change-toggle]').each(function() {
               var that = $(this);
               var toggle = $(that.attr("data-change-toggle"));
               var toggleValue = that.attr("data-toggle-value");
               that.on("change", function() {
                   if($(this).val() === toggleValue) {
                        toggle.show();
                   } else {
                       toggle.hide();
                   }
               });
               toggle.hide();
            });

            $('select[name="tip_acoperis"]').on("change", function(){
                var toggles=$(".tip_acoperis_toggle");
                toggles.hide();
                $(".tip_acoperis-"+$(this).val()).show();
            });

            $('select[name="tip_pereti"]').on("change", function(){
                var buttonswrap= $(this).parent().find(".autofill-input");
                var buttons= buttonswrap.find('[data-value="80"], [data-value="150"]');
                if($(this).val()=="panou-sandwich-vata-minerala"){
                    buttons.show();
                } else {
                    buttons.hide();
                }
            });

            $(".nextstep").on("click",function(e){
                e.preventDefault();
                var form = $("#wizzard_form");
                if(form.valid()) {
                    form.validate().destroy();
                    $(".wizzard-steps").hide();
                    currentstep++;

                    form.validate().destroy();
                    form.validate({ rules: validationRules[(currentstep - 1)] });

                    $("#step"+currentstep).show();

                    updateSummaryPage();
                }
            });

            $(".prevstep").on("click",function(e){
                e.preventDefault();
                $(".wizzard-steps").hide();
                currentstep--;

                // update validation based on the step
                var form = $("#wizzard_form");
                form.validate().destroy();
                form.validate({ rules: validationRules[(currentstep - 1)] });

                $("#step"+currentstep).show();

                updateSummaryPage();
            })

            $('#data_inceput').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true,
                startDate: '0',
                container: $("#data_inceput").parent(),
                orientation: "top left"
            }).on("changeDate",function(e){
                var newdate=e.date;
                newdate.setMonth(newdate.getMonth()+3);
                $("#data_sfarsit").datepicker("setStartDate",newdate).datepicker("update",newdate)
            });


            $('#data_sfarsit').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true,
                startDate: '0',
                container: $("#data_sfarsit").parent(),
                orientation: "top left"
            });


            function detailsSectionHeight() {
                return;
                var item = $(".details-section-side");
                var itemHeight = item.outerHeight();
                var windowHeight = $(window).height();

                if(windowHeight < itemHeight) {
                    item.css({
                        maxHeight: windowHeight - 400,
                        overflowY: 'auto'
                    });
                } else {
                    item.css({
                        maxHeight: 'none',
                        overflowY: 'none'
                    });
                }
            }

            function updateSummaryPage() {
                var form = $("#wizzard_form");
                var inputs = $("input, select, textarea");
                var summary = $(".summary-screen");

                var values = inputs.serializeArray();

                $.each(values, function(i, input) {
                    var isMultiple = input.name.indexOf("[]") > -1;
                    if(isMultiple) {
                        var item = summary.find("."+input.name.replace("[]",""));
                        if(item.length) {
                            var theInputs = $('[name="'+input.name+'"]');
                            var dimensions = [];
                            $.each(theInputs, function() {
                                if($(this).val().length) {
                                    dimensions.push($(this).val());
                                }
                            });
                            var dims = dimensions.length > 0 ? " - ( "+dimensions.join(", ")+" )" : "";
                            item.html(theInputs.length + dims);
                        }
                    } else {
                        var item = summary.find("."+input.name);
                        if(item.length) {
                            var theInput = $('[name="'+input.name+'"]');
                            if(theInput.is("select")) {
                                if(input.name === "tip_acoperis") {
                                    if(input.value === "tabla-vata-membrana") {
                                        summary.find(".toggle-tabla-vata-membrana").show();
                                    } else {
                                        summary.find(".toggle-tabla-vata-membrana").hide();
                                    }

                                    if(input.value.indexOf("panou-sandwich") > -1) {
                                        summary.find(".toggle-panou-sandwich-spuma").show();
                                    } else {
                                        summary.find(".toggle-panou-sandwich-spuma").hide();
                                    }
                                }

                                var option = theInput.find('option[value="'+input.value+'"]');
                                if(option.length) {
                                    item.html(option.html());
                                } else {
                                    item.html(input.value);
                                }
                            } else if(theInput.is('[type="radio"]')) {
                                if(input.name === "color") {
                                    var selected = $('[name="'+ input.name +'"]:checked');
                                    var hexColor = ral2hex(selected.val());
                                    item.html(' <span class="color-sample small" style="background-color: ' + hexColor + '"></span> '+ selected.val());
                                } else {
                                    if(theInput.has("data-checked-toggle")) {
                                        var tgValue = theInput.attr("data-toggle-value");
                                        if($('input[name="'+input.name+'"]:checked').val() === tgValue) {
                                            summary.find(".toggle-"+input.name).show();
                                        } else {
                                            summary.find(".toggle-"+input.name).hide();
                                        }
                                    }
                                    var val = $('[name="'+ input.name +'"]:checked');
                                    if(val.length) {
                                        item.html(input.value);
                                    }
                                }
                            } else if(theInput.is('[type="checkbox"]')) {
                                var inputClass = input.value == "1" ? 'fa-check' : 'fa-times';
                                item.html('<i class="fas '+inputClass+'"></i>');
                            } else if(theInput.is('textarea')) {
                                if(input.value.length) {
                                    item.html((input.value + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + '<br />' + '$2'));
                                }
                            } else {
                                if(input.value.length) {
                                    item.html(input.value);
                                }
                            }

                        }
                    }

                });

            }
            


            var validationRules = [
                {
                    destinatie_cladire: "required",
                    tip_structura: "required",
                    lungime: {
                        required: true,
                        number: true,
                        max: 100,
                        min: 5
                    },
                    latime: {
                        required: true,
                        number: true,
                        max: 100,
                        min: 5
                    },
                    inaltime: {
                        required: true,
                        number: true,
                        max: 20,
                        min: 5
                    },
                    sistem_pluvial: "required",
                    panta_acoperis: "required",
                    mezanin: "required",
                    mezanin_suprafata: {
                        required: {
                            depends: function() {
                                return $('[name="mezanin"]:checked').val() === "Da";
                            }
                        },
                    },
                    copertina: "required",
                    copertina_suprafata: {
                        required: {
                            depends: function() {
                                return $('[name="copertina"]:checked').val() === "Da";
                            }
                        },
                    },
                    pod_rulant: "required",
                    pod_rulant_sarcina: {
                        required: {
                            depends: function() {
                                return $('[name="pod_rulant"]:checked').val() === "Da";
                            }
                        },
                    },
                    cladire_izolata: "required",
                    tip_acoperis: {
                        required: {
                            depends: function() {
                                return $('[name="cladire_izolata"]:checked').val() === "Da";
                            }
                        },
                    },
                    'tip_acoperis-grosime': {
                        required: {
                            depends: function() {
                                return $('[name="cladire_izolata"]:checked').val() === "Da";
                            }
                        },
                    },
                    'tip_acoperis-grosime-vata': {
                        required: {
                            depends: function() {
                                return $('[name="cladire_izolata"]:checked').val() === "Da" && $('[name="tip_acoperis"]').val() === "tabla-vata-membrana";
                            }
                        },
                    },
                    'tip_acoperis-grosime-membrana': {
                        required: {
                            depends: function() {
                                return $('[name="cladire_izolata"]:checked').val() === "Da" && $('[name="tip_acoperis"]').val() === "tabla-vata-membrana";
                            }
                        },
                    },
                    'tip_acoperis-tip_membrana': {
                        required: {
                            depends: function() {
                                return $('[name="cladire_izolata"]:checked').val() === "Da" && $('[name="tip_acoperis"]').val() === "tabla-vata-membrana";
                            }
                        },
                    },
                    'tip_acoperis-panou-sandwich-spuma-tip': {
                        required: {
                            depends: function() {
                                return $('[name="cladire_izolata"]:checked').val() === "Da" && $('[name="tip_acoperis"]').val() === "panou-sandwich-spuma";
                            }
                        },
                    },
                    'tip_pereti-grosime': {
                        required: {
                            depends: function() {
                                return $('[name="cladire_izolata"]:checked').val() === "Da";
                            }
                        },
                    },
                },
                {
                    // nume: "required",
                    // prenume: "required",
                    firma: "required",
                    telefon: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    localitate: "required",
                    data_inceput: "required",
                    data_sfarsit: "required",
                }
            ];

            $("#wizzard_form").validate({ rules: validationRules[(currentstep - 1)] });

            $("#terms_and_conditions").on("click", function() {
                var button = $('form button[type="submit"]');
                if(!$(this).is(":checked")) {
                    button.attr("disabled", true);
                    button.prop("disabled", true);
                } else {
                    button.attr("disabled", false);
                    button.prop("disabled", false);
                }
            });

            $(window).on("resize", function() {
                detailsSectionHeight();
            });
        });
   </script>
@endsection
