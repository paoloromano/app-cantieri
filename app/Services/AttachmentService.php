<?php

namespace App\Services;

use App\Models\Attachment;
use Illuminate\Support\Str;
use Storage;

class AttachmentService
{
    public static function calculatePath($file): string
    {
        return sprintf(
            '%s/%s/%d/attachments/%s.%s',
            app()->environment() === 'production' ? 'prod' : 'dev',
            Str::plural(strtolower(class_basename($file->attachable))),
            $file->attachable->id,
            $file->uuid,
            $file->extension
        );
    }

    /**
     * Store a new attachment.
     *
     * @param $file
     * @param $attachable
     * @return bool
     */
    public function store($file, $attachable): bool
    {
        $uuid = Str::uuid();

        $fileDB = $attachable->attachments()->create([
            'uuid'      => $uuid,
            'name'      => $file->getClientOriginalName(),
            'extension' => $file->getClientOriginalExtension(),
            'type'      => 'attachment'
        ]);

        $path = self::calculatePath($fileDB);
        return Storage::put($path, file_get_contents($file));
    }

    public function getTemporaryUrl(Attachment $attachment): string
    {
        $expiration = now()->addMinutes(2);
        $path = self::calculatePath($attachment);
        return Storage::temporaryUrl($path, $expiration);
    }

    public function ensureExtension($fileName, $extension)
    {
        if (!str_ends_with($fileName, $extension))
            return $fileName . '.' . $extension;
        return $fileName;
    }
}
