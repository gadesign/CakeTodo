<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html ng-app="MyApp">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
     <script src="https://code.angularjs.org/1.4.3/angular.js"></script>
    <script src="js/app.js"></script>
</head>
<body ng-controller="MainCtrl" class="home container">
    <div class="row">
      <div class="panel panel-default col-sm-8 col-sm-offset-2">
          <h1 class="panel-heading text-center">Cake Todo List</h1>
          <div class="panel panel-body">
              <table class="table">
  <thead>
    <tr>
      <th>Task</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr ng-repeat="item in items">
      <td>
          <p>{{item.name}}</p>
        </td>
        <td><p>{{item.description}}</p></td>
    </tr>
  </tbody>
</table>
          </div>
      </div>
    </div>
</body>
</html>
