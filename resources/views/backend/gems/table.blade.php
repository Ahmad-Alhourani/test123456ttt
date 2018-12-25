<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.gems.table.name') }}</th>
                <th>{{ __('labels.backend.gems.table.level_id') }}</th>
                <th>{{ __('labels.backend.gems.table.clickable_radius') }}</th>
                      
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($gems as $gem)
        <tr>
             
                <td>{{  $gem->name }}</td>   
                <td>{{  $gem->level_id }}</td>  
                <td>{{  $gem->clickable_radius }}</td>  
                

               <td>{!! $gem->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>