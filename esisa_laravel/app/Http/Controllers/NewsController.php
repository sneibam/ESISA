<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Container\Container;
use Orchestra\Parser\Xml\Document;
use Orchestra\Parser\Xml\Reader;

class NewsController extends Controller
{

  private $data;

  public function loadData() {
    $app = new Container;
    $document =  new Document($app);
    $reader = new Reader($document);

    $xml = $reader->load('../../public/xmlData/news.xml');
    $news = $xml->parse([
      'users' => ['uses' => 'user[id,name]'],
    ]);
  }


}
