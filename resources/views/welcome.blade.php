@extends('layouts.main')
@section('content')
<div class="row justify-content-center align-items-center mt-5">
    <div class="col col-md-6">
        <div class="card ">
            <div calss="card-body">
                <div class="card-titel text-center border-bottom p-4"> AI Image Genrator</div>
            </div>
            <form action="">
               <div class="mb-3"> 
                <label for="text" class="foem-label "> isnert a description for the image</label>
                <input type="text" class="form-control mt-3" name="text" id="text" placeholder="Exemple A fox diving into the sea" autofocus></div>
                <div>
                    <label for="text" class="foem-label ">select the size of the image</label> 
                    <select class="form-select" name="size" id="size">
                        <option value="sm">small</option>
                        <option value="md">medium</option>
                        <option value="lg">large</option>
                    </select>
                </div>
                <button class="btn btn-primary mt-4">Generate image</button>
            </form>
        </div>

    </div>
</div>
@endsection
