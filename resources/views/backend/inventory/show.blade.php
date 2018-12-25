@extends ('backend.layouts.app')

@section ('title', __('labels.backend.inventory.management') . ' | ' . __('labels.backend.inventory.view'))

@section('breadcrumb-links')
@include('backend.inventory.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.inventory.management') }}
                        <small class="text-muted">{{ __('labels.backend.inventory.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.inventory.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.inventory.content.created_at') }}:</strong> {{ $inventory->updated_at->timezone(get_user_timezone()) }} ({{ $inventory->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.inventory.content.last_updated') }}:</strong> {{ $inventory->created_at->timezone(get_user_timezone()) }} ({{$inventory->updated_at->diffForHumans() }})--}}
                        @if ($inventory->trashed())
                            <strong>{{ __('labels.backend.inventory.content.deleted_at') }}:</strong> $inventory->deleted_at->timezone(get_user_timezone())  ($inventory->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection