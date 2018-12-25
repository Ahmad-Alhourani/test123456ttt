<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gem_sightings.gem_id'))->class('col-md-2 form-control-label')->for('gem_id') }}
            <div class="col-md-10">
                
                        {{ html()->text('gem_id')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.gem_sightings.gem_id'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gem_sightings.player_id'))->class('col-md-2 form-control-label')->for('player_id') }}
            <div class="col-md-10">
                
                        {{ html()->text('player_id')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.gem_sightings.player_id'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gem_sightings.founded_at'))->class('col-md-2 form-control-label')->for('founded_at') }}
            <div class="col-md-10">
                
                        {{ html()->date('founded_at')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.gem_sightings.founded_at'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gem_sightings.lat'))->class('col-md-2 form-control-label')->for('lat') }}
            <div class="col-md-10">
                
                    <input name="lat" type="number" value="{{ isset($gem_sighting->lat)?$gem_sighting->lat: 0 }}" class="form-control" id="lat"    required   >
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gem_sightings.lng'))->class('col-md-2 form-control-label')->for('lng') }}
            <div class="col-md-10">
                
                    <input name="lng" type="number" value="{{ isset($gem_sighting->lng)?$gem_sighting->lng: 0 }}" class="form-control" id="lng"    required   >
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
             



    </div><!--col-->
</div><!--row-->