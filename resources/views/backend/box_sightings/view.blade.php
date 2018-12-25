<div class="row mt-4 mb-4">
    <div class="col">

       
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.box_sightings.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
       

                {{ $box_sighting->id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.box_sightings.player_id'))->class('col-md-2 form-control-label')->for('player_id') }}
            <div class="col-md-10">
       

                {{ $box_sighting->player_id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.box_sightings.box_id'))->class('col-md-2 form-control-label')->for('box_id') }}
            <div class="col-md-10">
       

                {{ $box_sighting->box_id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.box_sightings.founded_at'))->class('col-md-2 form-control-label')->for('founded_at') }}
            <div class="col-md-10">
       

                {{ $box_sighting->founded_at }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.box_sightings.lat'))->class('col-md-2 form-control-label')->for('lat') }}
            <div class="col-md-10">
       

                {{ $box_sighting->lat }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.box_sightings.lng'))->class('col-md-2 form-control-label')->for('lng') }}
            <div class="col-md-10">
       

                {{ $box_sighting->lng }}

            </div><!--col-->
         </div><!--form-group-->
         

        <!--end-columns-->
      


    </div><!--col-->
</div><!--row-->