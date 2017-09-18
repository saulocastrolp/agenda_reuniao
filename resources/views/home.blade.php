@extends('adminlte::page')

@section('title', 'CalendarApp')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @if ($message = Session::get('success'))
        <div class="modal modal-success fade" id="modal-success">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Sucesso</h4>
              </div>
              <div class="modal-body">
                <p>{{ $message }}</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
    @endif
    <p>You are logged in!</p>
@stop