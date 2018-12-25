<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.players.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
                
                        {{ html()->text('name')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.players.name'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.players.token'))->class('col-md-2 form-control-label')->for('token') }}
            <div class="col-md-10">
                
                        {{ html()->text('token')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.players.token'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.players.birth_date'))->class('col-md-2 form-control-label')->for('birth_date') }}
            <div class="col-md-10">
                
                        {{ html()->date('birth_date')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.players.birth_date'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.players.level_id'))->class('col-md-2 form-control-label')->for('level_id') }}
            <div class="col-md-10">
                
                        {{ html()->text('level_id')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.players.level_id'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
             



    </div><!--col-->
</div><!--row-->