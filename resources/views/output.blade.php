<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akticom test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container mt-5 text-center">
        <a class="btn btn-success" href="{{ route('public') }}"> Back to insert page</a>
        <h2 class="mb-4">
            Output result parse
        </h2>
    </div>
    <div class="container">
        
        <div class="row">
            <div class="col-lg-12 mx-4 px-4">
                <div class="text-center">
                    <h2>Aktions List</h2>
                </div>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">Код</th>
                <th scope="col">Наименование</th>
                <th scope="col">Уровень 1</th>
                <th scope="col">Уровень 2</th>
                <th scope="col">Уровень 3</th>
                <th scope="col">Цена</th>
                <th scope="col">Цена СП</th>
                <th scope="col">Количество</th>
                <th scope="col">Поля свойств</th>
                <th scope="col">Совместные покупки</th>
                <th scope="col">Единица измерения</th>
                <th scope="col">Картинка</th>
                <th scope="col">Показывать на главной</th>
                <th scope="col">Описание</th>
                </tr>
            </thead>
            <tbody>
            @foreach($akticoms as $akticom)
                <tr>
                    <td><?=$akticom->code?></td>
                    <td><?=$akticom->name?></td>
                    <td><?=$akticom->level_1?></td>
                    <td><?=$akticom->level_2?></td>
                    <td><?=$akticom->level_3?></td>
                    <td><?=$akticom->price?></td>
                    <td><?=$akticom->price_sp?></td>
                    <td><?=$akticom->count?></td>
                    <td><?=$akticom->field_properties?></td>
                    <td><?=$akticom->joint_shopping?></td>
                    <td><?=$akticom->unit_measure?></td>
                    <td><?=$akticom->image?></td>
                    <td> <?php  if($akticom->view_main){
                        echo "Да";
                        }else{
                        echo "Нет";
                        }
                    ?></td>
                    <td><?=$akticom->description?></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="float-none">{!! $akticoms->links() !!}</div>
    </div>
</body>
</html>