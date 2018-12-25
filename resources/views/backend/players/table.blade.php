<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.players.table.name') }}</th>
                <th>{{ __('labels.backend.players.table.token') }}</th>
                <th>{{ __('labels.backend.players.table.level_id') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($players as $player)
        <tr>
             
                <td>{{  $player->name }}</td>  
                <td>{{  $player->token }}</td>   
                <td>{{  $player->level_id }}</td>  
                

               <td>{!! $player->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>