<div class="dashboard-list py-lg-5 px-lg-3 d-lg-block d-none">
    <div class="d-user-avater text-center mb-4">
        @if (Auth::user()->avatar_original != null)
            {{-- <div class="img-fluid avater" style="background-image:url('{{ asset(Auth::user()->avatar_original) }}')"></div> --}}
            <img src="{{ asset(Auth::user()->avatar_original) }}" class="img-fluid pic-1">
        @else
            <img src="https://infosecmonkey.com/wp-content/themes/InfoSecMonkey/assets/img/No_Image.jpg" class="img-fluid pic-1">
        @endif

        <h5>{{ Auth::user()->name }}</h5>
        <label for="file-input" style="color:#45b46f">
            <i class="fa fa-pencil" aria-hidden="true"></i>
            <input class="mr-1" type="file" name="photo" style="display: none;" id="file-input"></input> Upload Image
        </label>
        
    </div>
    <ul class="sidebar">
        <li class="active mb-3 p-2">
            <a href="{{ route('profile') }}"><span class="mr-2"><i class="fa fa-user"
                        aria-hidden="true"></i></span>Profile</a>
        </li>
        {{-- <li class="mb-3 p-2">
            <a href="dashboard-order-status.html"><span class="mr-2"><i class="fa fa-sort"
                        aria-hidden="true"></i></span>Order Status</a>
        </li> --}}
        <li class="mb-3 p-2">
            <a href="/cart"><span class="mr-2"><i class="fa fa-shopping-bag"
                        aria-hidden="true"></i></span>{{__('My Cart')}}</a>
        </li>
        <li class="mb-3 p-2">
            <a href="{{ route('wishlists.index') }}"><span class="mr-2"><i class="fa fa-heart"
                        aria-hidden="true"></i></span>{{__('Wishlist')}}</a>
        </li>
        <li class="mb-3 p-2">
            <a href="{{route('changePassword')}}"><span class="mr-2"><i class="fa fa-lock"
                        aria-hidden="true"></i></span>{{__('Change Password')}}</a>
        </li>
        <li class="mb-3 p-2">
            <a href="/logout"><span class="mr-2"><i class="fa fa-sign-out"
                        aria-hidden="true"></i></span>{{__('Logout')}}</a>
        </li>
    </ul>
</div>