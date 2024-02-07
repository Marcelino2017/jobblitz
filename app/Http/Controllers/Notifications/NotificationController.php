<?php

namespace App\Http\Controllers\Notifications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //Traer las notificaciones que el usuario no a leido
        $notification = auth()->user()->unreadNotifications;

        //Limpiar Notificaciones
        auth()->user()->unreadNotifications->markAsRead();

        return view('notifications.index', [
            'notifications' => $notification,
        ]);
    }
}
