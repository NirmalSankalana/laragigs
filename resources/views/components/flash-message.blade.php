@if (session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(()=>show=false, 4000)" x-show="show" class="position-fixed top-0 start-50 translate-middle-x" style="z-index: 1000">
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    </div>
@endif
