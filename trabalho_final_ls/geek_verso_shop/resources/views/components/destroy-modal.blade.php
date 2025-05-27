<!-- Modal -->
<div class="modal fade" id="deleteModal{{ $product->id }}" tabindex="-1" role="dialog"
    aria-labelledby="deleteModalLabel{{ $product->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('produtos.destroy', ['produto' => $product]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('DELETE')

                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel{{ $product->id }}">Confirmar exclusão
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body text-break">
                    <p>
                        Tem certeza de que deseja excluir o produto:
                        <br>
                        <strong class="text-break text-warning">
                            {{ $product->product_name }}
                        </strong>?
                    </p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </div>
            </form>
        </div>
    </div>
</div>
