

<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-form">Add Portfoilo</button>
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
           <div class="modal-body p-0">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-muted text-center mt-2 mb-3"><small>Add Portfoilo</small></div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <form enctype="multipart/form-data" action="{{ route('dashboard.portfolio.add.save') }}" method="POST">
                            @csrf
                            <div class="mb-3 form-group{{ $errors->has('file') ? ' has-danger' : '' }}">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input form-control-alternative{{ $errors->has('file') ? ' is-invalid' : '' }}" name="file" lang="en">
                                    <label class="custom-file-label" for="file" name="file">Select Portfoilo Image</label>
                                @if ($errors->has('file'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" placeholder="Portfoilo Name" type="text" value="{{ old('name') }}" name="name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <input class="form-control" placeholder="Portfoilo Tags" type="text" value="{{ old('tags') }}" name="tags">
                                @error('tags')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group{{ $errors->has('department') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="department">{{ __('Department') }}</label>
                                <select class="form-control form-control-alternative{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" id="department">
                                    <option></option>
                                    @foreach ($departments as $department)
                                        <option @if($department->id == old('department')) selected @endif value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('department'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                @endif
                                <a class="text-underline text-info float-right" href="{{ route('dashboard.department.all') }}">Add new Department</a>
                            </div>
                            
                            <div class="form-group mb-3">
                                <textarea class="form-control" id="elm1" cols="30" rows="10" placeholder="Portfoilo Description"name="description">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">Add Portfoilo</button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
