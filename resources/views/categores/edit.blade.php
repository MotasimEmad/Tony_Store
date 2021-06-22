@extends('layouts.index1')
@section('content')
<div class="row">
              
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-primary">update category</h4>
                    
                    <form class="forms-sample" action="/category/update/{{$category->id}}" enctype="multipart/form-data" method='POST'>
                    @csrf
                    {{method_field('PUT')}}
               
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$category->name}}" id="exampleInputName1" placeholder="Name">
                      </div>
                     
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" value="{{$category->image}}"  name="image" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label for="descrption">descrption</label>
                        <textarea class="form-control" id="descrption" value="{{$category->descrption}}" name="descrption" rows="4">{{$category->descrption}}</textarea>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              
            </div>
@endsection