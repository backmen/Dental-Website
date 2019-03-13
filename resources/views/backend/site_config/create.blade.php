@extends('backend.layout.master')
@section('content')
    <div class="row">
        <div class="col-8 mx-auto">
            <h3 class="py-2">Add Site Information</h3><hr>
            <form action="{{route('admin.site.config.store')}}" method="post">
                @csrf
             <div class="form-group">
                 <div class="row">
                     <div class="col-2">
                         <label for="address">Address</label>
                     </div>
                     <div class="col-10">
                         <input type="text" name="address" class="form-control {{$errors->has('address') ? 'is-invalid' : ''}} " id="address" placeholder="593/c khilgaon Dhaka-1219">
                         @if ($errors->has('address'))
                             <span class="invalid-feedback">
                                 <b>{{$errors->first('address')}}</b>
                             </span>
                         @endif
                     </div>
                 </div>
             </div>
             <div class="form-group">
                 <div class="row">
                     <div class="col-2">
                         <label for="phone">Phone</label>
                     </div>
                     <div class="col-10">
                         <input type="text" name="phone" class="form-control {{$errors->has('phone') ? 'is-invalid' : ''}}" id="phone" placeholder="+88017712345">
                     @if ($errors->has('phone'))
                         <span class="invalid-feedback">
                             <b>{{$errors->first('phone')}}</b>
                         </span>
                     @endif
                     </div>
                 </div>
             </div>
             <div class="form-group">
                 <div class="row">
                     <div class="col-2">
                         <label for="facebook">Facebook</label>
                     </div>
                     <div class="col-10">
                         <input type="text" name="facebook" class="form-control {{$errors->has('facebook') ? 'is-invalid' : ''}}" id="facebook" placeholder="https://www.facebook.com/profile">
                        @if ($errors->has('facebook'))
                            <span class="invalid-feedback">
                                <b>{{$errors->first('facebook')}}</b>
                            </span>
                        @endif
                     </div>
                 </div>
             </div>
             <div class="form-group">
                 <div class="row">
                     <div class="col-2">
                         <label for="twitter">Twitter</label>
                     </div>
                     <div class="col-10">
                         <input type="text" name="twitter" class="form-control {{$errors->has('twitter') ? 'is-invalid' : ''}}" id="twitter" placeholder="https://twitter.com/example">
                         @if ($errors->has('twitter'))
                             <span class="invalid-feedback">
                                 <b>{{$errors->first('twitter')}}</b>
                             </span>
                         @endif
                     </div>
                 </div>
             </div>
             <div class="form-group">
                 <div class="row">
                     <div class="col-2">
                         <label for="instagram">Instagram</label>
                     </div>
                     <div class="col-10">
                         <input type="text" name="instagram" class="form-control {{$errors->has('instagram') ? 'is-invalid' : ''}}" id="instagram" placeholder="https://www.instagram.com/example/">
                        @if ($errors->has('instagram'))
                            <span class="invalid-feedback" role="alert">
                                <b>{{$errors->first('instagram')}}</b>
                            </span>
                        @endif
                     </div>
                 </div>
             </div>
             <div class="form-group">
                 <div class="row">
                     <div class="col-2">
                         <label for="pinterest">Pinterest</label>
                     </div>
                     <div class="col-10">
                         <input type="text" name="pinterest" class="form-control {{$errors->has('pinterest') ? 'is-invalid' : ''}}" id="pinterest" placeholder="https://www.pinterest.com/profile/example/">
                        @if ($errors->has('pinterest'))
                            <span class="invalid-feedback" role="alert">
                                <b>{{$errors->first('pinterest')}}</b>
                            </span>
                        @endif
                     </div>
                 </div>
             </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
