@extends('layouts.backend')

@section('title', __('URLs List'))

@section('content')
<main>
    <div class="w-full md:max-w-md">
        @include('partials/messages')
    </div>

    <div class="content">
        <div class="content-header">
            <p class="text-2xl">{{ __('List of All URLs') }}</p>
            <div class="flex justify-end">
                <a href="{{ route('dboard.allurl.u-guest') }}" title="{{ __('Shortened long links by Guest') }}" class="btn btn-primary">
                    {{ __('By Guest') }}
                </a>
            </div>
        </div>

        @livewire('table.url-list-table')
    </div>
</main>
@endsection
