@extends('layout.master')
@section('title')
    List Produk
@endsection
@section('content')
    @if (Auth::check() && Auth::user()->role === 'admin')
    <a href="/product/create">
        <button class="mb-2">
            Create
        </button>
    </a>
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @endif
    <div class="container mt-4">
        <div class="row">
            @forelse ($products as $item)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="shop-card mt-5">
                    <div class="shop-image-container">
                        <img src="{{ asset('image/' . $item->image) }}" alt="{{ $item->name }}" class="shop-product-img">
                    </div>
                    
                    <div class="shop-title">
                        <span title="{{ $item->name }}">{{ Str::limit($item->name, 45) }}</span>
                    </div>
                    <span class="badge bg-info text-white">{{$item->category->name}}</span>
                    <span class="badge bg-info text-white">Stock : {{$item->stock}}</span>
                    <div class="shop-size">
                        <span>Deskripsi Singkat</span>
                        <p class="text-muted" style="font-size: 0.7rem; margin-top: 5px;">
                            {{ Str::limit($item->description, 45) }}
                        </p>
                    </div>
                    
                    <div class="shop-action">
                        <div class="shop-price">
                            <span>Rp{{$item->price}}</span>
                        </div>
                        <a href="/product/{{$item->id}}">
                            <button class="shadow__btn">
                                Detail
                            </button>
                        </a>
                    </div>
                    @if (Auth::check() && Auth::user()->role === 'admin')
                    <div class="row">
                        <div class="col">
                            <a href="/product/{{$item->id}}/edit" class="shop-cart-button text-decoration-none btn-edit">
                                <span>Edit</span>
                            </a>
                        </div>
                        <div class="col">
                            <form action="/product/{{$item->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="shop-cart-button text-decoration-none btn-delete">
                            </form>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @empty
            <div class="col-12 text-center mt-5">
                <p>Produk Kosong</p>
            </div>
            @endforelse
        </div>
    </div>
@endsection
@push('myscript')
<style>
    .shop-card {
        --bg-card: #27272a;
        --primary: #6d28d9;
        --primary-800: #4c1d95;
        --primary-shadow: #2e1065;
        --light: #d9d9d9;
        --zinc-800: #18181b;
        --bg-linear: linear-gradient(0deg, var(--primary) 50%, var(--light) 125%);

        position: relative;
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
        padding: 1rem;
        width: 100%;
        max-width: 14rem;
        background-color: var(--bg-card);
        border-radius: 1rem;
        transition: transform 0.3s ease;
        }

        .shop-card:hover {
        transform: translateY(-5px);
        }

        .shop-image-container {
        overflow: hidden;
        position: relative;
        z-index: 5;
        width: 100%;
        height: 8rem;
        background-color: var(--primary-800);
        border-radius: 0.5rem;
        }

        .shop-product-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        }

        .shop-image-placeholder {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 3rem;
        fill: var(--light);
        }

        .shop-title {
        overflow: clip;
        width: 100%;
        font-size: 1rem;
        font-weight: 600;
        color: var(--light);
        text-transform: capitalize;
        white-space: nowrap;
        text-overflow: ellipsis;
        }

        .shop-size {
        font-size: 0.75rem;
        color: var(--light);
        min-height: 50px;
        }

        .shop-action {
        display: flex;
        flex-direction: column; 
        gap: 0.75rem;
        }

        .shop-price {
        font-size: 1.1rem;
        font-weight: 700;
        color: var(--light);
        }

        .shop-cart-button {
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0.25rem;
        padding: 0.5rem;
        width: 100%;
        background-image: var(--bg-linear);
        font-size: 0.75rem;
        font-weight: 500;
        color: var(--light) !important;
        border: 2px solid hsla(262, 83%, 58%, 0.5);
        border-radius: 0.5rem;
        box-shadow: inset 0 0 0.25rem 1px var(--light);
        transition: opacity 0.3s;
        }

        .shop-cart-button:hover {
        opacity: 0.9;
        }

        .shop-cart-icon {
        width: 1rem;
        }

    button {
        position: relative;
        padding: 5px 20px;
        border-radius: 7px;
        border: 1px solid rgb(61, 106, 255);
        font-size: 14px;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 2px;
        color: #000000;
        overflow: hidden;
        box-shadow: 0 0 0 0 transparent;
        -webkit-transition: all 0.2s ease-in;
        -moz-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
    }

    button:hover {
        background: rgb(61, 106, 255);
        color: #ffffff;
        box-shadow: 0 0 30px 5px rgba(0, 142, 236, 0.815);
        -webkit-transition: all 0.2s ease-out;
        -moz-transition: all 0.2s ease-out;
        transition: all 0.2s ease-out;
    }

    button:hover::before {
        -webkit-animation: sh02 0.5s 0s linear;
        -moz-animation: sh02 0.5s 0s linear;
        animation: sh02 0.5s 0s linear;
    }

    button::before {
        content: '';
        display: block;
        width: 0px;
        height: 86%;
        position: absolute;
        top: 7%;
        left: 0%;
        opacity: 0;
        background: rgb(61, 106, 255);
        box-shadow: 0 0 50px 30px #fff;
        -webkit-transform: skewX(-20deg);
        -moz-transform: skewX(-20deg);
        -ms-transform: skewX(-20deg);
        -o-transform: skewX(-20deg);
        transform: skewX(-20deg);
    }

    @keyframes sh02 {
        from {
            opacity: 0;
            left: 0%;
        }

        50% {
            opacity: 1;
        }

        to {
            opacity: 0;
            left: 100%;
        }
    }

    button:active {
        box-shadow: 0 0 0 0 transparent;
        -webkit-transition: box-shadow 0.2s ease-in;
        -moz-transition: box-shadow 0.2s ease-in;
        transition: box-shadow 0.2s ease-in;
    }

    .shadow__btn {
        padding: 3px 20px;
        width: 100%;
        border: none;
        font-size: 14px;
        color: #fff;
        border-radius: 7px;
        letter-spacing: 4px;
        margin-top: 5px;
        font-weight: 700;
        text-transform: uppercase;
        transition: 0.5s;
        transition-property: box-shadow;
        }

        .shadow__btn {
        background: rgb(0,140,255);
        box-shadow: 0 0 25px rgb(0,140,255);
        }

        .shadow__btn:hover {
        box-shadow: 0 0 5px rgb(0,140,255),
                    0 0 25px rgb(0,140,255),
                    0 0 50px rgb(0,140,255),
                    0 0 100px rgb(0,140,255);
        }
</style>
@endpush