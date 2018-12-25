<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.box_gems.gem_id'))->class('col-md-2 form-control-label')->for('gem_id') }}
            <div class="col-md-10">
                
                        {{ html()->text('gem_id')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.box_gems.gem_id'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.box_gems.box_id'))->class('col-md-2 form-control-label')->for('box_id') }}
            <div class="col-md-10">
                
                        {{ html()->text('box_id')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.box_gems.box_id'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.box_gems.count'))->class('col-md-2 form-control-label')->for('count') }}
            <div class="col-md-10">
                
                    <input name="count" type="number" value="{{ isset($box_gem->count)?$box_gem->count:  0 }}" class="form-control" id="count"    required   >
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
             



    </div><!--col-->
</div><!--row-->