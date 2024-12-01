<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserCollections;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserStoredResource;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new UserCollections(User::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        try {
            return new UserStoredResource(User::create($request->validated()));
        } catch (Exception $error) {
            $this->errorHandler("Erro ao criar Usuario!!",$error);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, User $user)//FormRequest
    {
        try {
            $user->update($request->validated());
            return (new UserResource($user))
                ->additional(['message' => 'Usuario atualizado com sucesso!!']);
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao atualizar usuario!!", $error);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        try {
            $user->delete();
            return (new UserResource($user))->additional(["message" => "User removido!!!"]);
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao remover usuario!!", $error);
        }
    }
}
