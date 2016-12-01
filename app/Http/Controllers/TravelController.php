<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Route;

class TravelController extends Controller
{
    use \Illuminate\Foundation\Testing\Concerns\MakesHttpRequests;
    protected $baseUrl = null;
    protected $app = null;

    function __construct()
    {
        $this->baseUrl = request()->getSchemeAndHttpHost();
        $this->app     = app();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = $this->call('GET', 'api1/travel');
        $b = $this->call('GET', 'api2/travel');
        $data = $a->original;
        $data2 = $b->original;
        foreach($data2 as $obj)
        {
            $data[] = $obj;
        }
        return view('travel.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search()
    {

        return view('travel.search');
    }
    public function results(Request $request)
    {
        $query = $request->get('query');
        $a = $this->call('GET', "api1/travel/$query");
        $b = $this->call('GET', "api2/travel/$query");
        $data = $a->original;
        $data2 = $b->original;
        foreach($data2 as $obj)
        {
            $data[] = $obj;
        }

        return view('travel.search')->with('data', $data);
    }
    public function page($api, $id)
    {
        $a = '';
        if($api == "1")
        {
            $a = $this->call('GET', "api1/travel/pages/$id");
        }
        else
        {
            $a = $this->call('GET', "api2/travel/pages/$id");
        }
        $data = $a->original[0];
        $data['desc'] = array_pop($data);
        return view('travel.page')->with('data', $data);
    }
}
