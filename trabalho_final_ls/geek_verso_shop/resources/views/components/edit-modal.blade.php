<!-- Modal -->
<div class="modal fade" id="editModal{{ $product->id }}" tabindex="-1" role="dialog"
    aria-labelledby="editModalLabel{{ $product->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('produtos.update', ['produto' => $product]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel{{ $product->id }}">
                        Editar o Produto:
                        <br>
                        <strong class="text-break text-warning">
                            {{ $product->product_name }}
                        </strong>? 
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body text-break">
                    <div class="card text-white">
                        <div class="card-body">
                            <p class="mb-4">Olá <strong>{{ Auth::user()->name }}</strong></p>
                            {{-- Nome do Produto --}}
                            <div class="mb-3">
                                <label for="product_name" class="form-label">Nome do Produto</label>
                                <input type="text" name="product_name" id="product_name"
                                    class="form-control bg-dark text-white border-secondary"
                                    value="{{ $product->product_name }}" required autofocus>
                                @error('product_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Descrição do Produto --}}
                            <div class="mb-3">
                                <label for="product_description" class="form-label">Descrição do Produto</label>
                                <textarea name="product_description" id="product_description" maxlength="255" rows="5"
                                    class="form-control bg-dark text-white border-secondary" placeholder="Máximo de 255 caracteres" required>
                                        {{ $product->product_description }}
                                    </textarea>
                                @error('product_description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Quantidade do Produto --}}
                            <div class="mb-3">
                                <label for="product_quantity" class="form-label">Quantidade do Produto</label>
                                <div class="input-group">
                                    <button type="button" class="btn btn-outline-light"
                                        onclick="adjust('quantity', -1)">-</button>
                                    <input type="number" name="product_quantity" id="quantity"
                                        class="form-control text-center bg-dark text-white border-secondary"
                                        value="{{ $product->product_quantity }}" min="1" required>
                                    <button type="button" class="btn btn-outline-light"
                                        onclick="adjust('quantity', 1)">+</button>
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
                                        class="form-control text-end bg-dark text-white border-secondary"
                                        value="{{ $product->product_price }}" min="0" step="0.01" required>
                                    <button type="button" class="btn btn-outline-light"
                                        onclick="adjust('price', 1)">+</button>
                                    @error('product_price')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Nota de Avaliação do Produto --}}
                            <div class="mb-3">
                                <label class="form-label">Avaliação do Produto: <span
                                        id="rating_value">{{ $product->product_rating }}</span>
                                </label>
                                <input type="range" class="form-range" min="0" max="5" step="0.1"
                                    name="product_rating" id="product_rating" value="{{ $product->product_rating }}"
                                    oninput="document.getElementById('rating_value').textContent = this.value" required>
                                @error('product_rating')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Imagem do Produto --}}
                            <div class="mb-3">
                                <label for="product_file_name" class="form-label">Imagem do Produto</label>
                                <input type="file" name="product_file_name" id="product_file_name"
                                    class="form-control bg-dark text-white border-secondary" required>
                                @error('product_file_name')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>
