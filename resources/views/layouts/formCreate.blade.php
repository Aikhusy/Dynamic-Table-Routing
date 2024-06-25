@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-body">
        <div class="border p-3 rounded">
            <h6 class="mb-0 text-uppercase">@yield('formTitle')</h6>
            <hr>
            <form class="row g-3" action="@yield('dynamicRoute')" method="POST">
                @csrf

                @foreach ($inputs as $type => $name)
                    @if ($type == 'text')
                        <div class="col-12">
                            <label class="form-label">{{ $name }}/label>
                                <input type="text" class="form-control" name="{{ $name }}">
                        </div>
                    @endif
                    @if ($type == 'number')
                        <div class="col-12">
                            <label class="form-label">Last Name</label>
                            <input type="number" min="0" class="form-control" name="{{ $name }}">
                        </div>
                    @endif
                @endforeach

                <div class="col-12">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Place Order</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection