<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.box_sightings.player_id'))->class('col-md-2 form-control-label')->for('player_id') }}
            <div class="col-md-10">
                
                        {{ html()->text('player_id')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.box_sightings.player_id'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.box_sightings.box_id'))->class('col-md-2 form-control-label')->for('box_id') }}
            <div class="col-md-10">
                
                        {{ html()->text('box_id')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.box_sightings.box_id'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.box_sightings.founded_at'))->class('col-md-2 form-control-label')->for('founded_at') }}
            <div class="col-md-10">
                
                        {{ html()->date('founded_at')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.box_sightings.founded_at'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.box_sightings.lat'))->class('col-md-2 form-control-label')->for('lat') }}
            <div class="col-md-10">
                
                    <input name="lat" type="number" value="{{ isset($box_sighting->lat)?$box_sighting->lat: 0 }}" class="form-control" id="lat"    required   >
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.box_sightings.lng'))->class('col-md-2 form-control-label')->for('lng') }}
            <div class="col-md-10">
                
                    <input name="lng" type="number" value="{{ isset($box_sighting->lng)?$box_sighting->lng: 0 }}" class="form-control" id="lng"    required   >
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
             



    </div><!--col-->
</div><!--row-->