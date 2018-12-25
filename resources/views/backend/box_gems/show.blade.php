@extends ('backend.layouts.app')

@section ('title', __('labels.backend.box_gems.management') . ' | ' . __('labels.backend.box_gems.view'))

@section('breadcrumb-links')
@include('backend.box_gems.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.box_gems.management') }}
                        <small class="text-muted">{{ __('labels.backend.box_gems.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.box_gems.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.box_gems.content.created_at') }}:</strong> {{ $box_gem->updated_at->timezone(get_user_timezone()) }} ({{ $box_gem->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.box_gems.content.last_updated') }}:</strong> {{ $box_gem->created_at->timezone(get_user_timezone()) }} ({{$box_gem->updated_at->diffForHumans() }})--}}
                        @if ($box_gem->trashed())
                            <strong>{{ __('labels.backend.box_gems.content.deleted_at') }}:</strong> $box_gem->deleted_at->timezone(get_user_timezone())  ($box_gem->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection