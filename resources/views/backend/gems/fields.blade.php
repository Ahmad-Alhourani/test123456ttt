<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gems.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
                
                        {{ html()->text('name')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.gems.name'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gems.level_id'))->class('col-md-2 form-control-label')->for('level_id') }}
            <div class="col-md-10">
                
                        {{ html()->text('level_id')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.gems.level_id'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gems.clickable_radius'))->class('col-md-2 form-control-label')->for('clickable_radius') }}
            <div class="col-md-10">
                
                    <input name="clickable_radius" type="number" value="{{ isset($gem->clickable_radius)?$gem->clickable_radius:  0 }}" class="form-control" id="clickable_radius"    required   >
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
                   



    </div><!--col-->
</div><!--row-->