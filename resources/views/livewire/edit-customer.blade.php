<div class="card offset-3 col-6">
    <div class="card-header">
      Update Customer
    </div>
    <div class="card-body">
        <form wire:submit="updateCustomer">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input wire:model="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                <div id="emailHelp" class="form-text"></div>
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input wire:model="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('email') <span class="text-danger">{{ $message }}</span> @enderror
              <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone</label>
              <input wire:model="phone" type="number" class="form-control" id="phone">
              @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button wire:navigate href="/customers" class="btn btn-secondary">Back</button>
            <button type="submit" wire:click="updateCustomer" class="btn btn-primary">Submit</button>
          </form>
    </div>
  </div>