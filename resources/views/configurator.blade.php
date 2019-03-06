@extends('layouts.main')

@section('content')
   <form method="post" action="">
        {{csrf_field()}}
       <div id="step1" class="wizzard-steps active">
            @include("steps.step1") 
       </div>
       <div id="step2" class="wizzard-steps">
            @include("steps.step2")
        </div>
        <div id="step3" class="wizzard-steps">
            @include("steps.summary")
        </div>
   </form>
@endsection

@section('scripts')
   @parent
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js">
   </script>
   <script type="text/javascript">
        var currentstep=1;
        $(function(){
            $(".nextstep").on("click",function(e){
                e.preventDefault();
                $(".wizzard-steps").hide();
                currentstep++;
                $("#step"+currentstep).show();
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
            })

        }) 
   </script>
@endsection
