@extends('layouts.app')

@section('content')
@php
    $story = DB::table('faqs')->get();
@endphp
<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('pages.faqcreate')}}" class="btn btn-rounded btn-info pull-right">{{__('Add New FAQ')}}</a>
    </div>
</div>

<br>


<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading bord-btm clearfix pad-all h-100">
        <h3 class="panel-title pull-left pad-no">{{__('FAQ')}}</h3>
        <div class="pull-right clearfix">
            <form class="" id="sort_flash_deals" action="" method="GET">
                <div class="box-inline pad-rgt pull-left">
                    <div class="" style="min-width: 200px;">
                        <input type="text" class="form-control" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder=" Type name & Enter">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="panel-body">
        <table class="table res-table table-responsive mar-no" cellspacing="0" width="100%">
            <thead>
                <tr>

                    <th>{{__('Question')}}</th>
                    <th>{{ __('Answer') }}</th>
                    <th>{{ __('Position') }}</th>
                    <th>{{ __('Status') }}</th>


                    <th width="10%">{{__('Options')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($story as $key => $flash_deal)
                    <tr>

                        <td>{{$flash_deal->question}}</td>
                        <td>{{$flash_deal->answer}}</td>
                        <td>{{$flash_deal->position}}</td>
                        <td><label class="switch">
                            <input onchange="update_faq_status(this)" value="{{ $flash_deal->id }}" type="checkbox" <?php if($flash_deal->status == 1) echo "checked";?> >
                            <span class="slider round"></span></label></td>


                        <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    {{__('Actions')}} <i class="dropdown-caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{route('pages.faqedit', $flash_deal->id)}}">{{__('Edit')}}</a></li>
                                    <li><a onclick="confirm_modal('{{route('pages.faqdelete', $flash_deal->id)}}');">{{__('Delete')}}</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection


@section('script')
    <script type="text/javascript">
        function update_faq_status(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var type = "POST";
            var ajaxurl = '{{ route('pages.faqupdate_status') }}';
            $.ajax({
                type: type,
                url: ajaxurl,
                data: {
                    "status": status,
                    "cid": el.value,
                },
                dataType: 'json',
                success: function (data) {
                    showAlert('success',data);
                },
                error: function (data) {
                    showAlert('danger',data.responseText);
                }
            });
        }
    </script>
@endsection
