@extends('frontend.layouts.app')

@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumb-wrapper" class="position-relative">
    <div class="image">

        <?php $bredcrum_image = \App\Bredcrum::where('page', 'conversation')->where('published', 1)->first(); ?>
        @include('frontend.inc.bredcrum_conditions');
    </div>
    <div class="overlay position-absolute">
        <a class="title p-4" href="/dashboard">{{Auth::user()->name}} > {{__('Conversations')}}</a>
    </div>
</section>
<!-- Breadcrumbs Ends -->

    <section class="gry-bg py-4 profile">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-3 d-none d-lg-block">
                    @if(Auth::user()->user_type == 'seller')
                        @include('frontend.inc.seller_side_nav')
                    @elseif(Auth::user()->user_type == 'customer')
                        @include('frontend.inc.customer_side_nav')
                    @endif
                </div>

                <div class="col-lg-9">
                        <div class="card no-border mt-4 p-3">
                            <div class="py-4">
                                @foreach ($conversations as $key => $conversation)
                                    <div class="block block-comment border-bottom">
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="rsImage">
                                                    {{-- <div class="block-image"> --}}
                                                    @if (Auth::user()->id == $conversation->sender_id)
                                                        <img @if ($conversation->receiver->avatar_original == null) src="{{ asset('frontend/images/user.png') }}" @else src="{{ asset($conversation->receiver->avatar_original) }}" @endif >
                                                        {{-- class="rounded-circle" --}}
                                                    @else
                                                        <img @if ($conversation->sender->avatar_original == null) src="{{ asset('frontend/images/user.png') }}" @else src="{{ asset($conversation->sender->avatar_original) }}" @endif >
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <p>
                                                    @if (Auth::user()->id == $conversation->sender_id)
                                                        <a href="javascript:;">{{ $conversation->receiver->name }}</a>
                                                    @else
                                                        <a href="javascript:;">{{ $conversation->sender->name }}</a>
                                                    @endif
                                                    <br>
                                                    <span class="comment-date">
                                                        {{ date('h:i:m d-m-Y', strtotime($conversation->messages->last()->created_at)) }}
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="col-9">
                                                <div class="block-body">
                                                    <div class="block-body-inner pb-3">
                                                        <div class="row no-gutters">
                                                            <div class="col">
                                                                <h4 class="heading heading-6">
                                                                    <a href="{{ route('conversations.show', encrypt($conversation->id)) }}">
                                                                        {{ $conversation->title }}
                                                                    </a>
                                                                    @if ((Auth::user()->id == $conversation->sender_id && $conversation->sender_viewed == 0) || (Auth::user()->id == $conversation->receiver_id && $conversation->receiver_viewed == 0))
                                                                        <span class="badge badge-pill badge-danger">{{ __('New') }}</span>
                                                                    @endif
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <p class="comment-text mt-0">
                                                            {{ $conversation->messages->last()->message }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="pagination-wrapper py-4">
                            <ul class="pagination justify-content-end">
                                {{ $conversations->links() }}
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection

<style>
    .rsImage img{
        border-radius: 25px; 
  width: 60px;
  height: 60px;
    }
</style>