<?php

namespace App\Http\Controllers;

use App\DriverRequest;
use App\Repositories\UserRepository;
use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = User::role('client')->withCount('driverRequests')->paginate();
        return view('admin.clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show(User $client)
    {
        $client->load('driverRequests.driverType');
        if (!$client->hasRole('client')) throw new NotFoundHttpException("The Client Could not be found");
        return view('admin.clients.show', ['client'=> $client ]);
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

    public function createFromRequest(DriverRequest $dr){
        $users = User::whereEmail($dr->email)->orWhere('phone',$dr->phone)->get();

        if ($users->count()) {
            return [
                'status' => 'exists',
                'users' => $users,
                'html' => view('partials.user-select',compact('users','dr'))->render()
            ];
        }
        $user = UserRepository::buildUserFromDriverRequest($dr);
        $user->assignRole('client');
        $user->driverRequests()->save($dr);
        return [
            'status' => 'success',
            'user' => $user
        ];
    }

    public function attachRequestToUser(User $user, DriverRequest $dr)
    {
        $user->driverRequests()->save($dr);
        return [
            'status' =>'success',
            'user' => $user,
        ];
    }

}
