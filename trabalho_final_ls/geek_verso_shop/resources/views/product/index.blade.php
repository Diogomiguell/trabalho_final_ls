@extends('layouts.app')

@section('title', 'GeekVerso - Seus Produtos')

@section('content')
    @if (@session('sucess'))
        <p class="text-orange-600">
            {{ session('success') }}
        </p>
    @endif

    <div class="row" style="margin-top: 40px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lista de Produtos</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 200px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Procurar">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap table-dark table-striped align-middle">
                        <thead class="thead-dark">
                            <tr>
                                <th style="text-align: center">NOME</th>
                                <th style="text-align: center">DESCRIÇÃO</th>
                                <th style="text-align: center">QUANTIDADE</th>
                                <th style="text-align: center">PREÇO</th>
                                <th style="text-align: center">NOTA DE AVALIAÇÃO</th>
                                <th style="text-align: center">IMAGEM DO PRODUTO</th>
                                <th style="text-align: center">AÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    {{-- Nome do produto --}}
                                    <td style="max-width: 200px; word-wrap: break-word; white-space: normal;">
                                        {{ $product->product_name }}
                                    </td>

                                    {{-- Descrição do produto --}}
                                    <td style="max-width: 300px; word-wrap: break-word; white-space: normal;">
                                        {{ $product->product_description }}
                                    </td>

                                    {{-- Quantidade do produto --}}
                                    <td style="text-align: center; max-width: 300px;">
                                        {{ $product->product_quantity }}
                                    </td>

                                    {{-- Preço do produto --}}
                                    <td style="text-align: center; min-width: 90px;">
                                        R$ {{ number_format($product->product_price, 2, ',', '.') }}
                                    </td>

                                    {{-- Nota de avaliação do produto --}}
                                    <td style="min-width: 50px; text-align: center">
                                        {{ $product->product_rating }} 
                                        <span>/ 5 <i class="fas fa-star text-warning"></i></span>
                                    </td>

                                    {{-- Imagem do produto --}}
                                    <td style="min-width: 140px; text-align: center">
                                        @if ($product->product_file_name)
                                            <img src="{{ asset('storage/' . $product->product_file_name) }}"
                                                alt="Imagem do Produto"
                                                style="max-width: 140px; height: auto; border-radius: 8px;">
                                        @else
                                            <span class="text-muted">Sem imagem</span>
                                        @endif
                                    </td>

                                    {{-- Ações deletar e editar --}}
                                    <td style="min-width: 80px">
                                        <a href="#" class="btn btn-sm btn-outline-primary" title="Editar">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <br><br>
                                        <form action="{{-- {{ route('produtos.destroy', $product->id) }} --}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-outline-danger" title="excluir"
                                                    data-bs-data="modal"
                                                    data-bs-target >
                                                <i class="fas fa-trash-alt"></i>
                                            </button>     
                                        </form>                     
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-muted py-4">
                                        Sem produtos adicionados!
                                        <a href="{{ route('produtos.create') }}" class="text-warning">Clique aqui</a> para
                                        adicionar produtos.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="card-footer clearfix bg-dark border-top">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
