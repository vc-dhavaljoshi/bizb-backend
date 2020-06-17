@if(isset($withHeader) && isset($title))
<div class="block-header block-header-default">
    <h3 class="block-title">
        {{ $title }}
        @isset($subtitle)
        <small> {{ $subtitle }} </small>
        @endisset
    </h3>
    @if(isset($buttonTitle)) 
    	<a href="{{ $link ?? '#' }}" class="btn btn-primary">{{ $buttonTitle ?? 'Add New' }}</a>
    @endif	
</div>

@endif

<div
    class="block-content {{ isset($blockClass) ? $blockClass : '' }}">
    {{ $slot }}
</div>