@extends ('backend.layouts.app')

@section ('title', __('labels.backend.levels.management') . ' | ' . __('labels.backend.levels.view'))

@section('breadcrumb-links')
@include('backend.levels.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.levels.management') }}
                        <small class="text-muted">{{ __('labels.backend.levels.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.levels.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.levels.content.created_at') }}:</strong> {{ $level->updated_at->timezone(get_user_timezone()) }} ({{ $level->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.levels.content.last_updated') }}:</strong> {{ $level->created_at->timezone(get_user_timezone()) }} ({{$level->updated_at->diffForHumans() }})--}}
                        @if ($level->trashed())
                            <strong>{{ __('labels.backend.levels.content.deleted_at') }}:</strong> $level->deleted_at->timezone(get_user_timezone())  ($level->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection