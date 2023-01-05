<ul>
    @foreach ($items as $item)                               
        @if ($loop->first)
            <li>
                <div class="nav-search search-switch">
                    <span class="flaticon-{{ $item->title }}"></span>
                </div>
            </li>
        @else
            <li> <a href="{{ url($item->link()) }}"><span class="flaticon-{{ $item->title }}"></span></a></li>
        @endif
    @endforeach    
</ul>
