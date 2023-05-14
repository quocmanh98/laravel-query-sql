<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';

    public function learnQueryBuilder()
    {
        // $users = DB::table($this->table)
        //     ->select('*')
        //     ->where('id', '>=', 12)
        //     ->where('id', '<=', 13)
        //     ->get();

        // $users = DB::table($this->table)
        //     ->select('*')
        //     ->where([
        //         ['id', '>=', 12],
        //         ['id', '<=', 13]
        //     ])
        //     ->toSql();

        // $users = DB::table($this->table)
        // ->select('*')
        // ->where([
        //     'id' => 12,
        //     'name' => 'Quốc Mạnh'
        // ])
        // ->toSql();

        // $users = DB::table($this->table)
        //     ->select('*')
        //     ->where('id', '>=', 12)
        //     ->orWhere('id', '<=', 13)
        //     ->toSql();

        // $users = DB::table($this->table)
        //     ->select('*')
        //     ->where('id', 12)
        //     ->where(function($q){
        //         $q->where('id', '<=', 12);
        //         $q->orWhere('id', '>=', 13);
        //     })
        //     ->toSql();

        // $users = DB::table($this->table)
        //     ->select('*')
        //     ->where('id', 12)
        //     ->where(function ($q) {
        //         $q->where('id', '<=', 12)->orWhere('id', '>=', 13);
        //     })
        //     ->toSql();

        // ->get();
        // dd($users);

        // DB::enableQueryLog();
        // $users = DB::table($this->table)
        // ->select('*')
        // ->where('id', 12)
        // ->where(function ($q) {
        //     $q->where('id', '<=', 12)->orWhere('id', '>=', 13);
        // })
        // ->get();
        // dd(DB::getQueryLog());

        // DB::enableQueryLog();
        // DB::table($this->table)
        // ->select('*')
        // ->where('id', 12)
        // ->where(function ($q) {
        //     $q->where('id', '<=', 12)->orWhere('id', '>=', 13);
        //     $q->where(function($query){
        //         $query->where('id', '<=', 12)->orWhere('id', '>=', 13);
        //     });
        // })
        // ->get();
        // dd(DB::getQueryLog());


        // DB::enableQueryLog();
        // $id = 12;
        // DB::table($this->table)
        // ->select('*')
        // ->where('id', 12)
        // ->where(function ($q) use ($id) {
        //     $q->where('id', '<=', $id)->orWhere('id', '>=', $id);
        // })
        // ->get();
        // dd(DB::getQueryLog());

        // DB::enableQueryLog();
        // DB::table($this->table)
        // ->select('*')
        // ->where('name', 'like', '%Quốc Mạnh%')
        // ->get();
        // dd(DB::getQueryLog());

        // DB::enableQueryLog();
        // DB::table($this->table)
        //     ->select('*')
        //     ->whereBetween('name', [
        //         1,
        //         100
        //     ])
        //     ->get();
        // dd(DB::getQueryLog());

        // DB::enableQueryLog();
        // DB::table($this->table)
        //     ->select('*')
        //     ->whereNotBetween('name', [
        //         1,
        //         100
        //     ])
        //     ->get();
        // dd(DB::getQueryLog());

        // DB::enableQueryLog();
        // $users = DB::table($this->table)
        //     ->select('*')
        //     ->whereIn('id', [
        //         12, 11,
        //         3
        //     ])
        //     ->get();
        // dd($users);
        // dd(DB::getQueryLog());

        // DB::enableQueryLog();
        // $users = DB::table($this->table)
        //     ->select('*')
        //     ->whereNotIn('id', [
        //         12, 11,
        //         3
        //     ])
        //     ->get();
        //     // lấy bản ghi có id = 13, không lấy những bản ghi không thuộc id = 12,11,3
        // dd($users);
        // dd(DB::getQueryLog());

        // DB::enableQueryLog();
        // $users = DB::table($this->table)
        //     ->select('*')
        //     ->whereNull('deleted_at')
        //     ->get();
        // dd($users);
        // dd(DB::getQueryLog());


        // DB::enableQueryLog();
        // $users = DB::table($this->table)
        //     ->select('*')
        //     ->whereNotNull('updated_at')
        //     ->get();
        // dd($users);
        // dd(DB::getQueryLog());

        // Truy vấn Date (whereDate, whereMonth, whereDay, whereYear)
        // DB::enableQueryLog();
        // $users = DB::table($this->table)
        //     ->select('*')
        //     ->whereDate(
        //         'created_at',
        //         '2023-05-14'
        //     )
        //     ->get();
        // dd($users);
        // dd(DB::getQueryLog());

        // DB::enableQueryLog();
        // $users = DB::table($this->table)
        //     ->select('*')
        //     ->whereMonth(
        //         'created_at',
        //         '7'
        //     )
        //     ->get();
        // dd($users);
        // dd(DB::getQueryLog());

        // DB::enableQueryLog();
        // $users = DB::table($this->table)
        //     ->select('*')
        //     ->whereDay(
        //         'created_at',
        //         '7'
        //     )
        //     ->get();
        // // dd($users);
        // dd(DB::getQueryLog());

        // DB::enableQueryLog();
        // $users = DB::table($this->table)
        //     ->select('*')
        //     ->whereYear(
        //         'created_at',
        //         '7'
        //     )
        //     ->get();
        // // dd($users);
        // dd(DB::getQueryLog());

        // DB::enableQueryLog();
        // //So sánh 2 giá trị của 2 cột bằng nhau
        // //So sánh 2 cột bằng nhau
        // $users = DB::table($this->table)
        //     ->select('*')
        //     ->whereColumn(
        //         'name',
        //         'username'
        //     )
        //     ->get();
        // dd($users);
        // dd(DB::getQueryLog());

        DB::enableQueryLog();
        //So sánh với các toán tử so sánh
        // $users = DB::table($this->table)
        //     ->select('*')
        //     ->whereColumn(
        //         'updated_at',
        //         '>',
        //         'created_at'
        //     )
        //     ->get();
        // dd($users);
        // dd(DB::getQueryLog());

        // $users = DB::table($this->table)
        //     ->select('*')
        //     ->whereColumn([
        //         ['name', '=', 'username'],
        //         ['updated_at', '>', 'created_at']
        //     ])
        //     ->get();
        // // dd($users);
        // dd(DB::getQueryLog());

        // $users = DB::table($this->table)
        //     ->select('users.name as name','groups.name as group_name')
        //     ->join(
        //         'groups',
        //         'users.group_id',
        //         '=',
        //         'groups.id'
        //     )->get();
        // dd($users);
        // dd(DB::getQueryLog());

        // $users = DB::table($this->table)
        //     ->select('users.name as name', 'groups.name as group_name', 'wards.name as ward_name')
        //     ->join('groups', 'users.group_id','=','groups.id')
        //     ->join('wards', 'users.ward_id','=','wards.id')
        //     ->get();
        // dd($users);
        // dd(DB::getQueryLog());

        // $users = DB::table($this->table)
        //     ->select('users.name as name', 'groups.name as group_name')
        //     ->join('groups', 'users.group_id', '=', 'groups.id')
        //     ->get();
        // dd($users);
        // dd(DB::getQueryLog());


        // $users = DB::table($this->table)
        //     ->select('users.name as name', 'groups.name as group_name')
        //     ->join('groups', 'users.group_id', '=', 'groups.id')
        //     ->get();
        // dd($users);
        // dd(DB::getQueryLog());

        // $users = DB::table($this->table)
        //     ->select('users.name as name', 'groups.name as group_name')
        //     ->leftJoin('groups', 'users.group_id', '=', 'groups.id')
        //     ->get();
        // dd($users);
        // dd(DB::getQueryLog());

        // $users = DB::table($this->table)
        //     ->select('*')
        //     ->orderBy('name', 'desc')
        //     ->orderBy('id', 'asc')
        //     ->get();
        // // dd($users);
        // dd(DB::getQueryLog());

        // $users = DB::table($this->table)
        //     ->select('*')
        //     ->inRandomOrder()
        //     ->get();
        // // dd($users);
        // dd(DB::getQueryLog());

        //     $users = DB::table($this->table)
        //     ->select(DB::raw('count(id) as email_count'), 'email')
        //     ->groupBy('email')
        //     ->get();
        // // dd($users);
        // dd(DB::getQueryLog());

        // $users = DB::table($this->table)
        //     ->select(DB::raw('count(id) as email_count'), 'email')
        //     ->groupBy('email')
        //     ->having('email_count', '>=', 1)
        //     ->get();
        // dd($users);
        // dd(DB::getQueryLog());

        // $users = DB::table($this->table)
        //     ->select(DB::raw('count(id) as email_count'), 'username', 'email')
        //     // ->groupBy('email')
        //     ->groupBy('username')
        //     ->groupBy('email')
        //     // ->having('email_count', '>=', 1)
        //     ->get();
        // dd($users);
        // dd(DB::getQueryLog());

        // $users = DB::table($this->table)
        //     ->offset(2)->limit(3)
        //     ->get();
        // // dd($users);
        // dd(DB::getQueryLog());

        // $users = DB::table($this->table)
        //     ->skip(1)->take(3)
        //     ->get();
        // dd($users);
        // dd(DB::getQueryLog());

        // $users = DB::table($this->table)
        // ->where('id','>', 1)->count();
        // dd($users);
        // dd(DB::getQueryLog());

        // $users =  DB::table($this->table)
        //     ->select(DB::raw('`name` as fullname,`email` as Email'))
        //     ->where('id', '>', 2)
        //     ->get();
        // // dd($users);
        // dd(DB::getQueryLog());

        // $users =  DB::table($this->table)
        //     ->select(DB::raw('`name` as fullname,`email` as Email'))
        //     // ->where('id', '>', 2)
        //     ->where(DB::raw('id>20'))
        //     ->toSql();
        // // ->get();
        // dd($users);
        // // dd(DB::getQueryLog());

        // $users =  DB::table($this->table)
        //     ->selectRaw('email,name,count(id) as email_count')
        //     ->groupByRaw('email,name')
        //     // ->having('email_count', '>=', 1)
        //     ->havingRaw('count(id) > ?', [1])
        //     ->get();
        // dd($users);
        // dd(DB::getQueryLog());

        $users =  DB::table($this->table)
            ->where('group_id', '=', function ($q) {
                $q->select('id')
                    ->from('groups')
                    ->where('name', '=', 'Admin');
            })->get();
        dd($users);

        // DB::raw()
        //         $users = DB::table('users')
        //             ->select(DB::raw('count(*) as user_count,
        // status'))
        //             ->where('status', '<>', 1)
        //             ->groupBy('status')
        //             ->get();

        // selectRaw()
        //         $orders = DB::table('orders')
        //             ->selectRaw('price * ? as
        // price_with_tax', [1.0825])
        //             ->get();

        // whereRaw(), orWhereRaw()
        $orders = DB::table('orders')->whereRaw('price > IF(state
= "TX", ?, 100)', [200])->get();

        // orderByRaw()
        $orders = DB::table('orders')
            ->orderByRaw('updated_at - created_at
DESC')
            ->get();

        // groupByRaw()
        $orders = DB::table('orders')
            ->select('city', 'state')
            ->groupByRaw('city, state')
            ->get();

        // havingRaw()
        //             $orders = DB::table('orders')
        // ->select('department',
        // DB::raw('SUM(price) as total_sales'))
        // ->groupBy('department')
        // ->havingRaw('SUM(price) > ?', [2500])
        // ->get();
    }
}
