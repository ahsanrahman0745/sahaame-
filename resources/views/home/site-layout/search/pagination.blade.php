<div class="page-pagintation-div">
    <div class="page-pagintation-div-outer">
        <div class="page-pagintation-div-inner">
            <div class="pagination-button goto-page prev" data-page='1'>
                <span class="background-orange">Previous</span>
            </div>
            <div class="pagination-navigation">
                <ul class="pagination-navigation-ul pagination-ul" data-currentpage='1'>
                    <?php
                        $total_pages = $show_pagiation['pages'];
                        $limit_pages = $show_pagiation['pages'];
                        if ($total_pages > 5){
                            $limit_pages = 5;
                        }
                    ?>
                    @for($i=1; $i <= $show_pagiation['pages']; $i++)
                        <?php
                            $class_active = 'background-gray';
                            $hide_class = '';
                            if ($i == 1) { $class_active = 'background-orange active'; }
                            if ($i > $limit_pages) { $hide_class = 'hide-this'; }
                        ?>
                        @if($i == 1)
                        <li class="pagination-navigation-li goto-page goto-li"  data-page='{{$i}}'><span class="background-gray">{{$i}}</span></li>
                        <li class="pagination-navigation-li goto-seprater-start"><span class="background-gray">...</span></li>
                        @elseif($i == $show_pagiation['pages'])
                            <li class="pagination-navigation-li goto-seprater-end"><span class="background-gray">...</span></li>
                            <li class="pagination-navigation-li goto-page goto-li"  data-page='{{$i}}'><span class="background-gray">{{$i}}</span></li>
                        @else
                            <li class="pagination-navigation-li goto-page goto-li moving-nav {{$hide_class}}" data-page='{{$i}}'><span class="{{$class_active}}">{{$i}}</span></li>
                        @endif
                    @endfor
                </ul>
            </div>
            <div class="pagination-button goto-page next" data-page='2'>
                <span class="background-orange">Next</span>
            </div>
        </div>
    </div>
</div>