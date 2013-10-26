<?php

use Cartalyst\Sentry\Users\UserNotFoundException;

class CustomerController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $group = Sentry::findGroupByName('customers');
        $customers = Sentry::findAllUsersInGroup($group);

        $title = 'Manage Users';
        $description = 'manage your frontend users';

        return View::make('customers/index', compact('customers', 'title', 'description'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        try {
            $customer = Sentry::findUserById($id);
        } catch(UserNotFoundException $e) {
            App::abort(404, 'Page not found');
        }

        return View::make('customers/show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}