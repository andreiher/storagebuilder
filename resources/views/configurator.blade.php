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
<form method="post" action="{{ route("proceseaza") }}" id="wizzard_form">
        {{csrf_field()}}
       <div id="step1" class="wizzard-steps active">
            @include("steps.step1") 
       </div>
       <div id="step2" class="wizzard-steps">
            <div class="container">
                @include("steps.step2")
            </div>
        </div>
        <div id="step3" class="wizzard-steps">
            <div class="container">
                @include("steps.summary")
            </div>
        </div>
   </form>
@endsection

@section('scripts')
   @parent
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js">
   </script>
   <script type="text/javascript">
        // window.onbeforeunload = function() {
        //     return "Daca plecati de pe pagina, veti pierde toate datele !";
        // }
        var currentstep=1;
        $(function(){

            detailsSectionHeight();

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
                   if($(this).val() == toggleValue) {
                        toggle.show();
                   } else {
                       toggle.hide();
                   }
               })
               toggle.hide();
            });
            $('select[name="tip_acoperis"]').on("change", function(){
                var toggles=$(".tip_acoperis_toggle");
                toggles.hide();
                $("#tip_acoperis-"+$(this).val()).show();
            })
            $('select[name="tip_pereti"]').on("change", function(){
                var buttonswrap= $(this).parent().find(".autofill-input");
                var buttons= buttonswrap.find('[data-value="80"], [data-value="150"]');
                if($(this).val()=="panou-sandwich-vata-minerala"){
                    buttons.show();
                } else {
                    buttons.hide();
                }
            })
            $(".nextstep").on("click",function(e){
                e.preventDefault();
                $(".wizzard-steps").hide();
                currentstep++;
                $("#step"+currentstep).show();

                updateSummaryPage();
            });
            $(".prevstep").on("click",function(e){
                e.preventDefault();
                $(".wizzard-steps").hide();
                currentstep--;
                $("#step"+currentstep).show();

                updateSummaryPage();
            })

            $('#data_sfarsit').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true,
                startDate: '0',
                container: $("#data_sfarsit").parent(),
                orientation: "top left"
            });

            $('#data_inceput').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true,
                startDate: '0',
                container: $("#data_inceput").parent(),
                orientation: "top left"
            }).on("changeDate",function(e){
                var newdate=e.date;
                newdate.setMonth(newdate.getMonth()+1);
                console.log(newdate)
                $("#data_sfarsit").datepicker("setStartDate",newdate).datepicker("update",newdate)
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
                var summary = $(".summary-screen")

                var values = inputs.serializeArray();

                $.each(values, function(i, input) {
                    var item = summary.find("."+input.name);
                    if(item.length) {
                        var theInput = $('[name="'+input.name+'"]');
                        if(theInput.is("select")) {
                            var option = theInput.find('option[value="'+input.value+'"]');
                            if(option.length) {
                                item.html(option.html());
                            } else {
                                item.html(input.value);
                            }
                            
                        } else if(theInput.is('[type="checkbox"]')) {
                            var inputClass = input.value == "1" ? 'fa-check' : 'fa-times';
                            item.html('<i class="fas '+inputClass+'"></i>');
                        } else {
                            item.html(input.value);
                        }
                        
                    }
                });

            }

            $(window).on("resize", function() {
                detailsSectionHeight();
            });
        });
   </script>
@endsection
