@extends('layouts.app')

@section('content')

<div class="col-sm-12">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Edit FAQ')}}</h3>
        </div>
        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('pages.faqupdate', $flash_deal->id) }}" method="POST">
            @csrf
             {{-- <input type="hidden" name="_method" value="PATCH"> --}}
             <div class="panel-body">
                 <div class="form-group">
                     <label class="col-sm-3 control-label" for="question">{{__('Question')}}</label>
                     <div class="col-sm-9">
                         <input type="text" id="question" name="question" value="{{ $flash_deal->question}}" class="form-control" required>
                     </div>
                 </div>
                 <div class="form-group">
                     <label class="col-sm-3 control-label" for="answer">{{__('Answer')}}</label>
                     <div class="col-sm-9">
                         <input type="text" id="answer" name="answer" value="{{ $flash_deal->answer }}" class="form-control" required>
                     </div>
                 </div>
                 <div class="form-group">
                    <label class="col-sm-3 control-label" for="position">{{__('Position')}}</label>
                    <div class="col-sm-9">
                        <input type="number" id="position" name="position" value="{{ $flash_deal->position }}" class="form-control" required>
                    </div>
                </div>
                 <div class="form-group">
                     <label class="col-lg-3 control-label" for="name">{{__('Status')}}</label>
                     <div class="col-lg-9">
                         <select name="status" id="text_color" class="form-control demo-select2" required>
                             <option value=1  @if ($flash_deal->status == '1') selected @endif>{{__('Active')}}</option>
                             <option value=0 @if ($flash_deal->status == '0') selected @endif>{{__('Inactive')}}</option>
                         </select>
                     </div>
                 </div>

             </div>
             <div class="panel-footer text-right">
                 <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
             </div>
         </form>
        <!--===================================================-->
        <!--End Horizontal Form-->

    </div>
</div>

@endsection

@section('script')

@endsection
