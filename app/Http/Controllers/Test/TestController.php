<?php

namespace App\Http\Controllers\Test;

use Mail;
use DB;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class TestController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Tests Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the tests from differents vendors
    |
    */

    public function __construct()
    {
        // $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    public function testMailgun()
    {
        Mail::send('emails.testing', ['user' => 'Nombre del usuario?'], function ($message) {
            $message->from('noresponder@ticketrecycler.info', 'Laravel');
            $message->to('alleeediaz@gmail.com')->cc('alediz21@gmail.com');
        });
        
        return 'Email sent...';
    }

    public function testDatabase()
    {
        $users = DB::select("SELECT * FROM test_by_adiaz WHERE Status = ?", ['Active']);
        
        /**
         * 
        Instead of using ? to represent your parameter bindings, you may execute a query using named bindings:
        $results = DB::select('select * from users where id = :id', ['id' => 1]);

        To execute an insert statement, you may use the insert method on the DB facade. Like select, this method takes the raw SQL query as its first argument, and bindings as the second argument:
        DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
        
        The update method should be used to update existing records in the database. The number of rows affected by the statement will be returned by the method:
        $affected = DB::update('update users set votes = 100 where name = ?', ['John']);

        The delete method should be used to delete records from the database. Like update, the number of rows deleted will be returned:
        $deleted = DB::delete('delete from users');
        
        Some database statements should not return any value. For these types of operations, you may use the statement method on the DB facade:
        DB::statement('drop table users');


        DB::transaction(function () {
            DB::table('users')->update(['votes' => 1]);
            DB::table('posts')->delete();
        });
    */

        return view('testdb', ['users' => $users]);
    }
}
