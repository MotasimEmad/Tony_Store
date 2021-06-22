@extends('layouts.index1')
@section('content')

          
            <div class="row">
            <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-primary">add proudact</h4>
                    <form class="form-sample" action ="/prodaucts/store"  enctype="multipart/form-data" method='POST'>
      
                    @csrf
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">product Name</label>
                            <div class="col-sm-9">
                              <input type="text" name="name" placeholder="product name" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">quntity</label>
                            <div class="col-sm-9">
                              <input type="text" name="quntity" placeholder="quntity" class="form-control" />
                            </div>
                          </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">prand</label>
                            <div class="col-sm-9">
                              <input type="text"name="prand"  placeholder="prand" class="form-control" />
                            </div>
                          </div>
                        </div>
                     
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">weight</label>
                            <div class="col-sm-9">
                            <input type="text" name="weight"  placeholder="prand" class="form-control" />
                            </div>
                          </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">price</label>
                            <div class="col-sm-9">
                              <input class="form-control"  name ="price" placeholder="$" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">descrption</label>
                            <div class="col-sm-9">
                            <textarea class="form-control" id="descrption" name="descrption" placeholder="des"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">available size</label>
                            <div class="col-sm-9">
                              <input class="form-control"  name ="available_size"placeholder="available size" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">available coler</label>
                            <div class="col-sm-9">
                              <input class="form-control"  name ="available_coler"placeholder=" available coler" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-9">
                              <select  name="category_id" class="form-control">
                              @foreach($categores as $category)
                    
                           <option value="{{$category->id}}">{{$category->name}}</option>
        
                        @endforeach
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">File upload</label>
                        <div class="col-sm-9">
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control n file-upload-info"name="image" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      </div>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                      </div>
                     
                    
                    </form>
                  </div>
                </div>
              </div>
              
    
              </div>
              

@endsection









