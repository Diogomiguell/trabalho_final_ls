<?php 

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //CRUD: Read
    public function index()
    {
        //Carregar dados do DB
        $products = Product::where('user_id', Auth::user()->id)->paginate(5);

        //Carregar view
        return view('product.index', compact('products'));
    }

    //CRUD: Create
    public function create()
    {
        //Carregar view
        return view('product.create');
    }

    //Regra de negócio
    public function store(ProductRequest $request)
    {
        //Salvar imagens na pasta storage/app/public
        $file = $request->file('product_file_name');
        $file_name = rand(10, 999999) . '-' . $file->getClientOriginalName();
        $path = $request->file('product_file_name')->storeAs('image_uploads', $file_name);

        //Pegar os dados válidos do formulário
        $data = $request->validated();
        $data['product_file_name'] = $path;
        $data['user_id'] = Auth::user()->id;
        
        //Salvar os dados no DB
        Product::create($data);

        //Redirecionar a página
        return redirect()->route('produtos.index')
                        ->with('success', 'Produto adicionado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $produto)
    {   
        //Deletar a imagem do produto a partir do disco onde está localizada a pasta public
        Storage::disk('public')->delete($produto->product_file_name); 
        $produto->delete();

        //Redirecionar a página
        return redirect()->route('produtos.index')
                        ->with('success', 'Produto removido com sucesso');
    }
}
