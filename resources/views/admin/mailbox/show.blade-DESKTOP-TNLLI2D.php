@extends('layouts.master')
@section('title') {{__('Mailbox')}} @endsection
@section('content')
<div class="container-fluid">
 <!-- sample modal content -->
 <div class="col-md-12 col">
    <div class="card">
        <div class="mailbox-widget p-0">
            <div class="card-body card-body">
              <!-- MailBox Reply modal content -->
              <!-- /.modal -->
                <h2>{{ $email->subject }}</h2>
                <p>by: <b>{{ $email->name }}</b></p>
                <span>sent: {{ $email->created_at->format('M d,Y \a\t h:i A') }}</span>
                <hr>
                <p>{{ $email->message }}</p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-light" href="{{ route('mailbox') }}">Cancel</a>
                <a href="mailto::{{ $email->email }}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Reply</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
@endsection