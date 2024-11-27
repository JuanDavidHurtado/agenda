<?php

class Contact {
    private $conn;
    private $table = "contacto";

    public $idContacto;
    public $conNombre;
    public $conApellido;
    public $conTelefono;
    public $conDireccion;
    public $conCorreo;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Listar todos los contactos
    public function readAll() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Obtener un contacto por ID
    public function readOne($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE idContacto = :idContacto LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':idContacto', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Crear un contacto
    public function create() {
        $query = "INSERT INTO " . $this->table . " (conNombre, conApellido, conTelefono, conDireccion, conCorreo) 
                  VALUES (:conNombre, :conApellido, :conTelefono, :conDireccion, :conCorreo)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':conNombre', $this->conNombre);
        $stmt->bindParam(':conApellido', $this->conApellido);
        $stmt->bindParam(':conTelefono', $this->conTelefono);
        $stmt->bindParam(':conDireccion', $this->conDireccion);
        $stmt->bindParam(':conCorreo', $this->conCorreo);

        return $stmt->execute();
    }

    // Actualizar un contacto
    public function update() {
        $query = "UPDATE " . $this->table . " 
                  SET conNombre = :conNombre, conApellido = :conApellido, conTelefono = :conTelefono, 
                      conDireccion = :conDireccion, conCorreo = :conCorreo 
                  WHERE idContacto = :idContacto";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':idContacto', $this->idContacto);
        $stmt->bindParam(':conNombre', $this->conNombre);
        $stmt->bindParam(':conApellido', $this->conApellido);
        $stmt->bindParam(':conTelefono', $this->conTelefono);
        $stmt->bindParam(':conDireccion', $this->conDireccion);
        $stmt->bindParam(':conCorreo', $this->conCorreo);

        return $stmt->execute();
    }

    // Eliminar un contacto
    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE idContacto = :idContacto";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':idContacto', $this->idContacto);
        return $stmt->execute();
    }
}
