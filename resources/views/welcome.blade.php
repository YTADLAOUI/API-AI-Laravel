@extends('layouts.main')
@section('content')
<div class="row justify-content-center align-items-center mt-5">
    <div class="col col-md-6">
        <div class="card ">
            <div calss="card-body">
                <div class="card-titel text-center border-bottom p-4"> AI Image Genrator</div>
            </div>
            <form class="p-2" action="{{route('images.generate')}}" method="POST" novalidate>
            @csrf
               <div class="mb-3"> 
                <label for="description" class="foem-label"> isnert a description for the image</label>
                <input type="text" class="form-control  @error("description") is-invalid @enderror mt-3" name="description" id="description" placeholder="Exemple A fox diving into the sea" autofocus  maxlength="1000" value="{{old('description')}}">
                @error("description")
                <div  
                class="invalid-feedback">
                   {{$message}}
                  </div>
                  @enderror
            </div>
                <div class="mb-3">
                    <label for="text" class="foem-label ">select the size of the image</label> 
                    <select class="form-select  @error("size") is-invalid @enderror" name="size" id="size" >
                        <option value="sm" @if (old('size')==='sm') selected
                        @endif>small</option>
                        <option value="md" @if (old('size')==='md')
                            selected
                        @endif>medium</option>
                        <option value="lg" @if (old('size')==='lg')
                            selected
                        @endif>large</option>
                    </select>
                    @error("size")
                <div  
                class="invalid-feedback">
                   {{$message}}
                  </div>
                  @enderror
                </div>
                <button class="btn btn-primary w-100">Generate image</button>
            </form>
        </div>
    </div>
</div>
@endsection
