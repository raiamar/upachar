        @php
            $bredcrum_image_all = \App\Bredcrum::where('page', 'all')->where('published', 1)->first();
        @endphp
        @if ($bredcrum_image)
            <img src="{{asset($bredcrum_image->photo)}}" alt="breadcrumb-image" class="img-fluid">
        @else
            <img src="{{asset($bredcrum_image_all->photo)}}" alt="breadcrumb-image" class="img-fluid"> 
        @endif