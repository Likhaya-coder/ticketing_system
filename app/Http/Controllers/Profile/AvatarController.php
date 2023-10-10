<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAvatarRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Support\Str;
use App\Models\User;

class AvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAvatarRequest $request)
    {
        $path = $request->file('avatar')->store('avatar', 'public');

        if ($oldfile = auth()->user()->avatar) {
            Storage::disk('public')->delete($oldfile);
        }

        auth()->user()->update(['avatar' => $path]);

        return back()->with('status', 'profile-updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function generate() {
        $result = OpenAI::images()->create([
            'prompt' => "generate an animated avatar image for a random user",
            'n' => 1,
            'size' => "256x256"
        ]);

        $contents = file_get_contents($result['choices'][0]['image']);
        dd($contents);
        $fileName = Str::random(25);
        $fullNamePath = "avatar/$fileName.jpg";

        if ($oldfile = auth()->user()->avatar) {
            Storage::disk('public')->delete($oldfile);
        }

        Storage::disk('public')->put($fullNamePath, $contents);
        auth()->user()->update(['avatar' => $fullNamePath]);

        return back()->with('status', 'profile-generate');
    }
}
