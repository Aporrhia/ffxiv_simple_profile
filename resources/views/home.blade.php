@extends('layouts.app')

@section('content')
    <div id="fullpage">
        <div class="section">
            <div class="flex justify-center mb-5">
                @include('partials.title')
            </div>
        </div>
        <div class="section">
            <div class="flex justify-center mb-5">
                @include('partials.char_info')
            </div>
        </div>
        <div class="section">
            <div class="flex justify-center">
                @include('partials.trials')
            </div>
        </div>
        <div class="section">
            <div class="flex justify-center">
                @include('partials.jobs')
            </div>
        </div>
    </div>
    
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        new fullpage('#fullpage', {
            autoScrolling: true,
            scrollHorizontally: true,
            navigation: true,
            navigationPosition: 'right',
            navigationTooltips: ['Home', 'Character Info', 'Trials', 'Jobs'],
            showActiveTooltip: true,
        });
    });
</script>