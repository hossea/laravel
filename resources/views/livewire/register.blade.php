<div class="card offset-3 col-6">
    <div class="card-header">
      Register
    </div>
    <div class="card-body">
        <form wire:submit="storeUser">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input wire:model="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
              @error('name') <span class="text-danger">{{ $message }}</span> @enderror
              
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Email address</label>
                <input wire:model="email" type="email" class="form-control" id="Email" aria-describedby="emailHelp">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                
              </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input wire:model="password" type="password" class="form-control" id="exampleInputPassword1">
              @error('password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <button  type="submit" class="btn btn-primary">Submit</button>
            
          </form>
          
    </div>
    <div class="mb-3">
        Already Have Account? <button href="/login" wire:navigate class="btn btn-success">Login</button>
      </div>
  </div>