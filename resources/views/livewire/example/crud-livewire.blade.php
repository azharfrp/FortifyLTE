@section('title', 'CRUD Livewire')
@if($isOpen)
<div class="card">
    <div class="card-header">
        <button wire:click="closeModal()" class="btn btn-secondary"><i class="fas fa-angle-left pr-1"></i> Back</button>
    </div>
    <form method="POST" wire:submit.prevent="store()">
        <div class="card-body">
            <div class="form-row">
                
                <!-- Select -->
                <div class="form-group col-12">
                    <label for="crud_example_base_id">Select</label>
                    <select wire:model="crud_example_base_id" class="form-control @error('crud_example_base_id') is-invalid @enderror" required="required">
                        <option value="" selected="selected">- Select -</option>
                        @foreach($bases AS $base)
                        <option value="{{ $base->crud_example_base_id }}">{{ $base->crud_example_base_name }}</option>
                        @endforeach
                    </select>
                    @error('crud_example_base_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <!-- Photo -->
                <div class="form-group col-12">
                    <label for="crud_example_try_photo">Photo</label>
                    <input type="file" wire:model="crud_example_try_photo" id="crud_example_try_photo" class="form-control @error('crud_example_try_photo') is-invalid @enderror">
                    @error('crud_example_try_photo') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <!-- String -->
                <div class="form-group col-12">
                    <label for="crud_example_try_string">String</label>
                    <input type="text" wire:model="crud_example_try_string" id="crud_example_try_string" class="form-control @error('crud_example_try_string') is-invalid @enderror">
                    @error('crud_example_try_string') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <!-- Number -->
                <div class="form-group col-12">
                    <label for="crud_example_try_number">Number</label>
                    <input type="text" wire:model="crud_example_try_number" id="crud_example_try_number" class="form-control @error('crud_example_try_number') is-invalid @enderror">
                    @error('crud_example_try_number') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <!-- Textarea -->
                <div class="form-group col-12">
                    <label for="crud_example_try_textarea">Textarea</label>
                    <textarea wire:model="crud_example_try_textarea" id="crud_example_try_textarea" class="form-control @error('crud_example_try_textarea') is-invalid @enderror"></textarea>
                    @error('crud_example_try_textarea') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

            </div>
        </div>
        <div class="card-footer text-right">
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="button" wire:click.prevent="store()" class="btn btn-success">Save</button>
        </div>
    </form>
</div>
@else
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-6">
                <button wire:click="create()" class="btn btn-dark"><i class="fas fa-plus pr-1"></i> Add New</button>
            </div>
            <div class="col-6">
                <input type="text" wire:model="searchTerm" placeholder="Search Something..." class="form-control">
            </div>
        </div>
    </div>
    <div class="card-body">
        @if( $lists->count() < $this->paginatedPerPages )
            <p>Try your first CRUD now!</p>
        @else
            <p>Now you have more data to work arround. Try to find data from 'Base', 'String' or 'Textarea' column using Search Bar, right above ^^</p>
        @endif
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead class="text-center">
                    <tr>
                        <th width="5%">No</th>
                        <th class="text-left">Base</th>
                        <th class="text-left">String</th>
                        <th>Number</th>
                        <th>Textarea</th>
                        <th width="10%" colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach($lists as $list)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="text-left">{{ $list->tryBelongsTo->crud_example_base_name }}</td>
                        <td class="text-left">{{ $list->crud_example_try_string }}</td>
                        <td>{{ number_format( $list->crud_example_try_number ) }}</td>
                        <td class="text-left">{{ $list->crud_example_try_textarea }}</td>
                        <td>
                            <button wire:click="edit({{ $list->crud_example_try_id }})" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button>
                        </td>
                        <td>
                            <button wire:click="delete({{ $list->crud_example_try_id }})" class="btn btn-sm btn-danger" onclick="confirm('Are you sure to delete?') || event.stopImmediatePropagation()"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if($lists->hasPages())
            {{ $lists->links() }}
        @endif
    </div>
</div>
@endif