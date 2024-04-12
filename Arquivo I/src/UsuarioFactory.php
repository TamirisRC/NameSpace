<?php
namespace App\Src;
class UsuarioFactory {
    public static function criar(string $perfil): Usuario {
      switch ($perfil) {
        case 'professor':
          return new Professor();
        case 'administrador':
          return new Administrador();
        case 'administrador_supremo':
          return new AdministradorSupremo();
        default:
          throw new Exception('Perfil inválido');
      }
    }
  }