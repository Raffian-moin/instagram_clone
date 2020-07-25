@extends('layouts.app')

@section('content')
<div class="container col-8 offset-2">
          <form method="POST" action="{{ route('post.store') }}">
            @csrf

                        <div class="form-group row">
                            <label for="caption"class="col-form-label">{{ __('caption') }}</label>

                                <input id="caption" name="caption" type="text" class="form-control @error('caption') is-invalid @enderror" caption="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                       <div class="form-group row">
                            <label for="exampleFormControlFile1">image</label>
                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                            @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                       </div>
                        <div class="row mt-3">
                           <button type="submit" class="btn btn-primary">Submit</button> 
                        </div>
                       

            </form>  
    </div>

</div>
@endsection
