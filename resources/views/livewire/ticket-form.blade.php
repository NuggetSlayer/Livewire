<div>
    {{-- Wire Model --}}

    {{-- <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name Is {{ $name }} :</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" name="name" wire:model="name">
    </div> --}}

    {{-- Create Data --}}
    <div class="container">
        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <form wire:submit.prevent="submit">
            @error('name')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name :</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" wire:model="name">
            </div>

            @error('price')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Price :</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="price"
                    wire:model="price">
            </div>
            <button type="submit" class="btn btn-primary">Save Contact</button>

        </form>
    </div>
</div>
