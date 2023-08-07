@extends('layouts.master')

@push('css')
    @livewireStyles
@endpush

@section('content')
    <div class="container p-3">
        <div class="row">
            <div class="col-md-6">
                @livewire('ticket-form')

            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
@endsection

@push('script')
    @livewireScripts
@endpush
