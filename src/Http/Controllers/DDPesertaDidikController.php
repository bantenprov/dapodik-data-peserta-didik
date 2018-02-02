<?php namespace Bantenprov\DDPesertaDidik\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\DDPesertaDidik\Facades\DDPesertaDidik;
use Bantenprov\DDPesertaDidik\Models\DDPesertaDidikModel;

/**
 * The DDPesertaDidikController class.
 *
 * @package Bantenprov\DDPesertaDidik
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class DDPesertaDidikController extends Controller
{
    public function demo()
    {
        return DDPesertaDidik::welcome();
    }
}
