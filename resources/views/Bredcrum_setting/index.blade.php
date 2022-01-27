@extends('layouts.app')

@section('content')
<div class="tab-base">
    <!--Nav Tabs-->
    <ul class="nav nav-tabs">
        <li class="active">
            <a data-toggle="tab" href="#demo-lft-tab-2" aria-expanded="true">{{ __('Manage Bredcrum') }}</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="demo-lft-tab-2" class="tab-pane fade active in">

            <div class="row">
                <div class="col-sm-12">
                    <a onclick="add_bredcrum()" class="btn btn-rounded btn-info pull-right">{{__('Add New')}}</a>
                </div>
            </div>

            <br>

            <div class="panel">
                <div class="panel-body">
                    <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{__('Photo')}}</th>
                                <th>{{__('Page')}}</th>
                                <th>{{__('Published')}}</th>
                                <th width="10%">{{__('Options')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(\App\Bredcrum::get() as $key => $banner)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td><img loading="lazy"  class="img-md" src="{{ asset($banner->photo)}}" alt="banner Image"></td>
                                    <td>{{ $banner->page }}</td>
                                    <td><label class="switch">
                                        <input onchange="update_banner_published(this)" value="{{ $banner->id }}" type="checkbox" <?php if($banner->published == 1) echo "checked";?> >
                                        <span class="slider round"></span></label></td>
                                    <td>
                                        <div class="btn-group dropdown">
                                            <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                                {{__('Actions')}} <i class="dropdown-caret"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a onclick="edit_bredcrum({{ $banner->id }})">{{__('Edit')}}</a></li>
                                                <li><a onclick="confirm_modal('{{route('bredcrum.destroy', $banner->id)}}');">{{__('Delete')}}</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div> 

@endsection

@section('script')

<script type="text/javascript">

    function add_bredcrum(){
        $.get('{{ route('bredcrum.create')}}', {}, function(data){
            $('#demo-lft-tab-2').html(data);
        });
    }

    function edit_bredcrum(id){
        var url = '{{ route("bredcrum.edit", "bredcrum_id") }}';
        url = url.replace('bredcrum_id', id);
        $.get(url, {}, function(data){
            $('#demo-lft-tab-2').html(data);
            $('.demo-select2-placeholder').select2();
        });
    }


    function update_banner_published(el){
        if(el.checked){
            var status = 1;
        }
        else{
            var status = 0;
        }
        $.post('{{ route('bredcrum.update_status') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
            if(data == 1){
                showAlert('success', 'Banner status updated successfully');
            }
            else{
                showAlert('danger', 'Maximum 24 banners to be published');
            }
        });
    }



</script>

@endsection
