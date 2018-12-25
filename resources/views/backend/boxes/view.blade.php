<div class="row mt-4 mb-4">
    <div class="col">

       
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.boxes.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
       

                {{ $box->id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.boxes.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
       

                {{ $box->name }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.boxes.description'))->class('col-md-2 form-control-label')->for('description') }}
            <div class="col-md-10">
       

                {{ $box->description }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.boxes.clickable_radius'))->class('col-md-2 form-control-label')->for('clickable_radius') }}
            <div class="col-md-10">
       

                {{ $box->clickable_radius }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.boxes.level_id'))->class('col-md-2 form-control-label')->for('level_id') }}
            <div class="col-md-10">
       

                {{ $box->level_id }}

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
           {{html()->label(__('Items'))->class('col-md-2 form-control-label')->for('items') }}
            <div class="col-md-10">
                @if  ( isset($items)&&$items->count())
                    @foreach($items as $temp)
                        {{$temp->name }},
                    @endforeach
                @endif
            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
           {{html()->label(__('BoxSightings'))->class('col-md-2 form-control-label')->for('box_sightings') }}
            <div class="col-md-10">
                @if  ( isset($box_sightings)&&$box_sightings->count())
                    @foreach($box_sightings as $temp)
                       {{$temp->name }},
                    @endforeach
                @endif
            </div><!--col-->
        </div><!--form-group-->
        


    </div><!--col-->
</div><!--row-->