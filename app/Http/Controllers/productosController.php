<?php

namespace App\Http\Controllers;
use App\Models\productos;
use App\Models\sucursal;
use App\Http\Requests\CreateproductosRequest;
use App\Http\Requests\UpdateproductosRequest;
use App\Repositories\productosRepository;
use App\Http\Controllers\AppBaseController;

use Illuminate\Http\Request;
use Flash;
use Response;

class productosController extends AppBaseController
{
    /** @var productosRepository $productosRepository*/
    private $productosRepository;

    public function __construct(productosRepository $productosRepo)
    {
        $this->productosRepository = $productosRepo;
    }

    /**
     * Display a listing of the productos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
           
                $productos = $this->productosRepository->all();
                 
                  return view('productos.index')
                       ->with('productos', $productos);
            
       
        
    }
               
    

    /**
     * Show the form for creating a new productos.
     *
     * @return Response
     */
    public function create()
    {
        $sucursals = sucursal::all()->pluck('name', 'id')->toArray();
        return view('productos.create')->with('sucursals',$sucursals);
    }

    /**
     * Store a newly created productos in storage.
     *
     * @param CreateproductosRequest $request
     *
     * @return Response
     */
    public function store(CreateproductosRequest $request)
    {
        $input = $request->all();


        $productos = $this->productosRepository->create($input);

        Flash::success('Producto ingresado  correctamente.');

        return redirect(route('productos.index'));
    }

    /**
     * Display the specified productos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productos = $this->productosRepository->find($id);

        if (empty($productos)) {
            Flash::error('Productos not found');

            return redirect(route('productos.index'));
        }

        return view('productos.show')->with('productos', $productos);
    }

    /**
     * Show the form for editing the specified productos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productos = $this->productosRepository->find($id);
       
        $sucursals = sucursal::find($productos->id_sucursals);
       // $sucursals = sucursal::all()->pluck('name', 'id')->toArray();
        


        if (empty($productos)) {
            Flash::error('Productos not found');

            return redirect(route('productos.index'));
        }

        return view('productos.edit')->with('productos', $productos)->with('sucursals',$sucursals);
    }

    /**
     * Update the specified productos in storage.
     *
     * @param int $id
     * @param UpdateproductosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproductosRequest $request)
    {
        $productos = $this->productosRepository->find($id);
      

        if (empty($productos)) {
            Flash::error('Productos not found');

            return redirect(route('productos.index'));
        }

        $productos = $this->productosRepository->update($request->all(), $id);

        Flash::success('Productos updated successfully.');

        return redirect(route('productos.index'));
    }

    /**
     * Remove the specified productos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productos = $this->productosRepository->find($id);

        if (empty($productos)) {
            Flash::error('Productos not found');

            return redirect(route('productos.index'));
        }

        $this->productosRepository->delete($id);

        Flash::success('Productos deleted successfully.');

        return redirect(route('productos.index'));
    }

    public function search()
            {
    $search_text = $_GET['query'];
     $productos = //productos::whereLike(['cod_producto', 'nombre_producto'], $search_text)->get();
    productos::where('cod_producto','LIKE','%'.$search_text.'%')
                    ->orWhere('nombre_producto','LIKE','%'.$search_text.'%') ->get();   
       return view('productos.search',compact('productos'));  
}

}



