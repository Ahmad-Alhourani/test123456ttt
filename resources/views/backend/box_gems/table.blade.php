<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.box_gems.table.gem_id') }}</th>
                <th>{{ __('labels.backend.box_gems.table.box_id') }}</th>
                <th>{{ __('labels.backend.box_gems.table.count') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($box_gems as $box_gem)
        <tr>
             
                <td>{{  $box_gem->gem_id }}</td>  
                <td>{{  $box_gem->box_id }}</td>  
                <td>{{  $box_gem->count }}</td>  
                

               <td>{!! $box_gem->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>