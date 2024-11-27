<?php
require_once "models/Contact.php";
require_once "config/database.php";

class ContactController
{
    private $model;

    public function __construct()
    {
        $database = new Database();
        $db = $database->getConnection();
        $this->model = new Contact($db);
    }

    // Listar contactos
    public function list()
    {
        $result = $this->model->readAll();
        require "views/contact/list.php";
    }

    // Crear un nuevo contacto
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->conNombre = $_POST['conNombre'];
            $this->model->conApellido = $_POST['conApellido'];
            $this->model->conTelefono = $_POST['conTelefono'];
            $this->model->conDireccion = $_POST['conDireccion'];
            $this->model->conCorreo = $_POST['conCorreo'];

            if ($this->model->create()) {
                // Redirigir con mensaje de éxito
                header("Location: index.php?msg=created");
                exit;
            } else {
                // Redirigir con mensaje de error
                header("Location: index.php?msg=error");
                exit;
            }
        }
        require "views/contact/create.php";
    }

    // Editar contacto
    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->idContacto = $id;
            $this->model->conNombre = $_POST['conNombre'];
            $this->model->conApellido = $_POST['conApellido'];
            $this->model->conTelefono = $_POST['conTelefono'];
            $this->model->conDireccion = $_POST['conDireccion'];
            $this->model->conCorreo = $_POST['conCorreo'];

            if ($this->model->update()) {
                // Redirigir con mensaje de éxito
                header("Location: index.php?msg=updated");
                exit;
            } else {
                // Redirigir con mensaje de error
                header("Location: index.php?msg=error");
                exit;
            }
        }
        
        $contact = $this->model->readOne($id);
        require "views/contact/edit.php";
    }


    // Eliminar contacto
    public function delete($id)
    {

        $this->model->idContacto = $id;

        if ($this->model->delete()) {
            header("Location: index.php?msg=deleted");
            exit;
        } else {
            header("Location: index.php?msg=error");
            exit;
        }
    }
}
