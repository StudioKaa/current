@extends('layouts.app')

@section('buttons-right')
    <a class="btn btn-outline-secondary navbar-text" href="{{ URL::previous() }}">
        <i class="fa fa-times" aria-hidden="true"></i> <span>Annuleren</span>
    </a>
@endsection

@section('content')
  
    <form method="POST" action="/lessons/{{ $lesson->id }}/reviews/create/file" enctype="multipart/form-data">

    	@include('layouts/errors')

	  	<div class="form-group row">
    		<label class="col-sm-2 col-form-label">Les</label>
    		<div class="col-sm-10">
	    		<input type="text" readonly class="form-control-plaintext" value="{{ $lesson_type->title }}: {{ $lesson->title }}">
	    		<input type="hidden" name="lesson" value="{{ $lesson->id }}">
	    	</div>
  		</div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
          <div class="btn-group" data-toggle="buttons"> 
            @foreach($statuses as $status) 
            <label class="btn btn-outline-primary" for="status{{ $status->id }}"> 
              <input class="form-check-input" type="radio" name="review_status_id" id="status{{ $status->id }}" value="{{ $status->id }}"> 
                {{ $status->title }} 
             </label> 
          @endforeach 
          </div> 
        </div>
      </div>


      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Werkversie</label>
        <div class="col-sm-10">
          <input type="file" class="form-control-file" name="wv_file">
          <small class="form-text text-muted">Verplicht.</small>
        </div>
      </div>
	  	<div class="form-group row">
        <label class="col-sm-2 col-form-label">Trainersversie</label>
        <div class="col-sm-10">
          <input type="file" class="form-control-file" name="tv_file">
          <small class="form-text text-muted">Optioneel, kan ook later toegevoegd worden.</small>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Studentenversie</label>
        <div class="col-sm-10">
          <input type="file" class="form-control-file" name="sv_file">
          <small class="form-text text-muted">Optioneel, kan ook later toegevoegd worden.</small>
        </div>
      </div>

  		{{ csrf_field() }}

  		<button type="submit" class="btn btn-success">
        <i class="fa fa-floppy-o" aria-hidden="true"></i> Opslaan
      </button>

	</form>

@endsection