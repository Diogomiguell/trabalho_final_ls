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
        $path = $file('product_file_name')->storeAs('image_uploads', $file_name);

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
    public function edit(Product $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $produto)
    {
        //Pegar os dados válidos do formulário e transformar em um array
        $data = $request->validated();

        if ($request->hasFile('product_file_name')) {
            //Deletar a imagem atual
            Storage::disk('public')->delete($produto->product_file_name);

            //Salvar a nova imagem na pasta storage/app/public
            $file = $request->file('product_file_name');
            $file_name = rand(10, 999999) . '-' . $file->getClientOriginalName();
            $path = $file->storeAs('image_uploads', $file_name, 'public'); // <- o segredo
            $data['product_file_name'] = $path;
        }

        //Atualizar os dados do DB
        $data['product_name'] = $request->product_name;
        $data['product_description'] = $request->product_description;
        $data['product_quantity'] = $request->product_quantity;
        $data['product_price'] = $request->product_price;
        $data['product_rating'] = $request->product_rating;

        $produto->user_id = Auth::user()->id;

        //Fazer as alterações no DB
        $produto->update($data);

        //Redirecionar a página
        return redirect()->route('produtos.index')
            ->with('success', 'Produto editado com sucesso');
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
