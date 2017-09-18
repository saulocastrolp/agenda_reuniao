@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Meus Eventos</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    {{--  <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <div class="box box-primary">
                <div class="box-body no-padding">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>  --}}
    <div class="row">
        <div class="col-xs 12">
            <div class="box box-primary">
                <div class="box-body">
                    {!! Form::open(['route' => 'events.store', 'method' => 'post', 'role' => 'form']) !!}
                    <div id="responsive-modal" class="modal fade" tabindex="-1" data-backdrop="static">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4>Novo Evento</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        {!! Form::label('title', 'Titulo do Evento') !!}
                                        {!! Form::text('title', old('title'), ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('date_start', 'Data Início') !!}
                                        {!! Form::text('date_start', old('date_start'), ['class' => 'form-control', 'readonly' => 'true']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('time_start', 'Hora Início', ['class' => 'form-control']) !!}
                                        {!! Form::text('time_start', old('time_start'), ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('date_end', 'Data e Hora Fim', ['class' => 'form-control']) !!}
                                        {!! Form::text('date_end', old('date_end'), ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('color', 'Cor', ['class' => 'form-control']) !!}
                                        <div class="input-group colorpicker">
                                            {!! Form::text('color', old('color'), ['class' => 'form-control']) !!}
                                            <span class="input-group-addon">
                                                <i></i> 
                                            </span>                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dafault" data-dismiss="modal">
                                        Cancelar
                                    </button>
                                    {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    {{--  <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/vendor/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="/vendor/fullcalendar/fullcalendar.print.min.css">  --}}
    {!! Html::style('vendor/adminlte/css/bootstrap.min.css') !!}
    {!! Html::style('css/admin_custom.css') !!}
    {!! Html::style('vendor/fullcalendar/fullcalendar.min.css') !!}
    {!! Html::style('vendor/bootstrap-datetimepicker/css/bootstrap-material-datetimepicker.css') !!}
    {!! Html::style('vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') !!}
    
    {{--  {!! Html::style('vendor/seguce92/bootstrap-datetimepicker/css/bootstrap-material-datetimepicker.css') !!}
    {!! Html::style('vendor/seguce92/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') !!}  --}}
@stop

@section('js')
    {{--  <script src='/vendor/fullcalendar/fullcalendar.min.js'></script>
    <script src='/vendor/fullcalendar/lib/moment.min.js'></script>
    <script src='/vendor/fullcalendar/lib/jquery.min.js'></script>  --}}
    {!! Html::script('vendor/jquery.min.js') !!}
    {!! Html::script('vendor/bootstrap/js/bootstrap.min.js') !!}
    {!! Html::script('vendor/fullcalendar/lib/moment.min.js') !!}
    {!! Html::script('vendor/fullcalendar/fullcalendar.min.js') !!}
    {!! Html::script('vendor/bootstrap-datetimepicker/js/bootstrap-material-datetimepicker.js') !!}
    {!! Html::script('vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') !!}
    <script>
    var BASE_URL = "{{ url('/') }}"

	$(document).ready(function() {
        var currentLangCode = 'pt-br';
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
            lang: currentLangCode,
			navLinks: true, // can click day/week names to navigate views
			editable: true,
            selectable: true,
            selectHelper: true,

            select: function(start){
                start = moment(start.format());
                $('#date_start').val(start.format('YYYY-MM-DD'));
                $('#responsive-modal').modal('show');
            },

			events: {
                url: BASE_URL + '/events',
                error: function() {
					$('#script-warning').show();
				}
            }
		});
		
	});

    $('.colorpicker').colorpicker();

    $('#time_start').bootstrapMaterialDatePicker({
        date: false,
        shortTime: false,
        format: 'HH:mm:ss'
    });

    $('#date_end').bootstrapMaterialDatePicker({
        date: true,
        shortTime: false,
        format: 'YYYY-MM-DD HH:mm:ss'
    })

</script>
@stop