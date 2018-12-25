<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.levels.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
                
                        {{ html()->text('name')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.levels.name'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.levels.description'))->class('col-md-2 form-control-label')->for('description') }}
            <div class="col-md-10">
                
                        {{ html()->text('description')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.levels.description'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.levels.visible_radius'))->class('col-md-2 form-control-label')->for('visible_radius') }}
            <div class="col-md-10">
                
                    <input name="visible_radius" type="number" value="{{ isset($level->visible_radius)?$level->visible_radius:  0 }}" class="form-control" id="visible_radius"    required   >
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.levels.order'))->class('col-md-2 form-control-label')->for('order') }}
            <div class="col-md-10">
                
                    <input name="order" type="number" value="{{ isset($level->order)?$level->order:  0 }}" class="form-control" id="order"    required   >
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
                



    </div><!--col-->
</div><!--row-->