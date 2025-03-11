<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Attachment;
use App\Services\AttachmentService;
use Illuminate\Http\Request;
use Storage;

class AttachmentController extends Controller
{
    protected AttachmentService $attachmentService;

    public function __construct(AttachmentService $attachmentService)
    {
        $this->attachmentService = $attachmentService;
    }

    public function show(Attachment $attachment)
    {
        $path = $this->attachmentService->calculatePath($attachment);
        $name = $this->attachmentService->ensureExtension($attachment->name, $attachment->extension);
        return Storage::download($path, $name);
    }

    public function update(Request $request, Attachment $attachment)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $attachment->update($request->only('name'));
        return back()->with('success', 'Allegato aggiornato con successo.');
    }

    public function destroy(Attachment $attachment)
    {
        $path = $this->attachmentService->calculatePath($attachment);
        Storage::delete($path);
        $attachment->delete();
        return response()->json(['message' => 'Allegato eliminato con successo.']);
    }
}
