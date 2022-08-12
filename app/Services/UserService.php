<?php

namespace App\Services;

class UserService {
    public static function getDashboardRouteBasedOnUserRole($userRole){
        if($userRole === 'participant'){
            return route('participant.dashboard.index');
        }
    }
}
