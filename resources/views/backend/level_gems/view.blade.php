<div class="row mt-4 mb-4">
    <div class="col">

       
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.level_gems.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
       

                {{ $level_gem->id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.level_gems.gem_id'))->class('col-md-2 form-control-label')->for('gem_id') }}
            <div class="col-md-10">
       

                {{ $level_gem->gem_id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.level_gems.level_id'))->class('col-md-2 form-control-label')->for('level_id') }}
            <div class="col-md-10">
       

                {{ $level_gem->level_id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.level_gems.count'))->class('col-md-2 form-control-label')->for('count') }}
            <div class="col-md-10">
       

                {{ $level_gem->count }}

            </div><!--col-->
         </div><!--form-group-->
         

        <!--end-columns-->
      


    </div><!--col-->
</div><!--row-->