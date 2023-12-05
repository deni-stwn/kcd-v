@props(['label' => '', 'link' => '', 'icon' => '', 'active' => false, 'subMenuItems' => []])
@php
    $isActive = $active ? 'active' : '';
@endphp
<li class="nav-item {{ $isActive }}">
    <a href="{{ $link }}" class="nav-link">
        <i class="{{ $icon }}"></i>
        <p style="padding-right: 0.3125rem;">{{ $label }}</p>
    </a>
    @if (count($subMenuItems) > 0)
        <ul class="submenu pl-5 <?php echo $active ? 'd-block' : 'd-none'; ?>" style="list-style: none">
            @foreach ($subMenuItems as $subMenuItem)
                <li>
                    <i class="{{ $subMenuItem['icon'] }}"></i>
                    <a class="" href="{{ $subMenuItem['linking'] }}">{{ $subMenuItem['text'] }}</a>
                </li>
            @endforeach
        </ul>
    @endif
</li>
