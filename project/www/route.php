<?php

    return [

        "~article$~" => [src\Controllers\ArticleController::class, 'store'],
        "~article/(\d+)$~" => [src\Controllers\ArticleController::class, 'show'],
        "~article/create$~" => [src\Controllers\ArticleController::class, 'create'],
        "~article/(\d+)/edit~" => [src\Controllers\ArticleController::class, 'edit'],
        '~article/(\d+)/update~' => [\src\Controllers\ArticleController::class, 'update'],
        "~article/(\d+)/delete~" => [src\Controllers\ArticleController::class, 'delete'],

         // Маршрут для добавления комментария (POST-запрос)
        "~article/(\d+)/comments~" => [src\Controllers\CommentController::class, 'addComment'],
         // Маршруты для редактирования комментария
        "~comment/(\d+)/edit~" => [src\Controllers\CommentController::class, 'edit'],
        "~comment/(\d+)/update~" => [src\Controllers\CommentController::class, 'update'],
        // Маршруты для удаления комментария
        "~comment/(\d+)/delete~" => [src\Controllers\CommentController::class, 'delete'],
        
        "~^$~" => [src\Controllers\ArticleController::class, 'index'],
        "~^hello/(.*)$~" =>[src\Controllers\MainController::class, 'sayHello'],
        "~^bye/(.*)$~" =>[src\Controllers\MainController::class, 'sayBye'],
    ];