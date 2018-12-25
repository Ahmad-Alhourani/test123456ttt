@extends ('backend.layouts.app')

@section ('title', __('labels.backend.box_items.management') . ' | ' . __('labels.backend.box_items.edit'))

@section('breadcrumb-links')
@include('backend.box_items.includes.breadcrumb-links')
@endsection
@section('content')
    {{ html()->modelForm($box_item, 'PATCH', route('admin.box_item.update', $box_item->id))->acceptsFiles()->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.box_items.management') }}
                        <small class="text-muted">{{ __('labels.backend.box_items.edit') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr />

            @include('backend.box_items.fields')

        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.box_item.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--row-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
  {{ html()->closeModelForm() }}
@endsection