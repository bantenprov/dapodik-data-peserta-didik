<?php namespace Bantenprov\DDPesertaDidik\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The DDPesertaDidik facade.
 *
 * @package Bantenprov\DDPesertaDidik
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class DDPesertaDidik extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dd-peserta-didik';
    }
}
