@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1 mt-5" >
                <div class="card">
                    <div class="card-header">
                        Insert a New Discount
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.discount.store') }}" method="post">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="" class="form-label">Discount Name</label>
                                <input name="name" type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{old('name')}}" required />
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{$errors->first('name')}}</p>
                                @endif
                            </div>

                            <div class="form-group mb-4">
                                <label for="" class="form-label">Code</label>
                                <input name="code" type="text" class="form-control {{$errors->has('code') ? 'is-invalid' : ''}}" value="{{old('code')}}" required/>
                                @if ($errors->has('code'))
                                    <p class="text-danger">{{$errors->first('code')}}</p>
                                @endif
                            </div>

                            <div class="form-group mb-4">
                                <label for="" class="form-label">Descriptipn</label>
                                <textarea name="description" cols="0" rows="2" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}" value="{{old('description')}}"></textarea>
                                @if ($errors->has('description'))
                                    <p class="text-danger">{{$errors->first('description')}}</p>
                                @endif
                            </div>

                            <div class="form-group mb-4">
                                <label for="" class="form-label">Discount Percentage</label>
                                <input name="percentage"  type="percentage" class="form-control {{$errors->has('percentage') ? 'is-invalid' : ''}}" value="{{old('percentage')}}" min="1" max="100" required/>
                                @if ($errors->has('percentage'))
                                    <p class="text-danger">{{$errors->first('percentage')}}</p>
                                @endif
                            </div>

                            <div class="form-group mb-4">
                                <button type="submit" class="btm btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection