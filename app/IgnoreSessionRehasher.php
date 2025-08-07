<?php
namespace App;

use Illuminate\Http\Request;
use Spatie\ResponseCache\Hasher\RequestHasher;

class IgnoreSessionRehasher extends RequestHasher
{
    public function getHashFor(Request $request): string
    {
        // ลบ session, cookie ออกจาก hash key
        $request = clone $request;
        $request->setLaravelSession(null);

        return parent::getHashFor($request);
    }
}
