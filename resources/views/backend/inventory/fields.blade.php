<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.inventory.player_id'))->class('col-md-2 form-control-label')->for('player_id') }}
            <div class="col-md-10">
                
                        {{ html()->text('player_id')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.inventory.player_id'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.inventory.inventoryable_id'))->class('col-md-2 form-control-label')->for('inventoryable_id') }}
            <div class="col-md-10">
                
                        {{ html()->text('inventoryable_id')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.inventory.inventoryable_id'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.inventory.inventoryable_type'))->class('col-md-2 form-control-label')->for('inventoryable_type') }}
            <div class="col-md-10">
                
                        {{ html()->text('inventoryable_type')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.inventory.inventoryable_type'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.inventory.count'))->class('col-md-2 form-control-label')->for('count') }}
            <div class="col-md-10">
                
                        {{ html()->text('count')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.inventory.count'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
             



    </div><!--col-->
</div><!--row-->