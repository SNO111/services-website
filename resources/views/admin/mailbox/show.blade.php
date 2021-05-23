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
  <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
  aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Reply To: <b>{{ $email->name }}</b> </h4>
              <button type="button" class="close" data-dismiss="modal"
                  aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
              <h6>Text in a modal</h6>
              <hr>
              <form role="form" id="contact-form" method="post" autocomplete="off" action="{{ route('contact.store') }}">
                @csrf
                <div class="card-body pb-2">
                  <div class="form-group mb-0 mt-md-0 mt-4">
                    <label>Subject</label>
                    <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject" id="subject" value="{{ old('subject') }}" placeholder="Subject of the message">
                    <!-- Error -->
                    @if ($errors->has('subject'))
                    <div class="error">
                        {{ $errors->first('subject') }}
                    </div>
                    @endif
                  </div>
                  <div class="form-group mb-0 mt-md-0 mt-4">
                    <label>Write you message here:</label>
                    <textarea name="message" class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message" rows="6" >{{ old('message') }}</textarea>
                    <!-- Error -->
                    @if ($errors->has('message'))
                    <div class="error">
                        {{ $errors->first('message') }}
                    </div>
                    @endif
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-primary mt-3 mb-0">Reply</button>
                    </div>
                  </div>
                </div>
              </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-light"
                  data-dismiss="modal">Close</button>
          </div>
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                <h2>{{ $email->subject }}</h2>
                <p>by: <b>{{ $email->name }}</b></p>
                <span>sent: {{ $email->created_at->format('M d,Y \a\t h:i A') }}</span>
                <hr>
                <p>{{ $email->message }}</p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-light" href="{{ route('mailbox') }}">Close</a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Reply</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
@endsection