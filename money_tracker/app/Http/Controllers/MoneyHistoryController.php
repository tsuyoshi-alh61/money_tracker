<?php

namespace App\Http\Controllers;

use App\Http\Requests\MoneyHistory\StoreRequest;
use App\Http\Requests\MoneyHistory\UpdateRequest;
use App\Models\MoneyHistory;
use Illuminate\Http\Request;

class MoneyHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //　Get a Money transaction history
        $moneyHistories = MoneyHistory::get();

        return $moneyHistories;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        // MoneyHistoryモデルのインスタンスを生成
        $MoneyHistory = new MoneyHistory();

        // リクエスト値をモデルに設定
        $MoneyHistory->transaction_type = $request->get('transaction_type');
        $MoneyHistory->amount = $request->get('amount');

        // DBに登録
        $MoneyHistory->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        // MoneyHistoryモデルからIDに紐づくデータを取得
        $MoneyHistory = MoneyHistory::find($id);

         // リクエスト値をモデルに設定
         $MoneyHistory->transaction_type = $request->get('transaction_type');
         $MoneyHistory->amount = $request->get('amount');

         // DBに登録
        $MoneyHistory->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // MoneyHistoryモデルからIDに紐づくデータを取得
        $MoneyHistory = MoneyHistory::find($id);

        // データベースからIDに紐づく対象のデータを削除
        $MoneyHistory->delete();
    }
}
