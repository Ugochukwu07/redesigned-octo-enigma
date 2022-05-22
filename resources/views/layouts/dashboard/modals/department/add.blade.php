

<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-form">Add Department</button>
    <div class="modal fade text-left" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
               <div class="modal-body p-0">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-header bg-transparent pb-5">
                            <div class="text-muted text-center mt-2 mb-3"><small>Add Department</small></div>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <form action="{{ route('dashboard.department.add.save') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input class="form-control" placeholder="Department Name" type="text" value="{{ old('name') }}" name="name">
                                    @error('name')
                                        <span class="text-danger bg-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group mb-3">
                                    <textarea class="form-control" id="elm1" cols="30" rows="10" placeholder="Department Description"name="description">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="text-danger bg-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label>
                                        <input type="checkbox" @if(old('status') == 'on') checked @endif name="status" aria-label="Checkbox for following text input"> Status
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">Add Department</button>
                                </div>
                            </form>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
