<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\ProductoModel;

class Producto extends BaseController
{
    protected $productoModel;

    public function __construct()
    {
        $this->productoModel = new ProductoModel();
    }

    // 1. LEER (READ)
    public function listar()
    {
        $data['productos'] = $this->productoModel->findAll();
        return view('producto', $data);
    }

    // 2. CREAR (CREATE)
    public function crear()
    {
        return view('product_create');
    }

    public function guardar()
    {
        $this->productoModel->save([
            'nombre'      => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio'      => $this->request->getPost('precio'),
            'stock'       => $this->request->getPost('stock'),
        ]);

        return redirect()->to(site_url('producto'))->with('mensaje', 'Producto creado.');
    }

    // 3. ACTUALIZAR (UPDATE)
    public function editar($id = null)
    {
        $data['producto'] = $this->productoModel->find($id);

        if (!$data['producto']) {
            return redirect()->to(site_url('producto'));
        }

        return view('product_edit', $data);
    }

    public function actualizar($id = null)
    {
        $this->productoModel->update($id, [
            'nombre'      => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio'      => $this->request->getPost('precio'),
            'stock'       => $this->request->getPost('stock'),
        ]);

        return redirect()->to(site_url('producto'))->with('mensaje', 'Producto actualizado.');
    }

    // 4. ELIMINAR (DELETE)
    public function eliminar($id = null)
    {
        $this->productoModel->delete($id);
        return redirect()->to(site_url('producto'))->with('mensaje', 'Producto eliminado.');
    }
}