<ul class="rating-star">
    @for($start_star = 1; $start_star <= floor($average_rating); $start_star ++)
        <li>
            <i class='bx bxs-star'></i>
        </li>
    @endfor
    @if($average_rating - floor($average_rating) > 0)
        <li>
            <i class='bx bxs-star-half'></i>
        </li>
        @for($start_star = 1; $start_star <= (5 - (floor($average_rating) + 1)); $start_star ++)
            <li>
                <i class='bx bx-star'></i>
            </li>
        @endfor
    @else
        @for($start_star = 1; $start_star <= 5 - floor($average_rating); $start_star ++)
            <li>
                <i class='bx bx-star'></i>
            </li>
        @endfor
    @endif
</ul>
