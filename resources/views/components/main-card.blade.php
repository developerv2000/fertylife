@props(['imageSrc', 'title' => null, 'subtitle' => null, 'linked' => false])

@if ($linked)
    <div {{ $attributes->merge(['class' => 'main-card']) }}>
        <img class="main-card__image" src="{{ asset($imageSrc) }}" alt="icon">

        <div class="main-card__text-wrapper">
            <h2 class="main-card__title main-title">{{ $title }}</h2>
            <p class="main-card__subtitle secondary-title">{{ $subtitle }}</p>
        </div>
    </div>
@else
    <a {{ $attributes->merge(['class' => 'main-card']) }}>
        <img class="main-card__image" src="{{ asset($imageSrc) }}" alt="icon">

        <div class="main-card__text-wrapper">
            <h2 class="main-card__title main-title">{{ $title }}</h2>
            <p class="main-card__subtitle secondary-title">{{ $subtitle }}</p>
        </div>
    </a>
@endif
