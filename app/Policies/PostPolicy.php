<?php

namespace App\Policies;

use App\Model\admin\admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the post.
     *
     * @param  \App\Model\user\admin  $user
     * @param  \App\post  $post
     * @return mixed
     */
    public function view(admin $user, post $post)
    {
        //
    }

    /**
     * Determine whether the user can create posts.
     *
     * @param  \App\Model\user\admin  $user
     * @return mixed
     */
    public function create(admin $user) 
    {
        return $this->getPermission($user,14);
    }

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\Model\user\admin  $user
     * @param  \App\post  $post
     * @return mixed
     */
    public function update(admin $user)
    {
        return $this->getPermission($user,6);
    }

    protected function getPermission($user,$p_id)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permision) {

                if ($permision->id == $p_id) {

                    return true;
                }
            }
        }

        return false;
    }



     protected function Permission($user,$p_id)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permision) {

                if ($permision->id == $p_id) {

                    return true;
                }
            }
        }

        return false;
    }

    /**
     * Determine whether the user can delete the post.
     *
     * @param  \App\Model\user\admin  $user
     * @param  \App\post  $post
     * @return mixed
     */
    public function delete(admin $user)
    { 
        return $this->getPermission($user,7);
    }
    public function tag(admin $user)
        { 
            return $this->getPermission($user,12);
        }
    public function category(admin $user)
        { 
            return $this->getPermission($user,13);
        }

    /**
     * Determine whether the user can restore the post.
     *
     * @param  \App\Model\user\admin  $user
     * @param  \App\post  $post
     * @return mixed
     */
    public function restore(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the post.
     *
     * @param  \App\Model\user\admin  $user
     * @param  \App\post  $post
     * @return mixed
     */
    public function forceDelete(admin $user)
    {
        //
    }
}
