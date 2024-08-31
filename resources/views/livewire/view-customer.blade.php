<div class="card offset-3 col-6">
    <h5 class="card-header">View Customer</h5>
    <div class="card-body">
      <h5 class="card-title">{{$customer->name}}</h5>
      <p class="card-text">{{$customer->email}}</p>
      <p class="card-text">{{$customer->phone}}</p>
      <a href="/customers" wire:navigate class="btn btn-secondary btn-sm">Back</a>
    </div>
  </div>
