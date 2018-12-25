<div class="row mt-4 mb-4">
    <div class="col">

       
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.levels.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
       

                {{ $level->id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.levels.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
       

                {{ $level->name }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.levels.description'))->class('col-md-2 form-control-label')->for('description') }}
            <div class="col-md-10">
       

                {{ $level->description }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.levels.visible_radius'))->class('col-md-2 form-control-label')->for('visible_radius') }}
            <div class="col-md-10">
       

                {{ $level->visible_radius }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.levels.order'))->class('col-md-2 form-control-label')->for('order') }}
            <div class="col-md-10">
       

                {{ $level->order }}

            </div><!--col-->
         </div><!--form-group-->
         

        <!--end-columns-->
      
        <div class="form-group row">
           {{html()->label(__('Gems'))->class('col-md-2 form-control-label')->for('gems') }}
            <div class="col-md-10">
                @if  ( isset($gems)&&$gems->count())
                    @foreach($gems as $temp)
                        {{$temp->name }},
                    @endforeach
                @endif
            </div><!--col-->
        </div><!--form-group-->
        


    </div><!--col-->
</div><!--row-->