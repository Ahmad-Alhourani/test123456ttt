<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.inventory.table.player_id') }}</th>
                <th>{{ __('labels.backend.inventory.table.inventoryable_id') }}</th>
                <th>{{ __('labels.backend.inventory.table.inventoryable_type') }}</th>
                <th>{{ __('labels.backend.inventory.table.count') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($inventory as $inventory)
        <tr>
             
                <td>{{  $inventory->player_id }}</td>  
                <td>{{  $inventory->inventoryable_id }}</td>  
                <td>{{  $inventory->inventoryable_type }}</td>  
                <td>{{  $inventory->count }}</td>  
                

               <td>{!! $inventory->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>