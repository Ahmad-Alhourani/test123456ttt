<div class="row mt-4 mb-4">
    <div class="col">

       
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gems.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
       

                {{ $gem->id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gems.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
       

                {{ $gem->name }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gems.description'))->class('col-md-2 form-control-label')->for('description') }}
            <div class="col-md-10">
       

                {{ $gem->description }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gems.level_id'))->class('col-md-2 form-control-label')->for('level_id') }}
            <div class="col-md-10">
       

                {{ $gem->level_id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gems.clickable_radius'))->class('col-md-2 form-control-label')->for('clickable_radius') }}
            <div class="col-md-10">
       

                {{ $gem->clickable_radius }}

            </div><!--col-->
         </div><!--form-group-->
         

        <!--end-columns-->
      
        <div class="form-group row">
           {{html()->label(__('Boxes'))->class('col-md-2 form-control-label')->for('boxes') }}
            <div class="col-md-10">
                @if  ( isset($boxes)&&$boxes->count())
                    @foreach($boxes as $temp)
                        {{$temp->name }},
                    @endforeach
                @endif
            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
           {{html()->label(__('Players'))->class('col-md-2 form-control-label')->for('players') }}
            <div class="col-md-10">
                @if  ( isset($players)&&$players->count())
                    @foreach($players as $temp)
                        {{$temp->name }},
                    @endforeach
                @endif
            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
           {{html()->label(__('GemSightings'))->class('col-md-2 form-control-label')->for('gem_sightings') }}
            <div class="col-md-10">
                @if  ( isset($gem_sightings)&&$gem_sightings->count())
                    @foreach($gem_sightings as $temp)
                       {{$temp->name }},
                    @endforeach
                @endif
            </div><!--col-->
        </div><!--form-group-->
        


    </div><!--col-->
</div><!--row-->