@extends ('templates.main')

@section ('body')

	<div class="container-fluid">

		<div class="row">
			<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h1 class="panel-title">{{ Lang::get('app_textos.login_titulo_panel') }}</h1>
					</div>
					<!-- Panel-Body-->
					<div class="panel-body">
							{!! Form::open(['url'=>URL::route('login')  ]) !!}
						    
 

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

 
	  
	  						<!-- CheckBox mantenerme conectado ?   remember_me-->
						    <div class="checkbox {{ $errors->has('remember_me')  ? 'has-error' : '' }} ">
			 					<label>
						    		{!! Form::checkbox('remember_me', 'true')   !!} 
						    			{{
						    				Lang::get('app_textos.remember_me')
						    			}}
	 
								</label>

								@if ( $errors->has('remember_me') )
						        	<p class="text-danger"> <i class="fa fa-exclamation-circle"></i> {{ $errors->first('remember_me') }} </p>
						        @endif

						    </div>
						    <!-- /CheckBox acepta terminos y condiciones -->

 
								  <div>
								    <button class="btn btn-primary" type ="submit">{{ Lang::get('app_textos.btn-registro') }}</button>
								  </div>
								 
								  	
 
		 					 

							{!! Form::close() !!}
					</div>	<!-- //Panel-Body-->
					<div class="panel-footer">
						<a href="{{ URL::route('registro') }}" class="btn btn-block">{{ Lang::get('app_textos.login_call_to_action') }} </a>	
					</div>
				</div>				
			</div>
		</div>
	</div>
  
@endsection