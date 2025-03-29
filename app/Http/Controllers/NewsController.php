<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index', [
            'title' => 'Новости в сфере автоматизации'
        ]);
    }

    public function aiRobots()
    {
        return view('news.show2', [
            'title' => 'Новые роботы с ИИ',
            'content' => 'Андроид-робот, разработанный компанией 1X. Может убирать, сортировать, перемещать и доставлять предметы.'
        ]);
    }

    public function rosatomNetwork()
    {
        return view('news.show1', [
            'title' => 'Пром сеть "Росатома"',
            'content' => 'К 2030 году структуры «Росатома» разработают отечественную защищённую промышленную сеть.'
        ]);
    }


    public function genesysPc() { }
    public function agriculture() {  }
    public function deliveryRobots() {  }
    public function aiMedicine() {  }
    public function warehouseAutomation() {  }
    public function selfDrivingCars() {  }
}
