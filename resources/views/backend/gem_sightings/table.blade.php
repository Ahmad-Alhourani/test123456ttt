<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.gem_sightings.table.gem_id') }}</th>
                <th>{{ __('labels.backend.gem_sightings.table.player_id') }}</th>
                <th>{{ __('labels.backend.gem_sightings.table.founded_at') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($gem_sightings as $gem_sighting)
        <tr>
             
                <td>{{  $gem_sighting->gem_id }}</td>  
                <td>{{  $gem_sighting->player_id }}</td>  
                <td>{{  $gem_sighting->founded_at }}</td>    
                

               <td>{!! $gem_sighting->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>