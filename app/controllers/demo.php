<?php

var_dump(\Lib\Payment::process());die;

$redis = Redis::connection();

$redis->set('name', 'Shaon from redis');

$name = $redis->get('name');

$user = User::find(7);

return $user;

$roles = User::find(7)->roles;

if ($roles->contains(2)) {
    var_dump($roles[0]->id);
}
die;

User::find(7)->roles()->detach(1); die;

$user = User::find(7);
$user->roles()->sync(array(1, 2, 3));

foreach ($user->roles as $role)
{
    var_dump($role->pivot->created_at);
    die('dd');
} die;

$comment = new Comment(array('body' => 'A new comment.'));

$post = Post::find(1);

$comment = $post->comments()->save($comment); die;

$role = new Role(array('name' => 'admin'));

User::find(7)->roles()->save($role);

die;

$user = User::find(7);
$user->roles()->sync(array(1, 2, 3));

$user->roles()->attach(1);

$comment = new Comment(array('body' => 'A new comment.'));

$post = Post::find(1);

$comment = $post->comments()->save($comment);

var_dump($comment); die;

return Post::find(1)->user->email;

return User::has('posts', '>', 10)->get();

return Country::find(1)->posts;

return Country::find(1)->posts;

return User::find(7)->posts;