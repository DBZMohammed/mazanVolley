@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center bg-info text-white">
                <div class="card-header  font-weight-bold">CREATION D'UN ARTICLE</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- Formulaire --}}
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            @csrf
                            <div class="col-mb-12 mb-3 font-weight-bold">
                                <div>
                                    <label for="title">Titre de l'article : </label>
                                </div>
                                <div class="font-size-500 text-dark ">
                                        <input value="{{ old('title') }}" type="text" name="title">
                                </div>
                            </div>
                              <br>
                              <div class="custom-file justify-content-center">
                                    <div class="btn btn-primary btn-sm">
                                      <span>Choisir le fichier :</span>
                                      <input name="photo" type="file" multiple>
                                    </div>
                                </div>
                                  <br>
                                  <br>
                              <br>
                              <label class="label ">Selectionner une categorie : </label>
                              <select name="category_id" class="text-dark">

                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->title }}
                                    </option>
                                    @endforeach
                                </select>
                                <br>

                                <hr>
                            <div class="col-mb-12 mb-3 font-weight-bold">
                                <div>
                                    <label for="contenu">Contenu de l'article : </label>
                                </div>
                                <div>
                                    <textarea class="text-dark" name="content" id="content" style="width:100%" rows="5">{{ old('content') }}</textarea>
                                </div>
                            </div>
                            <div class="col-mb-12 mb-3">

                            <button type="submit" class="btn btn-light btn-lg font-weight-bold">Envoyer</button>
                            </div>

                            {{--
                            $table->boolean('draft')->default(0);
                            $table->boolean('active')->default(0);
                            $table->enum('theme',['Symphony','Laravel','Wordpress']); --}}


                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
