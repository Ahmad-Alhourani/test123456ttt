<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.levels.table.name') }}</th>
                <th>{{ __('labels.backend.levels.table.description') }}</th>
                <th>{{ __('labels.backend.levels.table.visible_radius') }}</th>
                <th>{{ __('labels.backend.levels.table.order') }}</th>
                   
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($levels as $level)
        <tr>
             
                <td>{{  $level->name }}</td>  
                <td>{{  $level->description }}</td>  
                <td>{{  $level->visible_radius }}</td>  
                <td>{{  $level->order }}</td>  
                

               <td>{!! $level->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>