<?php
namespace Contoh;

use FFI;

class Contoh
{
    public static function hello()
    {
        $ffi = FFI::cdef(
            "
   void hello();
", __DIR__ . '/contoh.so'
        );
        $ffi->hello();
    }
}