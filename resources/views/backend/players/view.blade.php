<div class="row mt-4 mb-4">
    <div class="col">

       
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.players.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
       

                {{ $player->id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.players.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
       

                {{ $player->name }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.players.token'))->class('col-md-2 form-control-label')->for('token') }}
            <div class="col-md-10">
       

                {{ $player->token }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.players.birth_date'))->class('col-md-2 form-control-label')->for('birth_date') }}
            <div class="col-md-10">
       

                {{ $player->birth_date }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.players.level_id'))->class('col-md-2 form-control-label')->for('level_id') }}
            <div class="col-md-10">
       

                {{ $player->level_id }}

            </div><!--col-->
         </div><!--form-group-->
         

        <!--end-columns-->
      
        <div class="form-group row">
           {{html()->label(__('Inventorys'))->class('col-md-2 form-control-label')->for('inventory') }}
            <div class="col-md-10">
                @if  ( isset($inventory)&&$inventory->count())
                    @foreach($inventory as $temp)
                       {{$temp->count }},
                    @endforeach
                @endif
            </div><!--col-->
        </div><!--form-group-->
        


    </div><!--col-->
</div><!--row-->