@extends('layouts.app')
@section('content')
<div class="col-sm-12">
   <div class="panel">
      <div class="panel-heading">
         <h3 class="panel-title">{{__('Add New Information')}}</h3>
      </div>
      <!--Horizontal Form-->
      <!--===================================================-->
      <form class="form-horizontal" action="{{ route('pages.faqstore') }}" method="POST">
         @csrf
         <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="name">{{__('Questions')}}</label>
                <div class="col-sm-9">
                   <input type="text" placeholder="{{__('Question')}}" id="question" name="question" class="form-control" required>
                </div>
             </div>
            <div class="form-group">
               <label class="col-sm-3 control-label" for="name">{{__('Answer')}}</label>
               <div class="col-sm-9">
                  <input type="text" placeholder="{{__('Answer')}}" id="answer" name="answer" class="form-control" required>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-3 control-label" for="background_color">{{__('Position')}} </label>
               <div class="col-sm-9">
                  <input type="number" id="position" name="position" class="form-control" required>
                  {{-- <input type="text" placeholder="{{__('about')}}" id="about" name="about" class="form-control" required> --}}
               </div>
            </div>

            <div class="form-group">
                <label class="col-lg-3 control-label" for="name">{{__('Status')}}</label>
                <div class="col-lg-9">
                   <select name="status" id="status" class="form-control demo-select2" required>
                      <option value="">Select One</option>
                      <option value="0">{{__('InActive')}}</option>
                      <option value="1">{{__('Active')}}</option>
                   </select>
                </div>
             </div>
            <br>
            <div class="form-group" id="discount_table">
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

