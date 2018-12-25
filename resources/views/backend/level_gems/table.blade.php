<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.level_gems.table.gem_id') }}</th>
                <th>{{ __('labels.backend.level_gems.table.level_id') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($level_gems as $level_gem)
        <tr>
             
                <td>{{  $level_gem->gem_id }}</td>  
                <td>{{  $level_gem->level_id }}</td>   
                

               <td>{!! $level_gem->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>