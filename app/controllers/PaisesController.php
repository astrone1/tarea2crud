<?php

class PaisesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$pais=Pais::orderBy('id','DESC')->get();;
		return View::make('paises.index')->with('paises',$pais);

		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return View::make('paises.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$pais = new Pais;
		$pais->Id=Input::get('id');
		$pais->nombre = Input::get('Nombre');
		$pais->capital = Input::get('Capital');
		$pais->habitantes = Input::get('Habitantes');
		//$pais->created = Input::get('created_at');
		//$pais->updated = Input::get('updated_at');
		$pais->save();
		return Redirect::to('/paises/create');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($id=null)
	{
		$pais= Pais::find($id);
		return View::make('paises.show')->with('pais',$pais);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id=null)
	{
		$pais = Pais::find($id);
		return View::make('paises.edit')->with('pais', $pais);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$pais = Pais::find($id);
		$pais->nombre=$input['Nombre'];
		$pais->capital=$input['Capital'];
		$pais->habitantes=$input['Habitantes'];
		//$pais->create_at=$input['create_at'];
		//$pais->update_at =$input['update_at'];
		$pais->save();
		return Redirect::to('paises/edit'.$id);

       
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$pais = Pais::find($id);
		$pais->delete();
		return Redirect::to('paises');
	}

}



