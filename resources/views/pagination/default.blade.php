@if ($paginator->lastPage() > 1)
<style>
    .pagination li.active{
        background: black;
    }
</style>
<ul class="pagination">
    <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
        <a href="{{ $paginator->url(1) }}"><i class="material-icons">chevron_left</i></a>
    </li>
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
            <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
        </li>
    @endfor
    <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
        <a href="{{ $paginator->url($paginator->currentPage()+1) }}" ><i class="material-icons">chevron_right</i></a>
    </li>
</ul>
@endif