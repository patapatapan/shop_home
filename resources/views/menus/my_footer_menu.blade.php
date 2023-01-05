@foreach($items as $item)
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">    
    <div class="single-footer-caption mb-50">
        <div class="footer-tittle">
            <h4>{{ $item->title }}</h4>
            @foreach($item->children as $subitem)
            <ul>
                <li><a href="{{ url( $subitem->link()) }}">{{ $subitem->title }}</a></li>
            </ul>
            @endforeach
        </div>
    </div>
</div>
@endforeach