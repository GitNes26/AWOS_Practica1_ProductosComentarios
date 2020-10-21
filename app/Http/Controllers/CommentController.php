<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(["Mostrar todos los Comentarios: "=>Comment::all()],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $Comentario = new Comment;
        $Comentario->comment = $request->comment;
        $Comentario->user_id = $request->user_id;
        $Comentario->product_id = $request->product_id;

        if($Comentario->save())
            return response()->json(["Comentario Registrado satisfactoriamente:"=>$Comentario],201);
        return response()->return(null,400);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function CommentsByUser($id=null)
    {
        if($id)
            return response()->json(["Comentarios Registrados por el usuario ".$id=>Comment::find($id)],200);
        return response()->json(["Todos los Comentarios Registrados"=>Comment::all()],200);

        // $commentUser = Comment::all()->where('user_id','=',$id);
        // return response()->json(["Comentarios registrados por el usuario ".$id=>$commentUser],200);
        // return $commentUser;
        // $comentario= new Comment;

        // if($id_user)
        //     return response()->json(["Comentarios Registrados"=>Comment::all($comentario->id_user, $id_user)],200);
        // return response()->json(["Todos los Comentarios Registrados"=>Comment::all()],200);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function CommentsByProduct($id=null)
    {
        $commentProduct = Comment::all()->where('product_id','=',$id);
        return response()->json(["Comentarios registrados por el producto ".$id=>$commentProduct],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
