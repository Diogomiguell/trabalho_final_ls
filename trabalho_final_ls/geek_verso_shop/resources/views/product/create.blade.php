@extends('layouts.app')

@section('title', 'GeekVerso - Adicionar Produtos')

@section('content')
    <div class="container mt-5">
        <div class="card text-white">
            <div class="card-header bg-dark">
                <h3 class="card-title mb-0">Adicionar Produtos</h3>
            </div>

            <div class="card-body">
                <p class="mb-4">Olá <strong>{{ Auth::user()->name }}</strong></p>

                <form action="{{ route('produtos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    {{-- Nome do Produto --}}
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Nome do Produto</label>
                        <input type="text" name="product_name" id="product_name"
                            class="form-control bg-dark text-white border-secondary @error('product_name') is-invalid @enderror"
                            value="{{ old('product_name') }}" required autofocus>
                        @error('product_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> 

                    {{-- Descrição do Produto --}}
                    <div class="mb-3">
                        <label for="product_description" class="form-label">Descrição do Produto</label>
                        <textarea name="product_description" id="product_description" maxlength="255" rows="4"
                            class="form-control bg-dark text-white border-secondary @error('product_description') is-invalid @enderror"
                            placeholder="Máximo de 255 caracteres" required>{{ old('product_description') }}</textarea>
                        @error('product_description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Quantidade do Produto --}}
                    <div class="mb-3">
                        <label for="product_quantity" class="form-label">Quantidade do Produto</label>
                        <div class="input-group">
                            <button type="button" class="btn btn-outline-light" onclick="adjust('quantity', -1)">-</button>
                            <input type="number" name="product_quantity" id="quantity"
                                class="form-control text-center bg-dark text-white border-secondary @error('product_quantity') is-invalid @enderror"
                                value="{{ old('product_quantity', 1) }}" min="1" required>
                            <button type="button" class="btn btn-outline-light" onclick="adjust('quantity', 1)">+</button>
                            @error('product_quantity')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Preço do Produto --}}
                    <div class="mb-3">
                        <label for="product_price" class="form-label">Preço do Produto</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white border-secondary">R$</span>
                            <input type="number" name="product_price" id="price"
                                class="form-control text-end bg-dark text-white border-secondary @error('product_price') is-invalid @enderror"
                                value="{{ old('product_price', '0.00') }}" min="0" step="0.01" required>
                            <button type="button" class="btn btn-outline-light" onclick="adjust('price', 1)">+</button>
                            @error('product_price')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Nota de Avaliação do Produto --}}
                    <div class="mb-3">
                        <label class="form-label">Avaliação do Produto: <span
                                id="rating_value">{{ old('product_rating', 2.5) }}</span></label>
                        <input type="range" class="form-range @error('product_rating') is-invalid @enderror"
                            min="0" max="5" step="0.1" name="product_rating" id="product_rating"
                            value="{{ old('product_rating', 2.5) }}"
                            oninput="document.getElementById('rating_value').textContent = this.value" required>
                        @error('product_rating')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Imagem do Produto --}}
                    <div class="mb-3">
                        <label for="product_file_name" class="form-label">Imagem do Produto</label>
                        <input type="file" name="product_file_name" id="product_file_name"
                            class="form-control bg-dark text-white border-secondary @error('product_file_name') is-invalid @enderror"
                            required>
                        @error('product_file_name')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 text-end">
                        <button type="reset" class="btn btn-danger">Limpar</button>
                        <button type="submit" class="btn btn-warning">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function adjust(id, delta) {
            const input = document.getElementById(id);
            let value = parseFloat(input.value);

            if (isNaN(value)) value = 0;
            value += delta;
            if (value < 0) value = 0;
            input.value = value.toFixed(id === 'price' ? 2 : 0);
        }
    </script>
@endsection
