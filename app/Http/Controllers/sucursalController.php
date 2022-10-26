<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesucursalRequest;
use App\Http\Requests\UpdatesucursalRequest;
use App\Repositories\sucursalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class sucursalController extends AppBaseController
{
    /** @var sucursalRepository $sucursalRepository*/
    private $sucursalRepository;

    public function __construct(sucursalRepository $sucursalRepo)
    {
        $this->sucursalRepository = $sucursalRepo;
    }

    /**
     * Display a listing of the sucursal.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sucursals = $this->sucursalRepository->all();

        return view('sucursals.index')
            ->with('sucursals', $sucursals);
    }

    /**
     * Show the form for creating a new sucursal.
     *
     * @return Response
     */
    public function create()
    {
        return view('sucursals.create');
    }

    /**
     * Store a newly created sucursal in storage.
     *
     * @param CreatesucursalRequest $request
     *
     * @return Response
     */
    public function store(CreatesucursalRequest $request)
    {
        $input = $request->all();

        $sucursal = $this->sucursalRepository->create($input);

        Flash::success('Sucursal saved successfully.');

        return redirect(route('sucursals.index'));
    }

    /**
     * Display the specified sucursal.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sucursal = $this->sucursalRepository->find($id);

        if (empty($sucursal)) {
            Flash::error('Sucursal not found');

            return redirect(route('sucursals.index'));
        }

        return view('sucursals.show')->with('sucursal', $sucursal);
    }

    /**
     * Show the form for editing the specified sucursal.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sucursal = $this->sucursalRepository->find($id);

        if (empty($sucursal)) {
            Flash::error('Sucursal not found');

            return redirect(route('sucursals.index'));
        }

        return view('sucursals.edit')->with('sucursal', $sucursal);
    }

    /**
     * Update the specified sucursal in storage.
     *
     * @param int $id
     * @param UpdatesucursalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesucursalRequest $request)
    {
        $sucursal = $this->sucursalRepository->find($id);

        if (empty($sucursal)) {
            Flash::error('Sucursal not found');

            return redirect(route('sucursals.index'));
        }

        $sucursal = $this->sucursalRepository->update($request->all(), $id);

        Flash::success('Sucursal updated successfully.');

        return redirect(route('sucursals.index'));
    }

    /**
     * Remove the specified sucursal from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sucursal = $this->sucursalRepository->find($id);

        if (empty($sucursal)) {
            Flash::error('Sucursal not found');

            return redirect(route('sucursals.index'));
        }

        $this->sucursalRepository->delete($id);

        Flash::success('Sucursal deleted successfully.');

        return redirect(route('sucursals.index'));
    }
}
