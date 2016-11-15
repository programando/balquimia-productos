@extends ('templates.main')

@section ('body')

	<div class="container-fluid">

		<div class="row">
			<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h1 class="panel-title">{{ Lang::get('app_textos.registro_titulo_panel') }}</h1>
					</div>
					<!-- Panel-Body-->
					<div class="panel-body">
							{!! Form::open(['url'=>URL::route('registro')  ]) !!}
						    
						    <!-- Nombre de Usuario -->
						    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
						       
						        {!! Form::label('name', Lang::get('app_textos.registro_lbl_nom')  ) !!}
						        {!! Form::text ('name', null, [
						        	'class' 		=> 'form-control',
						        	'placeholder' 	=> Lang::get('app_textos.registro_plchldr_nom'),
						        	'maxlength'		=> Lang::get('app_textos.registro_maxlength_nom')
						        ]) !!}

						        @if ( $errors->has('name') )
						        	<p class="text-danger"> <i class="fa fa-exclamation-circle"></i> {{ $errors->first('name') }} </p>
						        @endif

						    </div><!-- /Nombre de Usuario  -->

						    <!-- Email-->
						    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
						       
						        {!! Form::label('email', Lang::get('app_textos.registro_lbl_email')  ) !!}
						        {!! Form::email ('email', null, [
						        	'class' 		=> 'form-control',
						        	'placeholder' 	=> Lang::get('app_textos.registro_plchldr_email') 
						        ]) !!}

						        @if ( $errors->has('email') )
						        	<p class="text-danger"> <i class="fa fa-exclamation-circle"></i> {{ $errors->first('email') }} </p>
						        @endif

						    </div><!-- /Email-->

						    <!-- password-->
						    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
						       
						        {!! Form::label('password', Lang::get('app_textos.registro_lbl_password')  ) !!}
						        {!! Form::password ('password', [
						        	'class' 		=> 'form-control',
						        	'placeholder' 	=> Lang::get('app_textos.registro_plchldr_password') 
						        ]) !!}

						        @if ( $errors->has('password') )
						        	<p class="text-danger"> <i class="fa fa-exclamation-circle"></i> {{ $errors->first('password') }} </p>
						        @endif

						    </div><!-- /password-->

						    <!-- password_confirmation-->
						    <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
						       
						        {!! Form::label('password_confirmation', Lang::get('app_textos.registro_lbl_password_confirma')  ) !!}
						        {!! Form::password ('password_confirmation', [
						        	'class' 		=> 'form-control',
						        	'placeholder' 	=> Lang::get('app_textos.registro_plchldr_password_confirma') 
						        ]) !!}

						        @if ( $errors->has('password_confirmation') )
						        	<p class="text-danger"> <i class="fa fa-exclamation-circle"></i> {{ $errors->first('password_confirmation') }} </p>
						        @endif

						    </div><!-- /password_confirmation-->
	  
	  						<!-- CheckBox acepta terminos y condiciones -->
						    <div class="checkbox {{ $errors->has('accept_disclamer')  ? 'has-error' : '' }} ">
			 					<label>
						    		{!! Form::checkbox('accept_disclamer', 'accepted')   !!} 
						    			{!!
						    				Lang::get('app_textos.disclamer_text', [
												'tos_url'     => URL::route('home'),
												'privacy_url' => URL::route('home'),
												'app_name'    => $app_nombre,
						    				])

						    			!!}
	 
								</label>

								@if ( $errors->has('accept_disclamer') )
						        	<p class="text-danger"> <i class="fa fa-exclamation-circle"></i> {{ $errors->first('accept_disclamer') }} </p>
						        @endif

						    </div>
						    <!-- /CheckBox acepta terminos y condiciones -->

 
								  <div>
								    <button class="btn btn-primary" type ="submit">{{ Lang::get('app_textos.btn-registro') }}</button>
								  </div>
								 
								  	
 
		 					 

							{!! Form::close() !!}
					</div>	<!-- //Panel-Body-->
					<div class="panel-footer">
						<a href="{{ URL::route('login') }}" class="btn btn-block">{{ Lang::get('app_textos.call_to_action') }} </a>	
					</div>
				</div>				
			</div>
		</div>
	</div>
  
@endsection