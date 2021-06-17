<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $actions = $request->route()->getAction();

        if (isset($actions['inRoles']))
        {
            $user = Auth::user();

            $roleUsers = $user->roleUsers()->pluck('role_id')->toArray();

            $roles = Role::whereIn('id', $roleUsers)->pluck('slug')->toArray();

            if ($this->hasAccess($roles, $actions['inRoles']))
            {
                return $next($request);
            }
        }

        return redirect()->route('login')
            ->withErrors(['Bạn không có quyền truy cập!']);
    }
    private function hasAccess($roles, $actions)
    {
        if (is_array($actions)) {
            if (array_intersect($roles, $actions))
            {
                return true;
            }
        }
        elseif (in_array($actions, $roles))
        {
            return true;
        }
        return false;
    }
}
