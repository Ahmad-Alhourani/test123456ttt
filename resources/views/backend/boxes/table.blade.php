<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.boxes.table.name') }}</th>
                <th>{{ __('labels.backend.boxes.table.description') }}</th>
                <th>{{ __('labels.backend.boxes.table.clickable_radius') }}</th>
                <th>{{ __('labels.backend.boxes.table.level_id') }}</th>
                         
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($boxes as $box)
        <tr>
             
                <td>{{  $box->name }}</td>  
                <td>{{  $box->description }}</td>  
                <td>{{  $box->clickable_radius }}</td>  
                <td>{{  $box->level_id }}</td>  
                

               <td>{!! $box->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>