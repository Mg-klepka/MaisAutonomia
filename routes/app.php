<?php

use MaisAutonomia\Controllers\App\AppController;
use MaisAutonomia\Controllers\App\ServiceController;
use MaisAutonomia\Controllers\Web\AccountController;
use MaisAutonomia\Controllers\App\ProposalController;

$app->get('/me/inicio', [AppController::class, 'home']);
$app->get('/me/perfil/{id_usuario}', [AppController::class, 'profile']);
$app->post('/me/perfil/{id_usuario}/avaliacao', [AppController::class, 'rating']);
$app->get('/me/menssagens', [AppController::class, 'messages']);

$app->get('/me/servicos/{id}', [ServiceController::class, 'show']);
$app->post('/me/servicos/cadastro', [ServiceController::class, 'store']);
$app->post('/me/servicos/atualiza/{id}', [ServiceController::class, 'update']);
$app->get('/me/servicos/deletar/{id}', [ServiceController::class, 'delete']);

$app->get('/me/propostas', [ProposalController::class, 'index']);
$app->get('/me/proposta/{id}', [ProposalController::class, 'details']);
$app->get('/me/servico/{id_servico}/proposta', [ProposalController::class, 'show']);
$app->post('/me/servico/{id_servico}/proposta', [ProposalController::class, 'store']);
$app->post('/me/proposta/{id}/atualizar', [ProposalController::class, 'update']);
$app->get('/me/proposta/{id}/atualizar/{status}/usuario/{autonomo}', [ProposalController::class, 'updateStatus']);

$app->post('/me/perfil/formexp', [AccountController::class, 'formexp']);
$app->post('/me/perfil/atualiza/{id}', [AccountController::class, 'update']);
$app->delete('/me/deletar/usuario/{id}', [AccountController::class, 'drop']);
$app->post('/me/perfil/avatar/upload', [AccountController::class, 'upload_avatar']);