@extends('main');

@section('title','| Dodaj novu vest');

@section('stylesheets')

	{!! Html::style('css/parsey.css')!!}

@endsection

@section('content')

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
			<h1>Dodaj novi post</h1>
			<hr>
				{!! Form::open(array('route' => 'posts.store','data-parsley-validate'=>'')) !!}
    			
	    			{{ Form::label('naslov', 'Naslov:')}}
	    			{{ Form::text('naslov',null,array('class' => 'form-control', 'required'=>' ','maxlength'=>"255" ))}}
					
					{{ Form::label('body', 'Body posta:')}}
	    			{{ Form::textarea('body',null,array('class' => 'form-control', 'required'=>' '))}}

	    			{{ Form::submit('Dodaj novi zapis', array('class'=>'btn btn-success btn-lg btn-block',
	    														'style'=>'margin-top:20px;'))}}

				{!! Form::close() !!}

			</div>	
		</div>		

@endsection
@section('scripts')

	{!! Html::script('js/parsey.min.js')!!}

@endsection