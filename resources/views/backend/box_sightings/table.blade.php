<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.box_sightings.table.player_id') }}</th>
                <th>{{ __('labels.backend.box_sightings.table.box_id') }}</th>
                <th>{{ __('labels.backend.box_sightings.table.founded_at') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($box_sightings as $box_sighting)
        <tr>
             
                <td>{{  $box_sighting->player_id }}</td>  
                <td>{{  $box_sighting->box_id }}</td>  
                <td>{{  $box_sighting->founded_at }}</td>    
                

               <td>{!! $box_sighting->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>