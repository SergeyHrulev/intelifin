@extends('budget.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 justify-content-center m-3">
                <h1 style="text-align: center;">Все статьи</h1>
            </div>
            <div class="col-6 offset-3 justify-content-center">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Номер статьи</th>
                        <th>Наименование статьи</th>
                        <th>Наименование раздела</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                    <tr>
                        <td>{{ $article->article_code }}</td>
                        <td>{{ $article->article_name }}</td>
                        <td>{{ $article->section->section_name }}</td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 m-5">
                <form action="{{ url('/budget/article') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Раздел</label>
                        <select class="form-control" name="section_id">
                            <option value="">-- Выберите раздел --</option>
                            @foreach($sections as $section)
                                <option value="{{ $section->id }}">{{ $section->section_name }}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Код статьи</label>
                        <input type="text" class="form-control" id="article_code" name="article_code" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Наименование статьи</label>
                        <input type="text" class="form-control" name="article_name">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-outline-primary" value="Сохранить">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
            function setNumber(sel) {
                document.getElementById('article_code').value = sel.value + 0;
            }
    </script>
    @endsection
