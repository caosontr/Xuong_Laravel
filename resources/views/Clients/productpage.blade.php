@extends('Clients.master')

@section('main-content')

{{-- Tìm kiếm --}}
<div class="container py-4">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form method="GET" action="{{ route('client.products.search') }}">
        <div class="input-group">
          <input
            type="text"
            name="query"
            class="form-control"
            placeholder="Search for products..."
            aria-label="Search"
            value="{{ request()->query('query') }}"
          />
          <button class="btn btn-outline-secondary" type="submit" id="search-addon">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- End Tìm kiếm --}}

<!-- Full sản phẩm -->
<section id="best-sellers" class="py-5">
  <div class="container">
    <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
      <h4 class="text-uppercase">Tất Cả Sản Phẩm</h4>
    </div>
    
    <div class="row row-cols-1 row-cols-md-4 g-4">
      @foreach ($allProduct as $pro)
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="images/{{$pro->image}}" class="card-img-top" alt="product image" style="max-height: 300px; object-fit: cover;">
          <div class="card-body text-center">
            <h5 class="card-title text-uppercase text-truncate">{{ $pro->name }}</h5>
            <p class="card-text text-danger">{{ number_format($pro->price) }} VNĐ</p>
            <a href="{{ route('client.product.show', $pro->id) }}" class="btn btn-outline-danger">View Details</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <!-- Phân trang -->
    <div class="pagination justify-content-center mt-4">
      {{ $allProduct->links('pagination::bootstrap-5') }}
    </div>
  </div>
</section>

@endsection
