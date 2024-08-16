<table class="table text-center table-bordered" style="font-size: 12px;">
    <thead>
    <tr class="align-items-center">
        <th>#</th>
        <th>Talaba</th>
        <th>Telefon raqami</th>
        <th>Manzili</th>
        <th>Balans</th>
        <th>Ro'yhatdan o'tgan vaqti</th>
    </tr>
    </thead>
    <tbody>
    @forelse($users as $user)
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td style="text-align:left;">
                <a href="{{ route('meneger.all_show', $user->id ) }}"><b>{{ $user->name }}</b></a>
            </td>
            <td>{{ $user->phone1 }}</td>
            <td>{{ $user->addres }}</td>
            <td>{{ $user->balans }}</td>
            <td>{{ $user->created_at }}</td>
        </tr>
    @empty
        <tr>
            <td class="text-center" colspan=6>Talabalar mavjud emas.</td>
        </tr>
    @endforelse
    </tbody>
</table>

<div class="d-flex justify-content-center">
    <ul class="pagination">
        @if ($users->onFirstPage())
            <li class="page-item disabled">
                <a class="page-link mx-1" style="padding: 10px 10px " href="#" tabindex="-1" aria-disabled="true"><i class="bi bi-caret-left"></i></a>
            </li>
        @else
            <li class="page-item">
                <a class="page-link mx-1" style="padding: 10px 10px " href="{{ $users->previousPageUrl() }}"><i class="bi bi-caret-left"></i></a>
            </li>
        @endif
        @if($users->currentPage() > 3)
            <li class="page-item">
                <a class="page-link mx-1" href="{{ $users->url(1) }}">1</a>
            </li>
            <li class="page-item disabled">
                <span class="page-link mx-1">...</span>
            </li>
        @endif

        @foreach(range(1, $users->lastPage()) as $i)
            @if ($i >= $users->currentPage() - 2 && $i <= $users->currentPage() + 2)
                @if ($i == $users->currentPage())
                    <li class="page-item active" aria-current="page">
                        <a class="page-link mx-1" href="#">{{ $i }}</a>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link mx-1" href="{{ $users->url($i) }}">{{ $i }}</a>
                    </li>
                @endif
            @endif
        @endforeach

        @if($users->currentPage() < $users->lastPage() - 2)
            <li class="page-item disabled">
                <span class="page-link mx-1">...</span>
            </li>
            <li class="page-item">
                <a class="page-link mx-1" href="{{ $users->url($users->lastPage()) }}">{{ $users->lastPage() }}</a>
            </li>
        @endif

        @if ($users->hasMorePages())
            <li class="page-item">
                <a class="page-link mx-1" style="padding:10px;" href="{{ $users->nextPageUrl() }}"><i class="bi bi-caret-right"></i></a>
            </li>
        @else
            <li class="page-item disabled">
                <a class="page-link mx-1" href="#"  style="padding:10px;" tabindex="-1" aria-disabled="true"><i class="bi bi-caret-right"></i></a>
            </li>
        @endif
    </ul>
</div>