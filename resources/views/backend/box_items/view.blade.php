<div class="row mt-4 mb-4">
    <div class="col">

       
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.box_items.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
       

                {{ $box_item->id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.box_items.item_id'))->class('col-md-2 form-control-label')->for('item_id') }}
            <div class="col-md-10">
       

                {{ $box_item->item_id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.box_items.box_id'))->class('col-md-2 form-control-label')->for('box_id') }}
            <div class="col-md-10">
       

                {{ $box_item->box_id }}

            </div><!--col-->
         </div><!--form-group-->
         

        <!--end-columns-->
      


    </div><!--col-->
</div><!--row-->