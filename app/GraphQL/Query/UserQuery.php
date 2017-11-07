<?php
namespace App\GraphQL\Query;

use GraphQL;
use App\User;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;

class UserQuery extends Query {

    protected $attributes = [
        'name' => 'users'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('User'));
    }

    public function args()
    {
        return [
            'id' => ['name' => 'id', 'type' => Type::int()],
            'email' => ['name' => 'email', 'type' => Type::string()],
            'password' => ['name' => 'password', 'type' => Type::string()],
            'remember_token' => ['name' => 'remember_token', 'type' => Type::string()],
            'api_token' => ['name' => 'api_token', 'type' => Type::string()],
            'created_at' => ['name' => 'created_at', 'type' => Type::string()],
            'updated_at' => ['name' => 'updated_at', 'type' => Type::string()],
            'first' => ['name' => 'first', 'type' => Type::int()],
        ];
    }

    public function resolve($root, $args)
    {
        $user = new User;

        // check for limit
        if( isset($args['first']) ) {
            $user =  $user->limit($args['first'])->latest('id');
        }

        if(isset($args['id']))
        {
            $user = $user->where('id' , $args['id']);
        }

        if(isset($args['email']))
        {
            $user = $user->where('email', $args['email']);
        }

        return $user->get();
    }
}