<div class="row mt-4 mb-4">
    <div class="col">

       
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.inventory.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
       

                {{ $inventory->id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.inventory.player_id'))->class('col-md-2 form-control-label')->for('player_id') }}
            <div class="col-md-10">
       

                {{ $inventory->player_id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.inventory.inventoryable_id'))->class('col-md-2 form-control-label')->for('inventoryable_id') }}
            <div class="col-md-10">
       

                {{ $inventory->inventoryable_id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.inventory.inventoryable_type'))->class('col-md-2 form-control-label')->for('inventoryable_type') }}
            <div class="col-md-10">
       

                {{ $inventory->inventoryable_type }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.inventory.count'))->class('col-md-2 form-control-label')->for('count') }}
            <div class="col-md-10">
       

                {{ $inventory->count }}

            </div><!--col-->
         </div><!--form-group-->
         

        <!--end-columns-->
      


    </div><!--col-->
</div><!--row-->