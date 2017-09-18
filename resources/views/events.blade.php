@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Meus Eventos</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div id="calendar"></div>
@stop

@section('css')
    {{--  <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/vendor/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="/vendor/fullcalendar/fullcalendar.print.min.css">  --}}
    {!! Html::style('vendor/adminlte/css/bootstrap.min.css') !!}
    {!! Html::style('css/admin_custom.css') !!}
    {!! Html::style('vendor/fullcalendar/fullcalendar.min.css') !!}
    {{--  {!! Html::style('vendor/seguce92/bootstrap-datetimepicker/css/bootstrap-material-datetimepicker.css') !!}
    {!! Html::style('vendor/seguce92/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') !!}  --}}
@stop

@section('js')
    {{--  <script src='/vendor/fullcalendar/fullcalendar.min.js'></script>
    <script src='/vendor/fullcalendar/lib/moment.min.js'></script>
    <script src='/vendor/fullcalendar/lib/jquery.min.js'></script>  --}}
    {!! Html::script('vendor/fullcalendar/lib/jquery.min.js') !!}
    {!! Html::script('vendor/fullcalendar/lib/jquery-ui.min.js') !!}
    {!! Html::script('vendor/fullcalendar/lib/moment.min.js') !!}
    {!! Html::script('vendor/fullcalendar/fullcalendar.min.js') !!}
    <script>

	$(document).ready(function() {
        var currentLangCode = 'pt-br';
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
            lang: currentLangCode,
			defaultDate: '2017-09-12',
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2017-09-01'
				},
				{
					title: 'Long Event',
					start: '2017-09-07',
					end: '2017-09-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2017-09-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2017-09-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2017-09-11',
					end: '2017-09-13'
				},
				{
					title: 'Meeting',
					start: '2017-09-12T10:30:00',
					end: '2017-09-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2017-09-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2017-09-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2017-09-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2017-09-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2017-09-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2017-09-28'
				}
			]
		});
		
	});

</script>
@stop